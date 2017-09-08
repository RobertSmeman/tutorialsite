@extends('layouts.app')

@section('title', '| All Categories')

@section('content')

  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
      <h1>Categorieën</h1>
      <table class="table">
        <thead>
          <tr>
            <th>categorie naam</th>
            <th style="float:right;">actie</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{ $category->name }}</td>
            <td>
            {!! Form::open(['method'=>'DELETE',
                'url' => ['/cat', $category->id],
                'style' => 'display:inline'
            ]) !!}    <!-- opend de form gedeelte voor de delete.-->
                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> ', array(
                        'type' => 'submit',
                        'class' => 'offset-md-10 text-right deleteknop',
                        'title' => 'Delete Post',
                        'onclick'=>'return confirm("Wilt u deze categorie verwijderen?")'
                )) !!}    <!--dit is de verwijder button, als daar op word geklikt dan komt er een berichtje in beeld waar je kan bevestigen of je het blokje wilt verwijderen-->
            {!! Form::close() !!}   <!--form word gesloten-->
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div> <!-- end of .col-md-8 -->
      <div class="col-md-3">
        <div class="well">
          {!! Form::open(['route' => 'cat.store', 'method' => 'POST']) !!}
            <h2>nieuwe categorie</h2>
            {{ Form::label('name', 'Categorie:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

              {{ Form::submit('maak nieuwe categorie', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

          {!! Form::close()!!}
        </div>
      </div>
  </div>

@endsection
