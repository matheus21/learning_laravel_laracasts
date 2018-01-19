@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Articles</div>

                    <div class="card-body">


                        @foreach($articles as $article)

                            <article>

                                <a href="{{ url('/articles', $article->id) }}"><h2>{{ $article->title }}</h2></a>

                                <div class="body">{{ $article->body }}</div>

                            </article>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection