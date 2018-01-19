@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{url('/articles')}}"
                                   class="btn btn-lg btn-success">Articles</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('/articles/create')}}"
                                   class="btn btn-lg btn-primary">New Article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
