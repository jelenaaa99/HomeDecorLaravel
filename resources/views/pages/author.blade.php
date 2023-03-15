@extends('layouts.layout-sidebars')

@section('description')
    Meet the author of the site, Jelena Biševac.
@endsection
@section('keywords')
    HomeDecor, Jelena Biševac, Decorations
@endsection

@section('title')
    Jelena Biševac
@endsection

@section('content')
    @include('fixed.sidebar-info')
    <div id="author" class="col-12 col-md-9 px-4 order-first order-lg-last">
        <h5 class="text-muted fw-bold border-bottom-class">Author</h5>
        <div class="row m-0 mt-5">
            <div class="col-12 col-md-3">
                <img src="{{asset('assets/img/ja.jpg')}}" alt="Jelena Biševac" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 mb-9">
                <p>Hi! My name is Jelena Biševac and I am currently on my final year of ICT College of Vocational Studies, web programming department. My goal is to become full stack developer with accent on Front-end tehnologies.
                    This site is a part of my final exam of PHP 2 subject.
                </p>
            </div>
        </div>
    </div>
@endsection
