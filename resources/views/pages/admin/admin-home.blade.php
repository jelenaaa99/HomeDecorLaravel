@extends('layouts.admin.admin-layout')

@section('description')
    Admin panel
@endsection
@section('keywords')
    Admin panel
@endsection

@section('title')
    Admin panel
@endsection


@section('content')
    <div id="admin-content" class="my-5 mx-2">
        <h4>Welcome, Jelena Bisevac</h4>

        <div id="#users" class="my-5 table-responsive">
            <h5 class="my-4 text-center fw-bold">Users</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $u)
                    <tr>
                        <td>{{$u->id}}</td>
                        <td>{{$u->first_name}} {{$u->last_name}}</td>
                        <td>{{$u->email}}</td>
                        <td>{{$u->title}}</td>
                        <td><a href="{{route('userEdit', ['id'=>$u->id])}}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div id="#messages" class="table-responsive">
            <h5 class="my-4 text-center fw-bold">Messages</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contact as $c)
                    <tr>
                        <td>{{$c->date}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->email}}</td>
                        <td>{{$c->msg}}</td>
                        <td>
                            <form method="POST" action="{{route('deleteMsg', ['id'=>$c->id])}}">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @if (Session::get('successMsg'))
                <p class="alert alert-success ">{{Session::get('successMsg')}}</p>
            @endif
        </div>


    </div>
@endsection
