@extends('Master.Master')
@section('title','Supplier')
@section('content')

<!-- Register Button -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">
    <i class="bi bi-person-plus-fill"></i> Register Supplier
</button>

<!-- Supplier Table -->
<div class="table-responsive shadow-sm rounded">
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th class="text-center">No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th class="text-center" width="160">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $no => $s)
            <tr>
                <td class="text-center">{{ $no+1 }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->phone }}</td>
                <td>{{ $s->address }}</td>
                <td class="text-center">
                    <!-- Edit Button -->
                    <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $s->id }}">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>

                    <!-- Delete Button -->
                    <a href="{{ route('suppliers.delete',$s->id) }}"
                       onclick="return confirm('Yakin hapus?')"
                       class="btn btn-danger btn-sm">
                       <i class="bi bi-trash-fill"></i> Delete
                    </a>
                </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal{{ $s->id }}" tabindex="-1">
                <div class="modal-dialog">
                    <form action="{{ route('suppliers.update',$s->id) }}" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header bg-warning text-dark">
                                <h5 class="modal-title"><i class="bi bi-pencil-square"></i> Edit Supplier</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $s->name }}" required>
                                </div>

                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ $s->phone }}">
                                </div>

                                <div class="mb-3">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control">{{ $s->address }}</textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="bi bi-x-circle"></i> Close
                                </button>
                                <button class="btn btn-warning">
                                    <i class="bi bi-save"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Create -->
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" style="color: white;"><i class="bi bi-person-plus-fill"></i> Register Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Address</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"></i> Close
                    </button>
                    <button class="btn btn-primary">
                        <i class="bi bi-check-circle"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection