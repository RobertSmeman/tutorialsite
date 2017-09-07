@extends('layouts.app')   <!-- gebruikt layouts.app (???????)-->

@section('content')   <!--dit gedeelte is een section met de naam content. de sectin kan je ergens anders weer invoegen met yield. yield('content')-->
    <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Bewerk section #{{ $post->id }}</div>   <!--laat de id zien die bij het blokje hoort.-->
                    <div class="panel-body">
                        <a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>   <!--stuurt je terug naar de admin page.-->
                        <a href="{{ url('/admin/') }}" title="sections"><button class="btn btn-warning right-side btn-xs">blokje <i class="fa fa-arrow-right" aria-hidden="true"></i> </button></a>
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
    </div>
@endsection
