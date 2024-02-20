@extends('partials.layout')
@section('title', 'Home page')
@section('content')

    <div class="container mx-auto row ">
        @foreach ($articles as $article )
            <div class="col-3 mb-3">
                <div class="card h-100">
                    <img src="{{$article->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $article->title }}</h5>
                      <p class="card-text">{{ $article->snippet }}</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
        @endforeach
        {{$articles->links()}}
    </div>
@endsection

