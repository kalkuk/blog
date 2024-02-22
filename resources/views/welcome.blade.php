@extends('partials.layout')
@section('title', 'Home page')
@section('content')

    <div class="container mx-auto row ">
        @foreach ($articles as $article )
            <div class="col-3 mb-3">
                <div class="card h-100 ">
                    @if($article->image)
                    <img src="{{$article->image}}" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title text-center">{{ $article->title }}</h5>
                      <p class="card-text">{{ $article->snippet }}</p>
                      <div class="text-center mt-auto">
                        <p class="text-body-secondary">
                            <a href="{{route('user', ['user' => $article->user])}}">{{ $article->user->name}}</a>
                        </p>
                        <p class="text-body-secondary">
                        <b>Comments: </b>{{$article->comments()->count()}}
                        </p>

                        <a href="{{route('article', ['article' => $article])}}" class="btn btn-outline-primary ">Read more</a>
                      </div>

                    </div>
                </div>
            </div>
        @endforeach
            <div class="d-flex align-items-center justify-content-center">
                {{$articles->links()}}
            </div>
    </div>
@endsection

