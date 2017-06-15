@extends('main')

@section('style')
  <link rel="stylesheet" href="{{ asset('css/single.css') }}">
@endsection

@section('javascript')
<script type="text/javascript" src="{{ asset('js/tabbing.js') }}">
</script>
@endsection

@section('content')
<div class="tab">
  <button class="tablinks active" onclick="openTab(event, '1')">Tutorial</button>
  <button class="tablinks" onclick="openTab(event, '2')">Snippets</button>

</div>

<div id="1" class="tabcontent" style="display: block;">
  <h3>Tutorial</h3>
<img src="{{ asset('img/geer.png') }}" alt="">

</div>

<div id="2" class="tabcontent">
  <h3>Snippets</h3>
  <p>shwoarma.</p>
  <img src="{{ asset('img/spongebob.jpg')}}" alt="">
</div>


@endsection
