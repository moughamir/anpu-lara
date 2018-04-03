@extends('layouts.app')

@section('content')
<div class="content">
    <div class="title m-b-md">The Anpu Design</div>

    <div class="links">
    @foreach ($links as $link)
        <a href="{{$link->url}}">{{$link->title}}</a>
    @endforeach
    </div>
</div>

@endsection
