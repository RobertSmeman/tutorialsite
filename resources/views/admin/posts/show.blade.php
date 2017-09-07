@extends('layouts.app')   <!-- gebruikt layouts.app (???????)-->

@section('content')   <!--dit gedeelte is een section met de naam content. de sectin kan je ergens anders weer invoegen met yield. yield('content')-->
    <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Post {{ $post->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/admin/') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Terug</button></a>
                        <a href="{{ url('/admin/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bewerken</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin', $post->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Verwijderen', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Post',
                                    'onclick'=>'return confirm("Wilt u deze verwijderen?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>

                                    <tr>
                                        <th>ID</th><td>{{ $post->id }}</td>
                                    </tr>
                                    <tr>
                                      <th> Title </th>
                                      <td> {{ $post->title }} </td>
                                    </tr>
                                    <tr>
                                      <th> Thumbnail </th>
                                      <td> <img src="/images/{{ $post->upload }}" alt="" width="40%"> </td>
                                    </tr>
                                    <tr>
                                      <th> Content </th>
                                      <td> {{ $post->content }} </td>
                                    </tr>
                                    <tr>
                                      <th> Category </th>
                                      <td> {{ $post->category->name }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
