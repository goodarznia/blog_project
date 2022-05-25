@extends('layouts.master')
@section('content')
<br>
<div class="col-lg">
    <div class="card" style="width:100%;">
        <div class="card-body">
            <div class="small text-muted">{{$article->created_at}}</div>
            <h2 class="card-title h4">{{$article->title}}</h2>
            <p class="card-text">{{$article->body}}</p>
            <a class="btn btn-primary" href="\">Back</a>
        </div>
    </div>
</div>
@endsection
