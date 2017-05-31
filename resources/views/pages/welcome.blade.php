@extends('main')

@section('style')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@endsection

@section('content')

<h1 class="display-3 logo">Dhévak</h1>

<h3 class="title spacing-top">Tutorial:</h3>

<div class="row col-md-12 justify-content-center spacing-top">

<div class="card-deck justify-content-center">
  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
    <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
      </a>
  </div>

<a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>


  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>

</div>
</div>

<div class="row col-md-12 justify-content-center spacing-top">
<div class="card-deck justify-content-center">

  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>


  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>


  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>

</div>
</div>
<div class="row col-md-12 justify-content-center spacing-top spacing-bot">
<div class="card-deck justify-content-center">

  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>


  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>


  <a href="{{ route('tutorial.single') }}">
  <div class="card col-md-3">
  <img class="card-img-top img-responsive" width="100%" src="{{ asset('img/geer.jpg') }}" alt="Card image cap">
    <div class="card-block">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    </a>
  </div>

</div>
</div>

<div class="row col-md-12 justify-content-center">

  <nav aria-label="...">
    <ul class="pagination">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1"><<</a>
      </li>
      <li class="page-item active">
        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">>></a>
      </li>
    </ul>
  </nav>

</div>
@endsection
