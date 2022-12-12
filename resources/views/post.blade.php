@extends('master')

@section('header-intro')
<h2>{{ $post->title }}</h2>
<p>Autor: {{ $post->user->fullName }} - {{ $post->comments->count() }} comentários</p>
@endsection

@section('main')
<div id="content-post">
    <p>{{ $post->content }}</p>
</div>

@endsection
