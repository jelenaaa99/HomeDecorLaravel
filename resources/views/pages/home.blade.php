@extends('layouts.layout')
@section('description')
    Welcome to HomeDecor! Where we care about your home and your style. Visit us and get some great ideas for both interior and exterior of your home.
@endsection
@section('keywords')
    HomeDecor, home, design, style, decoration
@endsection

@section('title')
    Home
@endsection

@section('content')
<!--HomeSlider-->
<div id="home-slider" class="mt-4 m-0 m-md-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @for($i=0; $i<count($slider); $i++)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$i}}" class="@if($i==0) active @endif" @if($i==0) aria-current="true" @endif aria-label="Slide {{$i}}"></button>
            @endfor
        </div>
        <div class="carousel-inner">
            @for($i=0; $i<count($slider); $i++)
                <div class="carousel-item @if($i==0) active @endif">
                    <img src="{{asset('assets/img/'. $slider[$i]->image )}}" class="d-block w-100" alt="{{$slider[$i]->alt}}">
                </div>
            @endfor
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--EndHomeSlider-->



<!--HomePageDesign-->
<div id="home-page" class="m-0 mt-5 p-0">
    <div class="title fw-bold text-muted mb-4 mx-4">GET INSPIRED WITH OUR DESIGN</div>
    <div id="gallery">
        <div class="row m-1">
            @foreach($gallery as $g)
                <div class="image col-12 col-sm-6 col-md-4">
                    <img src="{{asset('assets/img/'. $g->image )}}" alt="{{$g->alt}}" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>

    <div id="spotlight-products" class="mt-5">
        <div class="title fw-bold text-muted mb-4 mx-4">PRODUCTS IN THE SPOTLIGHTS</div>
        <div class="row mx-4">
            @foreach($spotlight as $product)
               @include('partials.product')
            @endforeach
        </div>
    </div>
</div>
<!--EndHomePageDesign-->
@endsection
