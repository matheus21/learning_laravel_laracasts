@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Article #{{$article->id}}</div>

                    <div class="card-body">

                        <h1>{{ $article->title }}</h1>

                        <div class="body">{{ $article->body }}</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection