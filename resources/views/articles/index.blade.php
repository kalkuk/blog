@extends('partials.layout')
@section('title', 'Articles')
@section('content')

    <div class="container mx-auto row ">
        <div class="my-2">
            <a href="{{route('articles.create')}}" class="btn btn-outline-primary">New Article</a>

        </div>
        <table class="table table-striped">
            <thead>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}} </td>
                    <td>{{$article->title}} </td>
                    <td>{{$article->slug}} </td>
                    <td>{{$article->created_at}} </td>
                    <td>{{$article->updated_at}} </td>
                    <td>
                        <div class="btn-group" >
                            <a  class="btn btn-info">View</a>
                            <a  class="btn btn-warning">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                          </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$articles->links()}}
    </div>
@endsection
