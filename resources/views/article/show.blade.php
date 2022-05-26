@extends('layouts.master')
@section('content')
    <br>
    <div class="col-lg">
        <div class="card" style="width:100%;">
            <div class="card-body">
                <h2 class="card-title h4">{{$article->title}}</h2>
                <div class="small text-muted"><i class="fa-solid fa-user"></i> Author: {{$article->user->name}}</div>
                <div class="small text-muted"><i class="fa-solid fa-calendar-days"></i> Published
                    at: {{$article->created_at}}</div>
                <hr>
                <p class="card-text">{{$article->body}}</p>
                @section('buttons')
                    <a class="btn btn-secondary" href="{{ url()->previous() }}"><i class="fa-solid fa-rotate-left"></i>
                        Back</a>
                @show
            </div>
        </div>
    </div>
@endsection
