@extends('layouts.layout-sidebars')

@section('description')
    {{$product->description}}
@endsection
@section('keywords')
    HomeDecor, {{$product->name}}, Products
@endsection

@section('title')
    {{$product->name}}
@endsection

@section('content')
    @include('fixed.sidebar-info')
    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">{{$product->name}}</h5>
        <div class="row m-0">
            <div class="col-12 col-md-6">
                <img src="{{ $product->admin_img==1 ? asset("storage/products/" .$product->img) : asset('assets/img/'.$product->img)}}" alt="{{$product->name}}" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 mb-3">
                <p><b class="text-black">Category:</b> &nbsp; &nbsp; {{$product->catName}}</p>
                <p><b class="text-black">Brand:</b> &nbsp; &nbsp; {{$product->brandName}}</p>
                <p><b class="text-black">Price:</b> &nbsp; &nbsp; €{{$product->price}}</p>
                <p class="description">{{$product->description}}</p>
                @if(Session::get('user'))
                    <a href="" data-id="{{$product->id}}" class="btn btn-warning text-white fw-bold btn-cart">Add to basket</a>
                @endif
                @if(!Session::get('user'))
                    <p class="mt-5 fw-bold text-success">Log in to purchase this product!</p>
                @endif
            </div>
        </div>
    </div>
@endsection
