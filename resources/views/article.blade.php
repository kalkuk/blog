@extends('partials.layout')
@section('title', $article->title)
@section('content')

    <div class="container mx-auto row ">
        <div class="card h-100">
            @if($article->image)
                <img src="{{$article->image}}" class="card-img-top" alt="...">
            @endif
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">{{ $article->title }}</h5>
                <p class="card-text">{!! nl2br($article->body) !!}</p>
                <p class="text-body-secondary text-center">{{ $article->user->name}}</p>
                <div class="text-center mt-auto">
                    <a href="{{ route('index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
        <h5 class="my-2">Comments:</h5>
        <div class="card h-100 my-2">
            <div class="card-body">
                <form action="{{route('comment', ['article' =>$article])}}" method="POST">
                    @csrf
                    <textarea name="body" placeholder="Write something..." id="body"  class="form-control"></textarea>
                    <input type="submit" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>
        @foreach($article->comments as $comment)
        <div class="card h-100 my-2">
            <div class="card-body">
                <p class="card-text">{{$comment->body}}</p>
                <p class="text-body-secondary small">{{ $comment->user->name}}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection
