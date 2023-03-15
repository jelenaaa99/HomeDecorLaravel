@extends('layouts.admin.admin-layout')

@section('description')
    Admin panel - edit user
@endsection
@section('keywords')
    Admin panel - edit user
@endsection

@section('title')
    Admin panel - edit user
@endsection


@section('content')
    <div id="admin-content" class="my-5 mx-2">
        <h5 class="my-4 text-center fw-bold">Edit user</h5>

        <div id="edit-user" class="row">
            <form method="post" action="{{route('userEdit', ['id'=>$user->id])}}" class="mt-4">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="firstName" class="form-label">First name <span class="star">*</span></label>
                        <input type="text" class="form-control" id="firstName" name="firstName" value="{{ old('firstName') ? old('firstName') : $user->first_name }}">
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
                        <input type="text" class="form-control" id="lastName" name="lastName" value="{{ old('lastName') ? old('lastName') : $user->last_name }}">
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
                        <input type="text" class="form-control" id="country" name="country" value="{{ old('country') ? old('country') : $user->country }}">
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
                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') ? old('city') : $user->city }}">
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
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') ? old('address') : $user->address }}">
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
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}">
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
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') ? old('email') : $user->email }}">
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
                        <input type="password" class="form-control" id="password" name="password">
                        <div class="form-text text-danger">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="role" class="form-label">User role</label>
                        <select class="form-select" id="role" name="role">
                            @foreach($role as $r)
                                <option @if($user->role_id==$r->id) selected @endif value="{{$r->id}}">{{$r->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning text-white my-3">Submit</button>

                <p class="alert @if(Session::get('succ')) alert-success @endif">@if(Session::get('succ')) {{Session::get('succ')}} @endif</p>
            </form>
        </div>

    </div>
@endsection
