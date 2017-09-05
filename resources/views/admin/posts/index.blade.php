@extends('layouts.app')   <!-- gebruikt layouts.app (???????)-->

@section('content')   <!--dit gedeelte is een section met de naam content. de sectin kan je ergens anders weer invoegen met yield. yield('content')-->
    <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Blokjes</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/create') }}" class="btn btn-success btn-sm" title="Add New Post"><i class="fa fa-plus" aria-hidden="true"></i> Nieuwe tutorial toevoegen</a>   <!--link die je naar create stuurd waar je een form krijgt om en nieuw blokje te maken-->

                        {!! Form::open(['method' => 'GET', 'url' => '/admin', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}    <!--opend de form voor de search functie (search werkt niet)-->
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Zoeken...">    <!-- hier kan je een woord invullen dat je wilt zoeken.-->
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">    <!--de submit button voor de search functie-->
                                    <i class="fa fa-search"></i>    <!--dit maakt een vergrootglas-->
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}   <!--sluit de form-->
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Titel</th><th>Beschrijving</th><th>Categorie</th><th>Actie</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)   <!--elke onderdeel van $posts word hier als $item laten zien -->
                                    <tr>
                                        <td>{{ str_limit($item->title, 20) }}</td>    <!--string limiet op het onderdeel title van $item is 20 tekens.-->
                                        <td>{{ str_limit($item->content, 40) }}</td>    <!--string limiet is 40 tekens.-->
                                        <td>{{ str_limit($item->category->name, 10) }}</td>   <!--string limiet is 10 tekens. dus er worden niet meer dan 10 tekens geshowed.-->
                                        <td>
                                            <a href="{{ url('/admin/' . $item->id) }}" title="View Post"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Bekijken</button></a>   <!--hier kan je alle onderdelen van een blokje bekijken alleen het blokje met bijbehorende id.-->
                                            <a href="{{ url('/admin/' . $item->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Bewerken</button></a>    <!--hier ga je naar de edit page, ook hier word weer met id gewerkt zodat je het goede blokje hebt-->
                                            {!! Form::open(['method'=>'DELETE',
                                                'url' => ['/admin', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}    <!-- opend de form gedeelte voor de delete.-->
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Verwijderen', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Post',
                                                        'onclick'=>'return confirm("Wilt u dit blokje verwijderen?")'
                                                )) !!}    <!--dit is de verwijder button, als daar op word geklikt dan komt er een berichtje in beeld waar je kan bevestigen of je het blokje wilt verwijderen-->
                                            {!! Form::close() !!}   <!--form word gesloten-->
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                         </div>

                    </div>
                </div>
            </div>
        </div>
     <div class="text-center">{!! $posts->links() !!}</div>   <!--(wat doet dit)(???????)-->
    </div>

@endsection
