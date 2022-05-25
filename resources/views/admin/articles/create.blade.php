@extends('layouts.master')
@section('content')
    <div class="col-lg">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Add New Article</h5>
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
                <form action="{{ route('create_action_article') }}" method="post">
                    @csrf
                    <label for="title" class="form-label" placeholder='Enter Title here...'>Title:</label>
                    <input type="text" name="title" class="form-control">
                    <label for="body" class="form-label">Body:</label>
                    <textarea name="body" class="form-control" placeholder='Enter Body here...'></textarea>
                    <br>
                    <button class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
