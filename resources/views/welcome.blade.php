@extends('layouts.front')

@section('content')
<div class="nav">
<ul>
<li><a href="/about">About</a></li>
<li><a href="/vendors">Vendors</a></li>
<li><a href="/participate">Participate</a></li>
<li><a href="mailto:craftoberfest2015@gmail.com">Contact</a></li>
</ul>
</div>
<div class="lights"><img src="images/lights.svg" alt=""/></div>
<div class="inner">
<p><img class="date" src="images/date.svg" alt=""/></p>
<p><a href="/"><img class="logo" src="images/logo.svg" alt=""/></a></p>
<p><img class="indie" src="images/indie.svg" alt=""/></p>
<p><img class="fox" src="images/fox.svg" alt=""/></p>
<p><img class="handmade" src="images/locallyHandmade.svg" alt=""/></p>
<p>
<a href="https://www.facebook.com/stlcraftoberfest" target="_blank"><img src="images/fb.png" alt=""/></a>
<a href="https://twitter.com/Craftoberfest" target="_blank"><img src="images/tw.png" alt=""/></a>
</p>
</div>
@endsection