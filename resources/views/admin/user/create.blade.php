@extends('layouts.template')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Admin</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="card">
                <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary" style="float: right">Back</a>

            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">USERS</h6>
    <hr>
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data User

                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="post">
                            @csrf
                            <div class="mb-2">
                                <label for="">Name User</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror"
                                    name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Password</label>
                                <select type="text" class="form-control @error('isAdmin') is-invalid @enderror"
                                    name="isAdmin">
                                    <option value="0" {{ old('isAdmin') == 0 ? 'selected' : '' }}>User</option>
                                    <option value="1" {{ old('isAdmin') == 1 ? 'selected' : '' }}>Admin</option>
                                </select>
                                @error('isAdmin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">
                                    Simpan
                                </button>
                                <button class="btn btn-sm btn-danger" type="reset">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
