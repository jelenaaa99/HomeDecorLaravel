@extends('layouts.layout-sidebars')

@section('description')
    Contact us for more great and modern ideas!
@endsection
@section('keywords')
    HomeDecor, Contact, Decoration
@endsection

@section('title')
    Contact us
@endsection

@section('content')
    @include('fixed.sidebar-info')

    <div id="products" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">Contact us</h5>
        <p class="mt-3"><b>Address:</b> Vijvedreef 131, 8710 St Baafs Vijve</p>

        <form class="mt-4" action="{{route('sendMessage')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="star">*</span></label>
                <input type="text" class="form-control" id="name" name="name" value="{{isset($rightVal['name']) ? $rightVal['name'] : ""}}">
                <div class="form-text text-danger">
                    @if(isset($err['errName']))
                        {{$err['errName']}}
                    @elseif(isset($err['errFormatName']))
                        {{$err['errFormatName']}}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="star">*</span></label>
                <input type="email" class="form-control" id="email" name="email" value="{{isset($rightVal['email']) ? $rightVal['email'] : ""}}">
                <div class="form-text text-danger">
                    @if(isset($err['errEmail']))
                        {{$err['errEmail']}}
                    @elseif(isset($err['errFormatEmail']))
                        {{$err['errFormatEmail']}}
                    @endif
                </div>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone <span class="star">*</span></label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{isset($rightVal['phone']) ? $rightVal['phone'] : ""}}">
                <div class="form-text text-danger">
                    @if(isset($err['errPhone']))
                        {{$err['errPhone']}}
                    @elseif(isset($err['errFormatPhone']))
                        {{$err['errFormatPhone']}}
                    @endif
                </div>
            </div>
            <div>
                <label for="textarea">Your question / remarks <span class="star">*</span></label>
                <textarea class="form-control" id="textarea" name="msg">{{isset($rightVal['msg']) ? $rightVal['msg'] : ""}}</textarea>
                <div class="form-text text-danger">{{isset($err['errMsg']) ? $err['errMsg'] : ""}}</div>
            </div>
            <button type="submit" class="btn btn-warning text-white my-3">Submit</button>
        </form>
        <p class="alert @if(Session::get('success')) alert-success @elseif(Session::get('dbError')) alert-danger @endif">
            @if(Session::get('success')) {{Session::get('success')}} @elseif(Session::get('dbError')) {{Session::get('dbError')}} @endif
        </p>
    </div>
@endsection
