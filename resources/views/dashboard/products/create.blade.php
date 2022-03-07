@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Add Product</h4>
                        <div class="row mt-3">

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <form role="form" class="text-start" method="post" action="/admin/products" enctype="multipart/form-data">

                        @csrf

                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" name="price">
                        </div>

                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">Quantity</label>
                            <input type="text" class="form-control" name="quantity">
                        </div>

                        <div class="input-group input-group-outline my-3 ">
                            <label class="form-label">User_Id</label>
                            <input type="text" class="form-control" name="user_id">
                        </div>

                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" id="description-settings" class="form-control" name="description"></textarea>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Save Product</button>
                        </div>
                        <a href="/admin/products" class="btn btn-outline-primary ">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
