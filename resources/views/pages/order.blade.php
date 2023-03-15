@extends('layouts.layout-sidebars')

@section('description')
    Finish your order, and get your products.
@endsection
@section('keywords')
    HomeDecor, Order, Purchase, Decoration
@endsection

@section('title')
    Order
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">Finish order</h5>

        @if(!Session::get('success') && Session::get('cart'))
        <form action="{{route('doOrder')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label for="country" class="form-label">Country <span class="star">*</span></label>
                    <input type="text" class="form-control" id="country" name="country" value="{{isset(Session::get('rightval')['country']) ? Session::get('rightval')['country'] : Session::get('user')->country}}">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errCountry']))
                            {{Session::get('err')['errCountry']}}
                        @elseif(isset(Session::get('err')['errFormatCountry']))
                            {{Session::get('err')['errFormatCountry']}}
                        @endif
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="city" class="form-label">City <span class="star">*</span></label>
                    <input type="text" class="form-control" id="city" name="city" value="{{isset(Session::get('rightval')['city']) ? Session::get('rightval')['city'] : Session::get('user')->city}}">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errCity']))
                            {{Session::get('err')['errCity']}}
                        @elseif(isset(Session::get('err')['errFormatCity']))
                            {{Session::get('err')['errFormatCity']}}
                        @endif
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="address" class="form-label">Address <span class="star">*</span></label>
                    <input type="text" class="form-control" id="address" name="address" value="{{isset(Session::get('rightval')['address']) ? Session::get('rightval')['address'] : Session::get('user')->address}}">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errAddress']))
                            {{Session::get('err')['errAddress']}}
                        @elseif(isset(Session::get('err')['errFormatAddress']))
                            {{Session::get('err')['errFormatAddress']}}
                        @endif
                    </div>
                </div>

                <div class="col-12 col-sm-6">
                    <label for="phone" class="form-label">Phone <span class="star">*</span></label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{isset(Session::get('rightval')['phone']) ? Session::get('rightval')['phone'] : Session::get('user')->phone}}">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errPhone']))
                            {{Session::get('err')['errPhone']}}
                        @elseif(isset(Session::get('err')['errFormatPhone']))
                            {{Session::get('err')['errFormatPhone']}}
                        @endif
                    </div>
                </div>
                <input type="hidden" id="user_id" name="user_id" value="{{Session::get('user')->id}}">
                <small class="fw-bold my-2">Please check the data and enter new ones if necessary.</small>
            </div>
            <input type="submit" class="btn btn-success" value="Order"/>
        </form>
        @endif

        <div>
            <p class="alert my-4 @if(Session::get('success')) alert-success @elseif(Session::get('dbError') || !Session::get('cart')) alert-danger @endif">
                @if(Session::get('success')) {{Session::get('success')}} @elseif(Session::get('dbError'))
                {{Session::get('dbError')}} @elseif(!Session::get('cart')) No products in cart! @endif
            </p>
        </div>
    </div>
@endsection
