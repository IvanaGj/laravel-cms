@extends('layouts.dashboard')
@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add New User</h4>
                            <div class="row mt-3">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start" method="post" enctype="multipart/form-data" action="/admin/users">
                            @csrf

                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            @error('name')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            @error('image')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline my-3 ">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" >
                            </div>
                            @error('email')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            @error('password')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Create User</button>
                            </div>
                            <a href="/admin/users" class="btn btn-outline-primary ">Back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
