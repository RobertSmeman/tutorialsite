@extends('main')

@section('style')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@endsection

@section('content')

<h1 class="display-3 logo">Dhévak</h1>



<h3 class="title spacing-top">Tutorial:</h3>
<div class="row col-md-12 justify-content-center spacing-top just">


  @foreach($posts as $post)
  <a href="{{ url('tutorial/' . $post->id) }}">
  <div class="card col-md-3 offset-md-1 spacing-top margin-top">
    <img class="card-img-top img-responsive" width="100%" src="{{ asset('images/' . $post->upload) }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">{{ str_limit($post->title, 20) }}</h4>
      <p class="card-text ">{{ str_limit($post->content, 200) }}</p>
      <p class="card-text"><small class="text-muted">{{ str_limit($post->category->name, 30) }}</small></p>
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
