@extends('layouts.layout-sidebars')

@section('description')
    {{$productsBrand[0]->description}}
@endsection
@section('keywords')
    HomeDecor, Brands, decoration, {{$productsBrand[0]->name}}
@endsection

@section('title')
    {{$productsBrand[0]->name}}
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">{{$productsBrand[0]->brandName}}</h5>
        <p class="mt-4">{{$productsBrand[0]->brandDesc}}</p>
        <div class="row mx-0 my-5">
            <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last w-100">
                @if(count($productsBrand)!=0)
                    <div class="row m-0">
                        @foreach($productsBrand as $product)
                            @include('partials.product')
                        @endforeach
                    </div>
                    <div class="pag-style pt-2">
                        {{ $productsBrand->links() }}
                    </div>
                @endif
                @if(count($productsBrand)==0)
                    <p class="alert alert-danger mt-4">No products of this brand.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
