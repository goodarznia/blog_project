@extends('layouts.master')
@section('content')
    <div class="text-center"><br>
        @if(count($articles)>0)
            <div class="col-lg">
                @if(is_null($searchFor))
                    <h3>The search result is:</h3>
                @else
                    <h3>The search result for  " {{$searchFor}} " is:</h3>
            </div>
        @endif
        @else
            <div class="col-lg">
                <h3>Nothing find for " {{$searchFor}} "</h3>
            </div>
        @endif
        <hr>
    </div>
    <div class="col-lg">
        <div class="row">
            <div class="col-lg">
                @foreach($articles as $article)
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="small text-muted">{{$article->created_at}}</div>
                            <h2 class="card-title h4">{{$article->title}}</h2>
                            <p class="card-text">{{ html_entity_decode( \Illuminate\Support\Str::limit($article->body, 300, $end='...')) }}</p>
                            <a class="btn btn-outline-secondary"
                               href="{{ route('show_single_article',['articleSlug'=>$article->slug]) }}">Read more »</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
