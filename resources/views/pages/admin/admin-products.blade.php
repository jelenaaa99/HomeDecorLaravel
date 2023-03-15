@extends('layouts.admin.admin-layout')

@section('description')
    Admin panel - products
@endsection
@section('keywords')
    Admin panel - products
@endsection

@section('title')
    Admin panel - products
@endsection


@section('content')
    <div id="admin-content" class="my-5 mx-2">
        <h5 class="my-4 text-center fw-bold">Products</h5>
        <a href="{{route('insertProductShow')}}" class="btn btn-success my-2">Insert product</a>

        <div id="products" class="row">
            <div class="col-12 col-sm-9 order-last order-sm-first table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Image</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $p)
                            <tr class="align-middle">
                                <td>{{$p->id}}</td>
                                <td>{{$p->name}}</td>
                                <td>{{$p->price}}</td>
                                <td>{{$p->catName}}</td>
                                <td>{{$p->brandName}}</td>
                                <td><img src="{{ $p->admin_img==1 ? asset("storage/products/" .$p->img) : asset('assets/img/'.$p->img)}}" alt="{{$p->name}}" class="w-50"></td>
                                <td>
                                    <form method="POST" action="{{route('deleteProduct', ['id'=>$p->id])}}">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->withQueryString()->links() }}
                @if (count($products)==0)
                    <p class="alert alert-danger">Unfortunately, no items were returned.</p>
                @endif

                @if (Session::get('success'))
                    <p class="alert alert-success ">{{Session::get('success')}}</p>
                @elseif(Session::get('err'))
                    <p class="alert alert-danger ">{{Session::get('err')}}</p>
                @endif
            </div>
            <div class="col-12 col-sm-3 order-first order-sm-last mt-5 pt-3">
                    <form action="{{route('adminProducts')}}" method="get">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Search</label>
                            <input type="text" class="form-control" name="search" value="{{ isset($qs["search"]) ? $qs["search"] : "" }}"/>
                        </div>
                        <p class="fw-bold mb-0">Categories</p>
                        @for($i=0; $i<count($categories); $i++)
                            <div id="cat-filter" class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$categories[$i]->id}}" id="flexCheckDefault{{$i}}" name="chbCat[]" {{ (isset($qs["chbCat"]) && in_array($categories[$i]->id, $qs["chbCat"])) ? "checked" : "" }}>
                                <label class="form-check-label" for="flexCheckDefault{{$i}}">
                                    {{$categories[$i]->name}}
                                </label>
                            </div>
                        @endfor

                        <p class="fw-bold mb-0 mt-4">Brands</p>
                        @for($i=0; $i<count($brands); $i++)
                            <div id="cat-filter" class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$brands[$i]->id}}" id="flexCheckDefault{{$i}}" name="chbBrand[]" {{ (isset($qs["chbBrand"]) && in_array($brands[$i]->id, $qs["chbBrand"])) ? "checked" : "" }}>
                                <label class="form-check-label" for="flexCheckDefault{{$i}}">
                                    {{$brands[$i]->name}}
                                </label>
                            </div>
                        @endfor
                        <input type="submit" class="btn btn-info text-white my-2" value="Filter">
                    </form>
            </div>
        </div>
    </div>
@endsection
