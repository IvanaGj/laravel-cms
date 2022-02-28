@extends('layouts.dashboard')
@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Create Settings</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start" method="post" action="/admin/settings" enctype="multipart/form-data">
                            @csrf

                            <div class="input-group input-group-outline my-3 ">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            @error('title')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline my-3 ">
                                <label for="url" class="form-label">URL</label>
                                <input type="text" class="form-control" name="url">
                            </div>
                            @error('url')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            @error('email')
                            <p> {{ $message }}</p>
                            @enderror

                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" id="description-settings" class="form-control" name="description"></textarea>


                            <div class="input-group input-group-outline my-3 ">
                                <label for="logo" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                            @error('logo')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            @error('address')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            @error('phone')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" name="twitter">
                            </div>
                            @error('twitter')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="facebook">
                            </div>
                            @error('facebook')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="skype" class="form-label">Skype</label>
                                <input type="text" class="form-control" name="skype">
                            </div>
                            @error('skype')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input type="text" class="form-control" name="linkedin">
                            </div>
                            @error('linkedin')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="input-group input-group-outline mb-3 ">
                                <label for="youtube" class="form-label">YouTube</label>
                                <input type="text" class="form-control" name="youtube">
                            </div>
                            @error('youtube')
                            <p> {{ $message }}</p>
                            @enderror

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Save Settings</button>
                            </div>
                            <a href="/admin/settings" class="btn btn-outline-primary ">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



