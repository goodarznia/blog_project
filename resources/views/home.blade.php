@extends('layouts.master')
@section('content')
    @if(count($articles)>0)
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">{{$articles[0]->title}}</h1>
                <p>{{ \Illuminate\Support\Str::limit($articles[0]->body, 300, $end='...') }}</p>
                <p><a class="btn btn-primary btn-lg"
                      href="{{ route('show_single_article',['articleSlug'=>$articles[0]->slug]) }}" role="button">Read more
                        »</a></p>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            @foreach($articles as $article)

                @if($loop->index>0 && $loop->index<4)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <table>
                                    <tr class="align-text-top" style="height: 300px;"><td>
                                            <div class="small text-muted">{{$article->created_at}}</div>
                                            <h2 class="card-title h4">{{$article->title}}</h2>
                                            <p class="card-text">{{ html_entity_decode( \Illuminate\Support\Str::limit($article->body, 300, $end='...')) }}</p>
                                        </td></tr>
                                    <tr><td>
                                            <a class="btn btn-light" href="{{ route('show_single_article',['articleSlug'=>$article->slug]) }}">Read more »</a>
                                        </td></tr>
                                </table>

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        @if(count($articles)>4)
            <hr>
            <a class="page-link" href="{{ route('show_all_articles')}}">Click here to show all ({{count($articles)}}) articles</a>

        @endif
    </div>

@endsection
