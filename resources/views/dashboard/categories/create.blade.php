@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-8">
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf




                <div class="input-group input-group-outline my-3 ">
                    <label class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="input-group input-group-outline my-3 ">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" onfocus="focused(this)"
                           onfocusout="defocused(this)">
                </div>


                <div class="input-group input-group-outline my-3 ">
                    <label class="form-label">Parent Category</label>
                    <select name="parent_id" class="form-control form-select">
                        <option value="">Main Category</option>
                        {!! $categories !!}
                    </select>
                </div>


                <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Add</button>
                </div>
                <a href="/admin/categories" class="btn btn-outline-primary ">Back</a>
            </form>
        </div>
    </div>
@endsection
