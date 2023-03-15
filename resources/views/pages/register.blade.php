@extends('layouts.layout-sidebars')

@section('description')
    Register for extra great options!
@endsection
@section('keywords')
    HomeDecor, Register, Decoration
@endsection

@section('title')
    Register
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">Register</h5>
        <form method="post" action="{{route('doRegister')}}" class="mt-4">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6">
                    <label for="firstName" class="form-label">First name <span class="star">*</span></label>
                    <input type="text" class="form-control" id="firstName" name="firstName" value="@if(isset(Session::get('rightval')['firstName'])) {{Session::get('rightval')['firstName']}} @endif">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errFirstName']))
                            {{Session::get('err')['errFirstName']}}
                        @elseif(isset(Session::get('err')['errFormatFirstName']))
                            {{Session::get('err')['errFormatFirstName']}}
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <label for="lastName" class="form-label">Last name <span class="star">*</span></label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="@if(isset(Session::get('rightval')['lastName'])) {{Session::get('rightval')['lastName']}} @endif">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errLastName']))
                            {{Session::get('err')['errLastName']}}
                        @elseif(isset(Session::get('err')['errFormatLastName']))
                            {{Session::get('err')['errFormatLastName']}}
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <label for="country" class="form-label">Country <span class="star">*</span></label>
                    <input type="text" class="form-control" id="country" name="country" value="@if(isset(Session::get('rightval')['country'])) {{Session::get('rightval')['country']}} @endif">
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
                    <input type="text" class="form-control" id="city" name="city" value="@if(isset(Session::get('rightval')['city'])) {{Session::get('rightval')['city']}} @endif">
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
                    <input type="text" class="form-control" id="address" name="address" value="@if(isset(Session::get('rightval')['address'])) {{Session::get('rightval')['address']}} @endif">
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
                    <input type="text" class="form-control" id="phone" name="phone" value="@if(isset(Session::get('rightval')['phone'])) {{Session::get('rightval')['phone']}} @endif">
                    <div class="form-text text-danger">
                        @if(isset(Session::get('err')['errPhone']))
                            {{Session::get('err')['errPhone']}}
                        @elseif(isset(Session::get('err')['errFormatPhone']))
                            {{Session::get('err')['errFormatPhone']}}
                        @endif
                    </div>
                </div>
                <div class="col-12 col-sm-6">
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
                <div class="col-12 col-sm-6">
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
        <p class="alert @if(Session::get('success')) alert-success @elseif(Session::get('dbError')) alert-danger @elseif(Session::get('errUnique')) alert-warning @endif">
            @if(Session::get('success')) {{Session::get('success')}} @elseif(Session::get('dbError')) {{Session::get('dbError')}} @elseif(Session::get('errUnique'))
            {{Session::get('errUnique')}} @endif
        </p>
    </div>
@endsection
