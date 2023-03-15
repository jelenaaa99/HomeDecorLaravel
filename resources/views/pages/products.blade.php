@extends('layouts.layout-sidebars')

@section('description')
    View all of our products of {{count($products)==0 ? "" : $products[0]->catName}} category, and choose a product for you house.
@endsection
@section('keywords')
    HomeDecor, {{count($products)==0 ? "" : $products[0]->catName}}, Products
@endsection

@section('title')
    {{count($products)==0 ? "" : $products[0]->catName}}
@endsection

@section('content')
    @include('fixed.sidebar-filter')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        @if(count($products)!=0)
        <h5 class="text-muted fw-bold border-bottom-class">{{$products[0]->catName}}</h5>
        <p class="mt-4 mb-4">{{$products[0]->catDesc}}</p>
        <div class="row" id="displayProducts">
            @foreach($products as $product)
                @include('partials.product')
            @endforeach
        </div>
            <div class="pag-style pt-2">
                {{ $products->links() }}
            </div>
        @endif
        @if(count($products)==0)
            <p class="alert alert-danger mt-4">No products for this category.</p>
            @endif
    </div>
@endsection
