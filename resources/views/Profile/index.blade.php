@extends('Master.Master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">My Profile</h5>
                </div>

                <div class="card-body">

                    {{-- Success Message --}}
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Error Message --}}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <div class="row">

                        {{-- ================= PHOTO SECTION ================= --}}
                        <div class="col-md-4 text-center border-end">

                            <h6 class="mb-3">Profile Photo</h6>

                            @if(Auth::user()->foto)
                                <img src="{{ asset('profile/'.Auth::user()->foto) }}"
                                     class="img-thumbnail mb-3"
                                     width="150"
                                     id="previewImage">
                            @else
                                <img src="https://via.placeholder.com/150"
                                     class="img-thumbnail mb-3"
                                     id="previewImage">
                            @endif

                            <form action="{{ route('profile.photo') }}"
                                  method="POST"
                                  enctype="multipart/form-data">

                                @csrf

                                <input type="file"
                                       name="foto"
                                       class="form-control mb-2"
                                       onchange="previewFile(this)"
                                       required>

                                <button class="btn btn-success w-100">
                                    Upload Photo
                                </button>
                            </form>

                        </div>


                        {{-- ================= PASSWORD SECTION ================= --}}
                        <div class="col-md-8">

                            <h6 class="mb-3">Change Password</h6>

                            <form action="{{ route('profile.password') }}"
                                  method="POST">

                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                               name="current_password"
                                               class="form-control"
                                               id="current_password"
                                               required>
                                        <button type="button"
                                                class="btn btn-outline-secondary"
                                                onclick="togglePassword('current_password')">
                                            👁
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                               name="new_password"
                                               class="form-control"
                                               id="new_password"
                                               required>
                                        <button type="button"
                                                class="btn btn-outline-secondary"
                                                onclick="togglePassword('new_password')">
                                            👁
                                        </button>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password"
                                               name="new_password_confirmation"
                                               class="form-control"
                                               id="new_password_confirmation"
                                               required>
                                        <button type="button"
                                                class="btn btn-outline-secondary"
                                                onclick="togglePassword('new_password_confirmation')">
                                            👁
                                        </button>
                                    </div>
                                </div>

                                <button class="btn btn-primary w-100">
                                    Change Password
                                </button>

                            </form>

                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

{{-- ================= JAVASCRIPT ================= --}}
<script>
function togglePassword(id) {
    let input = document.getElementById(id);
    input.type = input.type === "password" ? "text" : "password";
}

function previewFile(input) {
    let file = input.files[0];
    let reader = new FileReader();

    reader.onloadend = function () {
        document.getElementById('previewImage').src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}
</script>

@endsection