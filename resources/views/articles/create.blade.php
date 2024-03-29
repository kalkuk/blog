@extends('partials.layout')
@section('title', 'New Article')
@section('content')

    <div class="container mx-auto row ">

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Content </label>
                <textarea class="form-control @error('body') is-invalid @enderror" id="body" rows="3" name="body">{{ old('body') }}</textarea>
                @error('body')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tags </label>
                <select class="form-select" multiple aria-label="Tags" name="tags[]">
                    @foreach ($tags as $tag )
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                  </select>
                @error('tags')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"  name="image">
                @error('image')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            <div class="mb-3">
                <input type="submit" class="btn btn-outline-primary">
            </div>
        </form>


    </div>
@endsection
