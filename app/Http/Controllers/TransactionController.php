<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Product;
use Carbon\Carbon;

class TransactionController extends Controller
{

    public function report(Request $request)
{
    $query = DB::table('transactions as t')
        ->leftJoin('users as u', 'u.id', '=', 't.user_id')
        ->select('t.*', 'u.name as user_name');

    // Filter by user
    if ($request->user_id) {
        $query->where('t.user_id', $request->user_id);
    }

    // Filter by date range
    if ($request->start_date && $request->end_date) {
        $query->whereBetween(DB::raw('DATE(t.created_at)'), [
            $request->start_date,
            $request->end_date
        ]);
    }



    $transactions = $query->orderBy('t.created_at', 'desc')->get();
    $users = DB::table('users')->get();

    return view('transaction.report', compact('transactions','users'));
}

public function show(Request $request)
{
   $query = DB::table('transactions as t')
        ->leftJoin('users as u', 'u.id', '=', 't.user_id')
        ->select('t.*', 'u.name as user_name');

    // Filter by user
    if ($request->user_id) {
        $query->where('t.user_id', $request->user_id);
    }

    // Filter by date range
    if ($request->start_date && $request->end_date) {
        $query->whereBetween(DB::raw('DATE(t.created_at)'), [
            $request->start_date,
            $request->end_date
        ]);
    }



    $transactions = $query->orderBy('t.created_at', 'desc')->get();
    $users = DB::table('users')->get();

    return view('transaction.report', compact('transactions','users'));
}


public function reportPdf(Request $request)
{
    $query = DB::table('transactions as t')
        ->leftJoin('users as u', 'u.id', '=', 't.user_id')
        ->select('t.*', 'u.name as user_name');

    if ($request->user_id) {
        $query->where('t.user_id', $request->user_id);
    }

    if ($request->start_date && $request->end_date) {
        $query->whereBetween(DB::raw('DATE(t.created_at)'), [
            $request->start_date,
            $request->end_date
        ]);
    }

    $transactions = $query->orderBy('t.created_at', 'desc')->get();

    $pdf = Pdf::loadView('transaction.report_pdf', compact('transactions'));
    return $pdf->download('Transaction_Report.pdf');
}



    
    // List all transactions
    public function index()
    {
        $transactions = DB::table('transactions')->orderBy('created_at','desc')->paginate(20);
        return view('transaction.index', compact('transactions'));
    }

    public function store(Request $request)
    {

          {
        $request->validate([
            'products' => 'required|array',
            'payment_method' => 'required',
            'paid_amount' => 'required|numeric',
        ]);

        DB::beginTransaction();
        try {
            $total = 0;
        foreach ($request->products as $item) {

            // Ambil data produk dari table products
            $product = DB::table('products')->where('id', $item['id'])->first();

            if (!$product) continue;

            // Hitung subtotal
            $subtotal = $product->price * $item['qty'];
            $total += $subtotal;

            // Kurangi stock langsung di DB
            DB::table('products')
                ->where('id', $item['id'])
                ->update([
                    'stock' => $product->stock - $item['qty']
                ]);
            }

            $grand_total = $total;
            $paid_amount = $request->paid_amount;
            $change_amount = $paid_amount - $grand_total;

            // Invoice number
            $invoice_number = 'INV-' . strtoupper(Str::random(6)) . '-' . date('ymd');

            // Simpan transaksi
            $transaction_id = DB::table('transactions')->insertGetId([
                'invoice_number' => $invoice_number,
                'user_id' => auth()->id(),
                'customer_id' => null,
                'table_id' => null,
                'total' => $total,
                'tax' => 0,
                'discount' => 0,
                'grand_total' => $grand_total,
                'payment_method' => $request->payment_method,
                'paid_amount' => $paid_amount,
                'change_amount' => $change_amount,
                'status' => 'paid',
                'created_at' => Carbon::now(),
            ]);

            // Simpan detail transaksi
            foreach ($request->products as $item) {
                $product = Product::find($item['id']);
                if (!$product) continue;

                DB::table('transaction_details')->insert([
                    'transaction_id' => $transaction_id,
                    'product_id' => $product->id,
                    'qty' => $item['qty'],
                    'price' => $product->price,
                    'subtotal' => $product->price * $item['qty'],
                    'created_at' => Carbon::now(),
                ]);
            }

            // Ambil data transaksi & details pakai Query Builder
            $transaction = DB::table('transactions')->where('id', $transaction_id)->first();

            $details = DB::table('transaction_details as td')
                         ->join('products as p', 'p.id', '=', 'td.product_id')
                         ->where('td.transaction_id', $transaction_id)
                         ->select('p.name', 'td.qty', 'td.price', 'td.subtotal')
                         ->get();

            // Load PDF langsung
            $width = 164; // 58mm
            $height = 500; // tinggi default, bisa menyesuaikan isi

            $pdf = Pdf::loadView('transaction.receipt_58', compact('transaction', 'details'))
                    ->setPaper([0, 0, $width, $height]); // format [x0, y0, x1, y1]// 58mm thermal paper
            DB::commit();

            return $pdf->stream('receipt-'.$transaction->invoice_number.'.pdf');

        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }
}
         
    

    // Print PDF receipt (58mm thermal)
    public function print($id)
    {
        $transaction = DB::table('transactions')->where('id', $id)->first();

        $details = DB::table('transaction_details as td')
                     ->join('products as p', 'p.id', '=', 'td.product_id')
                     ->where('td.transaction_id', $id)
                     ->select('p.name', 'td.qty', 'td.price')
                     ->get();

        $pdf = Pdf::loadView('transaction.receipt_58', compact('transaction', 'details'))
                  ->setPaper([0, 0, 570, 850]);

        return $pdf->stream('receipt-'.$transaction->invoice_number.'.pdf');
    }
}