@extends('layouts.layout-sidebars')

@section('description')
    Log in for purchase!
@endsection
@section('keywords')
    HomeDecor, Log in, Decoration
@endsection

@section('title')
    Log in
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">Log in</h5>
        <form class="mt-4" action="{{route('doLogin')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="star">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" value="@if(isset(Session::get('rightval')['email'])) {{Session::get('rightval')['email']}} @endif">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errEmail']))
                            {{Session::get('err')['errEmail']}}
                        @elseif(isset(Session::get('err')['errFormatEmail']))
                            {{Session::get('err')['errFormatEmail']}}
                        @endif
                    </div>
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password <span class="star">*</span></label>
                    <input type="password" class="form-control" id="password" name="password" value="@if(isset(Session::get('rightval')['password'])) {{Session::get('rightval')['password']}} @endif">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errPassword']))
                            {{Session::get('err')['errPassword']}}
                        @elseif(isset(Session::get('err')['errFormatPassword']))
                            {{Session::get('err')['errFormatPassword']}}
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-warning text-white my-3">Submit</button>
        </form>
        @if(Session::get('noUser'))
            <p class="alert alert-warning">{{Session::get('noUser')}}</p>
        @endif
    </div>
@endsection
