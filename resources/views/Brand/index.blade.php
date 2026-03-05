@extends('Master.Master')

@section('content')
<div class="container">

    <h4>My Brand Setting</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Brand Name</th>
                <th>Image</th>
                <th width="120">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $key => $brand)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $brand->brand_name }}</td>
                <td>
                    @if($brand->images)
                        <img src="{{ asset('brand/'.$brand->images) }}" width="60">
                    @endif
                </td>
                <td>
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $brand->id }}">
                        Edit
                    </button>
                </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal{{ $brand->id }}">
                <div class="modal-dialog">
                    <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-content p-3">
                            <h5>Edit Brand</h5>

                            <input type="text"
                                   name="brand_name"
                                   value="{{ $brand->brand_name }}"
                                   class="form-control mb-2"
                                   required>

                            <input type="file"
                                   name="images"
                                   class="form-control mb-2">

                            <button class="btn btn-success w-100">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>

</div>
@endsection