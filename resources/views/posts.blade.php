@extends('layouts.layout')

@section('content')
<h2>This is posts content</h2>
<ul>
  <li v-for="post in posts" :key="post.id">@{{post.title}}</li>
</ul>
<posts-component title="this is a prop title injected"></posts-component>

@endsection
