@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                   <create :user-id="{{ auth()->id() }}"></create>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection
