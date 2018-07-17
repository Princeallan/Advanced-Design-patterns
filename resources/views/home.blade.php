@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>body</th>
                                <th>Author</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($blogs)
                                @foreach($blogs as $blog)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td><a href="{{ route('blogs.show', ['id' => $blog->id]) }}">{{ $blog->title }}</a></td>
                                        <td>{{ $blog->body }}</td>
                                        <td>{{ $blog->user->name }}</td>

                                        <td>
                                            <a href="{{ url('blogs/'.$blog->id.'/edit') }}" class="btn btn-warning">Edit</a>
                                            {!!Form::open(['action'=>['BlogController@destroy', $blog->id], 'method' => 'POST', 'class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{FORM::submit('DELETE', ['class'=> 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>

                                        {{--<td>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>--}}
                                    </tr>
                                @endforeach
                            @else
                                <p class="text-center text-primary">No Posts created Yet!</p>
                            @endif
                        </table><Br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
