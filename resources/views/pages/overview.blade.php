@extends('main')

@section('style')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@endsection

@section('content')
<a href="{{ url('/admin/create') }}" class="btn btn-success btn-block createbutton" title="Add New Post"><i class="fa fa-plus" aria-hidden="true"></i></a>
<h1 class="display-3 logo">Dhévak</h1>



<h3 class="title spacing-top"></h3>
<div class="row col-md-12 justify-content-center spacing-top just">


  @foreach($posts as $post)



  <div class="card col-md-3 offset-md-1 padding-remove margin-top">


          {!! Form::open(['method'=>'DELETE',
              'url' => ['/admin', $post->id],
              'style' => 'display:inline'
          ]) !!}    <!-- opend de form gedeelte voor de delete.-->
              {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> ', array(
                      'type' => 'submit',
                      'class' => 'offset-md-10 text-right deleteknop',
                      'title' => 'Delete Post',
                      'onclick'=>'return confirm("Wilt u dit blokje verwijderen?")'
              )) !!}    <!--dit is de verwijder button, als daar op word geklikt dan komt er een berichtje in beeld waar je kan bevestigen of je het blokje wilt verwijderen-->
          {!! Form::close() !!}   <!--form word gesloten-->
  <a href="{{ url('/admin/' . $post->id) }}">
    <img class="card-img-top img-responsive" width="100%" src="{{ asset('images/' . $post->upload) }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">{{ str_limit($post->title, 20) }}</h4>
      <p class="card-text ">{{ str_limit($post->content, 200) }}</p>
      <p class="card-text"><small class="text-muted">{{ str_limit($post->category->name, 30) }}</small><a href="{{ url('/admin/' . $post->id . '/edit') }}" title="Edit Post" class="offset-md-11 editding"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></p>
    </div>
    </a>

  </div>


        @endforeach

        </div>


        <div class="col-md-6 offset-md-6 spacing-top">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>





@endsection
