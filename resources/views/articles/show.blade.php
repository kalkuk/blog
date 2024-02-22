@extends('partials.layout')
@section('title', 'Show Article')
@section('content')

    <div class="container mx-auto row ">
        <div class="my-2">
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>{{$article->id}}</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Title</td>
                        <td>{{$article->title}}</td>
                    </tr>
                    <tr>
                        <td>Content</td>
                        <td>{{$article->body}}</td>
                    </tr>
                    <tr>
                        @if($article->image)
                            <td>Image</td>
                            <td>
                                <img class="w-25" src="{{$article->image}}">
                            </td>
                        @endif
                    </tr>
                </tbody>
            </table>
            <div class="text-center my-3">
                <a href="{{route('articles.index')}}" class="btn btn-outline-primary">Back to Articles</a>
            </div>

        </div>




    </div>
@endsection
