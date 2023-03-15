@extends('layouts.admin.admin-layout')

@section('description')
    Admin panel - Orders
@endsection
@section('keywords')
    Admin panel - Orders
@endsection

@section('title')
    Admin panel - Orders
@endsection


@section('content')
    <div id="admin-content" class="my-5 mx-2">
        <h4>Orders</h4>

        <div id="orders" class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($orders as $o)
                        <tr>
                            <td>{{$o->id}}</td>
                            <td>{{$o->first_name}} {{$o->last_name}}</td>
                            <td>{{$o->date}}</td>
                            <td>{{$o->country}}</td>
                            <td>{{$o->city}}</td>
                            <td>{{$o->address}}</td>
                            <td>{{$o->phone}}</td>
                            <td>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#exampleModal{{$loop->index}}">
                                    See details
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-orderid="{{$o->id}}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Order By {{$o->first_name}} {{$o->last_name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
