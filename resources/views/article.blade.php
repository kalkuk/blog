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
    </div>
@endsection
