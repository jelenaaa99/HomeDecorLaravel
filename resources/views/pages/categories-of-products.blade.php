@extends('layouts.layout-sidebars')

@section('description')
    View all of our categories of products, and choose a product for you house. We offer furniture, home accessories, outdoor and lighting items for home decoration.
@endsection
@section('keywords')
    HomeDecor, Furniture, Brand, Outdoor, Lighting, decoration, categories, Products
@endsection

@section('title')
    Products
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">PRODUCTS</h5>
        <p class="mt-4">Welcome to HomeDecor, your online interior store with trendy furniture and lighting for your interior online to shop. We have furniture, lighting, decorations & lifestyle items in various styles in our online store for you easily to shop.
            HomeDecor offers you a wide range of country-style decoration and country furniture with matching country lighting, in short, everything for your rural interior is online in store at LIVING-shop webshop. Would you like to visit our showroom to see the furniture in real? You are always welcome by appointment. Check out our showroom video here, what you can expect in the HomeDecor showroom.
            You see, living rural with HomeDecor lighting shop, country-style living and furniture webshop. Rural living with HomeDecor interior shop is cozy and creates warm interiors where you feel welcome at home.
            You will find everything for your Interior and your House in country style. Do you have an interior problem or is good advice welcome?
            Please email us your questions, with accompanying photo or join us and we will be happy to assist you!</p>
        <div class="row">
            @foreach($categories as $cat)
                <div class="col-6 col-md-4">
                    <a href="{{route('displaySubcategories', ['parentId'=>$cat->id])}}">
                        <img src="{{asset('assets/img/' . $cat->image )}}" alt="{{$cat->name}}" class="img-fluid">
                    </a>
                    <p class="text-center">{{$cat->name}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
