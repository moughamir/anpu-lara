@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->intro }}</p>
        {!! $article->content !!}
    </div>
</div>

@endsection
