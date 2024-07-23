@extends('layouts.backend')
@section('content')
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Add user</h5>
                <div class="row mb-3">
                    <label for="input42" class="col-sm-3 col-form-label">Enter Your Name</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required placeholder="Enter Your Name">
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">person_outline</i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input44" class="col-sm-3 col-form-label">Email Address</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" required placeholder="Email Address">
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">send</i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input45" class="col-sm-3 col-form-label">Choose Password</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Choose Password">
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">vpn_key</i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input45" class="col-sm-3 col-form-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation"
                                placeholder="Choose Password">
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">vpn_key</i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="input46" class="col-sm-3 col-form-label">Is Admin?</label>
                    <div class="col-sm-9">
                        <select class="form-select" name="is_admin" id="input46">
                            <option selected="">Open this select menu</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-grd-danger">Register</button>
                            <a href="{{ route('user.index') }}" type="button" class="btn btn-grd-royal px-4">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
