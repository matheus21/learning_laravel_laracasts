@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Edit: {!! $article->title !!}</div>

                    <div class="card-body">


                        <!-- To get the article object pass by ArticlesController, method 'Form::open' will change to 'Form::model' and the object instance pass by the controller will enter as a argument -->

                        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

                        @include('articles.form', ['submitButtonText' => 'Update Article'])

                        {!! Form::close() !!}


                        @include('errors.list')

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
