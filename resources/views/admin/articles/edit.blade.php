@extends('layouts.master')
@section('content')
    <div class="col-lg">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Edit Article</h5>
            </div>
            <div class="card-body">
                @if(!empty($errors->all()))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('modify_action_article',['article'=>$article->id]) }}" method="post">
                    @csrf
                    @method('put')
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder='Enter Title here...' value="{{$article->title}}">
                    <label for="body" class="form-label">Body:</label>
                    <textarea name="body" class="form-control" placeholder='Enter Body here...'>{{$article->body}}</textarea>
                    <br>
                    <button class="btn btn-info">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
