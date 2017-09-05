@extends('layouts.app')   <!--gebruikt layout (???????)-->

@section('content')   <!--dit gedeelte is een section met de naam content. de sectin kan je ergens anders weer invoegen met yield. yield('content')-->
    <div class="container">
        <div class="row">

          @section('style')
            <link rel="stylesheet" href="{{ asset('css/single.css') }}">
          @endsection

          @section('javascript')
          <script type="text/javascript" src="{{ asset('js/tabbing.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/dist/clipboard.min.js') }}"></script>
          @endsection

          @section('content')
          <div class="tabbing">
            <button class="tablinks active" onclick="openTab(event, '1')">Blokje</button>
            <button class="tablinks" onclick="openTab(event, '2')">Overview</button>
            <button class="tablinks" onclick="openTab(event, '3')">Controller</button>
            <button class="tablinks" onclick="openTab(event, '4')">Migration</button>
            <button class="tablinks" onclick="openTab(event, '5')">Model</button>
            <button class="tablinks" onclick="openTab(event, '6')">View</button>
          </div>

          <div id="1" class="tabcontent" style="display: block;">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                  <div class="panel panel-default">
                      <div class="panel-heading">Maak hier een nieuw blokje.</div>
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
    </div>

          <div id="2" class="tabcontent">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                  <div class="panel panel-default">
                      <div class="panel-heading">Zo komt het er uit te zien.</div>
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

                      </div>
                  </div>
              </div>
          </div>

          <div id="3" class="tabcontent">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                  <div class="panel panel-default">
                      <div class="panel-heading">Maak hier de Controller.</div>
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

                      </div>
                  </div>
              </div>
          </div>

          <div id="4" class="tabcontent">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                  <div class="panel panel-default">
                      <div class="panel-heading">Maak hier de Migration.</div>
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

                      </div>
                  </div>
              </div>
          </div>

          <div id="5" class="tabcontent">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                  <div class="panel panel-default">
                      <div class="panel-heading">Maak hier de Model.</div>
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

                      </div>
                  </div>
              </div>
          </div>

          <div id="6" class="tabcontent">
            <div class="col-md-1"></div>
              <div class="col-md-10">
                  <div class="panel panel-default">
                      <div class="panel-heading">Maak hier de view.</div>
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

                      </div>
                  </div>
              </div>
          </div>



        @endsection
@endsection   <!--hier word de content section afgesloten-->
