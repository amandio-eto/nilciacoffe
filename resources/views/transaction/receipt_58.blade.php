<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: "Courier New", monospace;
            font-size: 12px;
           
        }
        .center { text-align: center; }
        .line { border-bottom: 1px dashed #000; margin: 2px 0; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 2px 0; }
        .right { text-align: right; }
    </style>
</head>
<body>
    <div class="center">
        <h4>{{ $transaction->store_name ?? 'NINE COFFE' }}</h4>
        <p>Invoice: {{ $transaction->invoice_number }}</p>
        <p>Date: {{ \Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y H:i') }}</p>
    </div>

    <div class="line"></div>

    <table>
        <thead>
            <tr>
                <td>Item</td>
                <td class="right">Qty</td>
                <td class="right">Price</td>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td class="right">{{ $item->qty }}</td>
                <td class="right">{{ number_format($item->price * $item->qty,2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="line"></div>

    <table>
        <tr>
            <td>Total</td>
            <td class="right">{{ number_format($transaction->grand_total,2) }}</td>
        </tr>
        <tr>
            <td>Paid</td>
            <td class="right">{{ number_format($transaction->paid_amount,2) }}</td>
        </tr>
        <tr>
            <td>Change</td>
            <td class="right">{{ number_format($transaction->change_amount,2) }}</td>
        </tr>
    </table>

    <div class="line"></div>
    <p class="center">Thank you! Visit Again ☕</p>
</body>
</html>