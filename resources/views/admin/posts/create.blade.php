@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Maak nieuw blokje</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.posts.form')



                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
