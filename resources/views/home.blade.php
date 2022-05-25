@extends('layouts.master')
@section('content')
@if(1)
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">{{$articles[0]->title}}</h1>
        <p>{{$articles[0]->body}}</p>
        <p><a class="btn btn-primary btn-lg" href="/articles/{{$articles[0]->id}}" role="button">Learn more »</a></p>
    </div>
</div>
@endif
<div class="container">
    <div class="row">
        @foreach($articles as $article)

        @if($loop->index>0)
        <div class="col-md-4">
            <h2>{{$article->title}}</h2>
            <p>{{$article->body}}</p>
            <p><a class="btn btn-secondary" href="/articles/{{$article->id}}" role="button">View details »</a></p>
        </div>
        @endif
        @endforeach
    </div>
    <hr>
</div>

@endsection
