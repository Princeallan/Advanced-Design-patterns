@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 ">
                    <div class="card mb-4">
                        <div class="card-header">User profile</div>
                        <div class="card-body">
                            <div >
                                <p>Name: {{ $user->name }} </p>
                                <p>Email: {{ $user->email }} </p>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
