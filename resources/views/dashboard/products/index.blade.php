@extends('layouts.dashboard')
@section('content')

    <a href="/admin/products/create" class="btn bg-gradient-primary">Create Product</a>

    <table class="table">
        <thead>
        <tr style="color: #0d376f ">
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>User_id</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td><a href="/admin/products/{{ $product->id }}">{{ $product->name }}</a></td>
                <td><img width="50" height="50" src="/assets/img/products/thumbnails/{{ $product->image }}"></td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->user_id }}</td>
                <td>{!! $product->description !!}</td>
                <td><a href="/admin/products/{{ $product->id }}/edit" class="btn btn-outline-primary ">Edit User</a></td>


            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



