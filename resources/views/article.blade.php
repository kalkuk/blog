@extends('partials.layout')
@section('title', $article->title)
@section('content')

    <div class="container mx-auto row ">
        <div class="card h-100">
            @if($article->image)
                <img src="{{$article->image}}" class="card-img-top" alt="...">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{!! nl2br($article->body) !!}</p>
                <a href="{{ route('index') }}" class="btn btn-outline-primary">Back</a>
            </div>
        </div>
    </div>
@endsection
