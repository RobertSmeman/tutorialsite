@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Bewerk Blokje #{{ $post->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($post, [
                            'method' => 'PATCH',
                            'url' => ['/admin', $post->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
                        
                        @include ('admin.posts.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
