@extends('Master.Master')
@section('title','Transaction Report')

@section('content')

<form method="GET" action="{{ route('transactions.report') }}" class="row mb-4">

    <div class="col-md-3">
        <label>User</label>
        <select name="user_id" class="form-control">
            <option value="">-- All Users --</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" 
                    {{ request('user_id') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3">s
        <label>Start Date</label>
        <input type="date" name="start_date" 
               value="{{ request('start_date') }}" 
               class="form-control">
    </div>

    <div class="col-md-3">
        <label>End Date</label>
        <input type="date" name="end_date" 
               value="{{ request('end_date') }}" 
               class="form-control">
    </div>

    <div class="col-md-3 mt-4">
        <button class="btn btn-primary">
            <i class="fa fa-search"></i> Filter
        </button>

        <a href="{{ route('transactions.report.pdf', request()->all()) }}" 
           class="btn btn-danger">
            <i class="fa fa-file-pdf"></i> Export PDF
        </a>
    </div>

</form>


<table class="table table-bordered">
    <thead class="table-dark">
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
            <td>${{ number_format($row->grand_total,2) }}</td>
            <td>{{ $row->status }}</td>
            <td>{{ $row->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection