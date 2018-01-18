@extends('app')
@section('content')

    <h1>Edit: {!! $article->title !!}</h1>

    <hr/>

    <!-- To get the article object pass by ArticlesController, method 'Form::open' will change to 'Form::model' and the object instance pass by the controller will enter as a argument -->

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

        @include('articles.form', ['submitButtonText' => 'Update Article'])

    {!! Form::close() !!}


    @include('errors.list')


@endsection
