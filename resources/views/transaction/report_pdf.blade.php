<h3 style="text-align:center;">Transaction Report</h3>

<table width="100%" border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Invoice</th>
            <th>User</th>
            <th>Total</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transactions as $row)
        <tr>
            <td>{{ $row->invoice_number }}</td>
            <td>{{ $row->user_name }}</td>
            <td>{{ number_format($row->grand_total,2) }}</td>
            <td>{{ $row->status }}</td>
            <td>{{ $row->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>