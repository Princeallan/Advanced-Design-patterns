@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                    <div class="card mb-4">
                        <div class="card-header">{{$blog->title}}</div>
                        <div class="card-body">{{$blog->body}}</div>
                        <div>By: {{$blog->user->name}} | On {{$blog->created_at}} </div>
                    </div>

            </div>
        </div>
    </div>

@endsection
