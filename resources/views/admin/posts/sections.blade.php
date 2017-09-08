@extends('layouts.app')   <!-- gebruikt layouts.app (???????)-->

@section('content')   <!--dit gedeelte is een section met de naam content. de sectin kan je ergens anders weer invoegen met yield. yield('content')-->
<div class="row">
  <div class="col-md-6 col-md-offset-2">
    <a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
    <h1>Sections</h1>
    <table class="table">
      <thead>
        <tr>
          <th>section naam</th>
          <th style="float:right;">actie</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($section as $category)
        <tr>
           <td>{{ $category->name }}</td>
          <td>
          {!! Form::open(['method'=>'DELETE',
              'url' => ['/section', $category->id],
              'style' => 'display:inline'
          ]) !!}  <!-- opend de form gedeelte voor de delete.-->
               {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> ', array(
                      'type' => 'submit',
                      'class' => 'offset-md-10 text-right deleteknop',
                      'title' => 'Delete Post',
                      'onclick'=>'return confirm("Wilt u deze categorie verwijderen?")'
              )) !!}   <!--dit is de verwijder button, als daar op word geklikt dan komt er een berichtje in beeld waar je kan bevestigen of je het blokje wilt verwijderen-->
           {!! Form::close() !!}  <!--form word gesloten-->
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
  </div> <!-- end of .col-md-8 -->
    <div class="col-md-3">
      <div class="well">
       {!! Form::open(['route' => 'section.store', 'method' => 'POST']) !!}
          <h2>nieuwe section</h2>
          {{ Form::label('name', 'Section:') }}
          {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::submit('maak nieuwe section', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

        {!! Form::close()!!}
      </div>
    </div>
</div>
@endsection
