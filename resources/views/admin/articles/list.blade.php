@extends('layouts.master')
@section('content')
    <br>
    <div class="col-lg">
        <div class="card mb-4">
            <div class="card-header">
                <h5>All Articles</h5>
                <a class="btn btn-success" href="{{ route('create_form_article') }}"><i class="fa-solid fa-plus"></i> Create New Article</a>

            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Created at</th>
                        <th>Functions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{++$loop->index}}</td>
                            <td><a href="{{route('show_article',['article'=>$article->id])}}">{{$article->title}}</a></td>
                            <td>{{$article->created_at}}</td>
                            <td class="small">
                                <form onSubmit="return confirm('Do you really want to delete this article?')" action="{{ route('delete_action_article',['article'=>$article->id]) }}"
                                      method="post">
                                    @csrf
                                    @method('delete')
                                    <a class="btn btn-warning"
                                       href="{{ route('modify_form_article',['article'=>$article->id]) }}"><i
                                            class="fa-solid fa-pen-to-square"></i> Modify</a>

                                    <button class="btn btn-danger small"><i class="fa-solid fa-trash-can"></i> Delete</button>
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
