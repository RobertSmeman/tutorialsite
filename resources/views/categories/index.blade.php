@extends('main')

@section('title', '| All Categories')

@section('content')
<a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
  <div class="row">
    <div class="col-md-8">
      <h1>Categorieën</h1>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>categorie naam</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($categories as $category)
          <tr>
            <th>{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div> <!-- end of .col-md-8 -->
      <div class="col-md-3">
        <div class="well">
          {!! Form::open(['route' => 'cat.store', 'method' => 'POST']) !!}
            <h2>nieuwe categorie</h2>
            {{ Form::label('name', 'categorie naam:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

              {{ Form::submit('maak nieuwe categorie', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

          {!! Form::close()!!}
        </div>
      </div>
  </div>

@endsection
