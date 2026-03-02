@extends('Master.Master')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h4>👤 User Management</h4>
        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#createModal">
            + Add User
        </button>
    </div>

  @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops! Ada kesalahan:</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th width="180">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <span class="badge bg-{{ $user->role == 'admin' ? 'danger' : 'secondary' }}">
                        {{ ucfirst($user->role) }}
                    </span>
                </td>
                <td>
                    <button class="btn btn-sm btn-warning"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $user->id }}">
                        Edit
                    </button>

                    <form action="{{ route('users.destroy', $user->id) }}"
                        method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this user?')"
                            class="btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>

            {{-- EDIT MODAL --}}
            <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="modal-header">
                                <h5 class="modal-title">Edit User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                <div class="mb-2">
                                    <label>Name</label>
                                    <input type="text" name="name"
                                        class="form-control"
                                        value="{{ $user->name }}" required>
                                </div>

                                <div class="mb-2">
                                    <label>Email</label>
                                    <input type="email" name="email"
                                        class="form-control"
                                        value="{{ $user->email }}" required>
                                </div>

                                <div class="mb-2">
                                    <label>Password </label>
                                    <input type="password" name="password"
                                        class="form-control">
                                </div>

                                <div class="mb-2">
                                    <label>Role</label>
                                    <select name="role" class="form-control">
                                        <option value="admin"
                                            {{ $user->role == 'admin' ? 'selected' : '' }}>
                                            Admin
                                        </option>
                                        <option value="cashier"
                                            {{ $user->role == 'cashier' ? 'selected' : '' }}>
                                            Cashier
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            @endforeach
        </tbody>
    </table>
</div>


{{-- CREATE MODAL --}}
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label>Password</label>
                        <input type="password" name="password"
                            class="form-control" required>
                    </div>

                    <div class="mb-2">
                        <label>Role</label>
                        <select name="role" class="form-control">
                            <option value="cashier">Chashier</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-dark">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection