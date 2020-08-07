<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="{{ asset('css/postevent.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row my-2">            
            <div class="[ col-xs-12 col-sm-offset-2 col-sm-6 ]">
            <h1>Recruitment Events</h1>
            <br><br>      
                @if(count($posts) > 0)
                @foreach($posts as $post)
                <ul class="event-list">
                    <li>
                        
                        <time>
                            Start <span class="day">{{$post->startRec}}</span>
                        </time>

                        <time>
                            End <span class="end">{{$post->RecruitmentDate}}</span>
                        </time>

                        <img src="/storage/poster_images/{{$post->poster_image}}" />
                        <div class="info">
                            <h2><a class="title"  href="/posts/{{$post->id}}"> {{$post->EventName}}</a></h2>
                            <p class="desc">{{$post->Description}}</p>
                        </div>
                        
                    </li>
                </ul>
                @endforeach
                {{$posts->links()}}
                @else
                    <p>No upcoming events</p>
                @endif
            
        </div>
    </div>
</div>
@endsection
