@extends('layouts.admin.admin-layout')

@section('description')
    Admin panel - insert product
@endsection
@section('keywords')
    Admin panel - insert products
@endsection

@section('title')
    Admin panel - insert products
@endsection


@section('content')
    <div id="admin-content" class="my-5 mx-2">
        <h5 class="my-4 text-center fw-bold">Insert Products</h5>

            <form action="{{route('insertProduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="products" class="row m-0 p-3">

                    <div class="mb-3">
                        <label for="name" class="form-label">Product name <span class="star">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="@if(isset(Session::get('ri')['name'])) {{Session::get('ri')['name']}} @endif">
                        <small class="text-danger">@if(isset(Session::get('err')['ername'])) {{Session::get('err')['ername']}} @endif</small>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description <span class="star">*</span></label>
                        <textarea class="form-control" id="desc" name="desc" rows="3">@if(isset(Session::get('ri')['desc'])) {{Session::get('ri')['desc']}} @endif</textarea>
                        <small class="text-danger">@if(isset(Session::get('err')['erdesc'])) {{Session::get('err')['erdesc']}} @endif</small>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price <span class="star">*</span></label>
                        <input type="number" class="form-control" id="price" name="price">
                        <small class="text-danger">@if(isset(Session::get('err')['erprice'])) {{Session::get('err')['erprice']}} @endif</small>
                    </div>

                    <div class="mb-3">
                        <label for="spot" class="form-label">Spotlight <span class="star">*</span></label>
                        <input type="text" class="form-control" id="spot" name="spot" placeholder="Insert 1 or 0 - to be visible in home page" value="@if(isset(Session::get('ri')['spot'])) {{Session::get('ri')['spot']}} @endif">
                        <small class="@if(isset(Session::get('err')['erspot'])) text-danger @else text-muted @endif">
                            @if(isset(Session::get('err')['erspot'])) {{Session::get('err')['erspot']}} @endif
                        </small>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image <span class="star">*</span></label>
                        <input type="file" class="form-control" id="image" name="image">
                        <small class="text-danger">@if(isset(Session::get('err')['erimg'])) {{Session::get('err')['erimg']}} @endif</small>
                    </div>


                    <p class="mb-0 fw-bold">Categories</p>
                    <select class="form-select w-50 mx-2 mb-2" name="cat">
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>

                    <p class="mb-0 fw-bold">Brands</p>
                    <select class="form-select w-50 mx-2 mb-2" name="brand">
                        @foreach($brands as $b)
                            <option value="{{ $b->id }}">{{ $b->name }}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success btn-sm" value="Submit">
                    </div>
                </div>
            </form>

            <p class="alert mx-4 @if(Session::get('success')) alert-success @elseif(Session::get('error')) alert-danger @endif">@if(Session::get('success'))
                {{Session::get('success')}} @elseif(Session::get('error')) {{Session::get('error')}} @endif</p>
    </div>
@endsection
