@extends('layouts.app')   <!--gebruikt layouts.app (???????)-->

@section('content')   <!--dit gedeelte is een section met de naam content. de sectin kan je ergens anders weer invoegen met yield. yield('content')-->
    <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Maak nieuw blokje</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>    <!--link om terug te gaan naar admin page.-->
                        <br />
                        <br />

                        @if ($errors->any())    <!--als de page niet goed laat dan laat hij alle errors zien in een lijst (???????)-->
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin', 'class' => 'form-horizontal', 'files' => true]) !!}    <!--als er geen errors zijn word er een form geopend-->

                        @include ('admin.posts.form')   <!-- form.blade.php word toegevoegd. zo krijg je dus de form hierin-->



                        {!! Form::close() !!}   <!-- de form word afgesloten.-->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection   <!--hier word de content section afgesloten-->
