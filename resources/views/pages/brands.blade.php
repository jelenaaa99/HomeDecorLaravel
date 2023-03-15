@extends('layouts.layout-sidebars')

@section('description')
    View all of our brands, and choose a product for you house. We offer furniture, home accessories, outdoor and lighting items for home decoration.
@endsection
@section('keywords')
    HomeDecor, Furniture, Brand, Outdoor, Lighting, decoration, categories, Products
@endsection

@section('title')
    Brands
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class mb-4">BRANDS</h5>
        <div class="row m-0">
            @foreach($brands as $b)
                <div class="col-6 col-md-4 p-2">
                    <a href="{{route('singleBrand', ['brandId'=>$b->id])}}">
                        <div class="brand-height d-flex justify-content-center align-items-center">
                            <img src="{{asset('assets/img/' . $b->img )}}" alt="{{$b->name}}" class="img-fluid p-2">
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
