@extends('layouts.layout-sidebars')

@section('description')
    See your cart, and finish your purchase.
@endsection
@section('keywords')
    HomeDecor, Cart, Purchase, Decoration
@endsection

@section('title')
    Cart
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">Cart</h5>
        @if(!Session::get('user'))
            <h5 class="mt-5 fw-bold text-success">Log in to make purchase!</h5>
        @endif

        <div class="display-cart mt-4 table-responsive">
        @if($cartItems)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($cartItems as $item)
                <tr class="text-center align-middle" id="cart_item_{{$item->productId}}">
                    <td>{{$item->name}}</td>
                    <td>€{{$item->price}},00</td>
                    <td>{{$item->quantity}}</td>
                    <td><img src="{{ $item->admin_img==1 ? asset("storage/products/" .$item->image) : asset('assets/img/'.$item->image)}}" alt="{{$item->name}}" class="w-50"/></td>
                    <td><a href="" data-delete="{{$item->productId}}" class="item-delete"><i class="fa-solid fa-xmark"></i></a></td>
                </tr>
                @endforeach

                <tr class="text-end fw-bold">
                    <td class="text-start">Total: </td>
                    <td colspan="4" id="cart-page-display-price"></td>
                </tr>
                </tbody>
            </table>
        @endif
            <div id="no-items-in-cart">
                @if(!$cartItems)
                    <p class="alert alert-danger">No products in cart.<p>
                @endif
            </div>

            <a href="{{route('order')}}">Finish order</a>
        </div>
    </div>
@endsection
