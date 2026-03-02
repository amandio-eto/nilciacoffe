@extends('Master.Master')
@section('title','Categories')

@section('content')

<div class="container-fluid py-4">

    {{-- Flash Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Categories</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-lg"></i> Add Category
        </button>
    </div>

    {{-- Table --}}
    <div class="card shadow-sm rounded-4">
        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th>Name</th>
                            <th style="width: 180px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $no => $c)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>{{ $c->name }}</td>
                            <td>
                                <button class="btn btn-sm btn-warning me-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $c->id }}">
                                    <i class="bi bi-pencil"></i> Edit
                                </button>
                                <a href="{{ route('categories.delete',$c->id) }}"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure to delete this category?')">
                                   <i class="bi bi-trash"></i> Delete
                                </a>
                            </td>
                        </tr>

                        {{-- Modal Edit --}}
                        <div class="modal fade" id="editModal{{ $c->id }}" tabindex="-1">
                            <div class="modal-dialog">
                                <form action="{{ route('categories.update',$c->id) }}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header bg-warning text-dark">
                                            <h5 class="modal-title">Edit Category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $c->name }}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-warning">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">No categories found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

{{-- Modal Create --}}
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter category name" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection