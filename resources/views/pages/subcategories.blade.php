@extends('layouts.layout-sidebars')

@section('description')
    View all of our categories of products, and choose a product for you house. We offer furniture, home accessories, outdoor and lighting items for home decoration.
@endsection
@section('keywords')
    HomeDecor, Furniture, Brand, Outdoor, Lighting, decoration, categories, Products
@endsection

@section('title')
    {{$mainCategory->name}}
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">{{$mainCategory->name}}</h5>
        <p class="mt-4">{{$mainCategory->description}}</p>
        <div class="row mx-0 my-5">
            @foreach($subcategories as $s)
                <div class="col-6 col-md-4">
                    <a href="{{route('productsByCategory', ['route'=>$s->route,'subId'=>$s->id])}}">
                        <img src="{{asset('assets/img/' . $s->image )}}" alt="{{$s->name}}" class="img-fluid">
                    </a>
                    <p class="text-center">{{$s->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
