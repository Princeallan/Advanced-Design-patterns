@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 ">
                    <div class="card mb-4">
                        <div class="card-header">User profile</div>
                        <div class="card-body">
                            <div >

                                <blog-articles :user-data="{{ json_encode( $user ) }}"></blog-articles>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection