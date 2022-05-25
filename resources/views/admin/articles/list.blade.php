@extends('layouts.master')
@section('content')
    <br>
    <div class="col-lg">
        <div class="card mb-4">
            <div class="card-header">
                <h5>All Articles</h5>
                <a class="small text-success" href="{{ route('create_form_article') }}">[Create New Article]</a>

            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Functions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article->id}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->slug}}</td>
                            <td class="small">

                                        <a class="btn btn-warning" href="{{ route('modify_form_article',['article'=>$article->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="{{ route('delete_action_article',['article'=>$article->id]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger small"><i class="fa-solid fa-trash-can"></i></button>
                                        </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
