@extends('layouts.app')

@section('content')
        <a href="/posts" class="btn btn-info">Back</a>
        <br>
        <br>
        <h1>{{$post->EventName}}</h1>
        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
        <br><br>
        <div>
                 {{$post->Organizer}}
                 {{$post->Description}}
                 {{$post->EventLocation}}
                 {{$post->Collaborator}}
                 {{$post->Contact}}

        </div>
        <hr>
        <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                {{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])}}
                	{{Form::hidden('_method', 'DELETE')}}
                	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {{Form::close()}}
                @endif
        @endif
@endsection
