@extends('Master.Master')
@section('title','Stock History')

@section('content')

<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    + Add Stock
</button>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Product</th>
            <th>Type</th>
            <th>Qty</th>
            <th>Description</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($history as $key=>$h)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $h->name }}</td>
            <td>
                @if($h->type == 'in')
                    <span class="badge bg-success">IN</span>
                @else
                    <span class="badge bg-danger">OUT</span>
                @endif
            </td>
            <td>{{ $h->quantity }}</td>
            <td>{{ $h->description }}</td>
            <td>{{ $h->created_at }}</td>
            <td>
                <button class="btn btn-sm btn-warning"
                    data-bs-toggle="modal"
                    data-bs-target="#editModal{{ $h->id }}">
                    Edit
                </button>

                <a href="/stock/delete/{{ $h->id }}"
                   onclick="return confirm('Delete?')"
                   class="btn btn-sm btn-danger">
                   Delete
                </a>
            </td>
        </tr>


        {{-- Edit Modal --}}
        <div class="modal fade" id="editModal{{ $h->id }}">
            <div class="modal-dialog">
                <form method="POST" action="/stock/update/{{ $h->id }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit Stock</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">

                            <select name="type" class="form-control mb-2">
                                <option value="in" {{ $h->type=='in'?'selected':'' }}>IN</option>
                                <option value="out" {{ $h->type=='out'?'selected':'' }}>OUT</option>
                            </select>

                            <input type="number" name="quantity"
                                   value="{{ $h->quantity }}"
                                   class="form-control mb-2" required>

                            <input type="text" name="description"
                                   value="{{ $h->description }}"
                                   class="form-control">

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @endforeach
    </tbody>
</table>



{{-- Create Modal --}}
<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <form method="POST" action="/stock/store">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <select name="product_id" class="form-control mb-2" required>
                        <option value="">Select Product</option>
                        @foreach($products as $p)
                        <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                    </select>

                    <select name="type" class="form-control mb-2">
                        <option value="in">IN</option>
                        <option value="out">OUT</option>
                    </select>

                    <input type="number" name="quantity"
                           class="form-control mb-2"
                           placeholder="Quantity" required>

                    <input type="text" name="description"
                           class="form-control"
                           placeholder="Description">

                </div>
                <div class="modal-footer">
                    <button class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection