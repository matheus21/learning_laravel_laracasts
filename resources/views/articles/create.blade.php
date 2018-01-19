@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Write a New Article</div>

                    <div class="card-body">
                        {!! Form::open(['url' => 'articles']) !!}

                        @include('articles.form', ['submitButtonText' => 'Add Article'])

                        {!! Form::close() !!}

                        @include('errors.list')


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection