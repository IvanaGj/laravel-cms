@extends('layouts.dashboard')
@section('content')
    <<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Edit Product</h4>
        </div>
    </div>
    <div class="card-body">
        <form role="form" class="text-start" method="post" action="/products/{{ $product->id }}">
            @csrf
            @method('put')

            <div class="input-group input-group-outline my-3 ">
                <label class="form-label"></label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}">
            </div>

            <div class="input-group input-group-outline my-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}">
            </div>



            <a href="/admin/products/update" class="btn bg-gradient-primary">Update</a>

        </form>
    </div>
@endsection
