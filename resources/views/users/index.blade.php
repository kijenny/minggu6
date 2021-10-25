@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
            <br><br>

                <div class="card-header">{{ __('USERS DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form" method="get" action="{{ route('search') }}">
                            <div class="form-group w-100 mb-3">
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="search...">
                                <button type="submit" class="btn btn-primary mb-1">Search</button>
                            </div>
                        </form>
                
                    <a href="/users/create" class="btn btn-primary">Add Data</a> <br><br>    
                <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <td>Email</td>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->username }}</td>
                    <td>{{ $s->email }}</td>
                    <td>
                    <form action="/users/{{$s->id}}" method="post">
                        <a href="/users/{{$s->id}}/edit" class="btn btn-warning">Edit</a>
                        <a href="/users/{{$s->id}}/" class="btn btn-primary">View</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection