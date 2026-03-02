@extends('Master.Master')
@section('title','Transactions')

@section('content')
<div class="container mt-4">
    <h4>Transaction List</h4>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>User</th>
                <th>Total</th>
                <th>Status</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $key => $trx)
            <tr>
                <td>{{ $transactions->firstItem() + $key }}</td>
                <td>{{ $trx->invoice_number }}</td>
                <td>{{ $trx->user->name ?? '-' }}</td>
                <td>$ {{ number_format($trx->grand_total,2) }}</td>
                <td>{{ ucfirst($trx->status) }}</td>
                <td>{{ $trx->created_at }}</td>
                <td>
                    <a href="{{ route('transaction.print', $trx->id) }}" class="btn btn-sm btn-primary">
                        Print
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $transactions->links() }}
</div>
@endsection