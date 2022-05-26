@extends('article.show')
@section('buttons')
    <form onSubmit="return confirm('Do you really want to delete this article?')" action="{{ route('delete_action_article',['article'=>$article->id]) }}"
          method="post">
        @csrf
        @method('delete')
        <a class="btn btn-warning"
           href="{{ route('modify_form_article',['article'=>$article->id]) }}"><i
                class="fa-solid fa-pen-to-square"></i> Modify</a>

        <button class="btn btn-danger small"><i class="fa-solid fa-trash-can"></i> Delete</button>
        <a class="btn btn-secondary" href="{{ url()->previous() }}"><i class="fa-solid fa-rotate-left"></i> Back</a>
    </form>
@endsection
