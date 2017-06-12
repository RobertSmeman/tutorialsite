@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Yay!</div>
<a href="{{ url('/admin') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Admin</button></a>
                <div class="panel-body">
                    Je bent succesvol ingelogd!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
