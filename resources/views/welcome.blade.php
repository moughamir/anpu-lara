@extends('layouts.app')

@section('content')
<div class="content">
    @foreach ($articles as $article)
    <article class="feature">
        <span class="image">
        <img src="{{$article->image}}" alt="{{$article->title}}" />
        </span>
        <div class="content">
            <h2>{{$article->title}}</h2>
            <p>{{$article->intro}}</p>
            <ul class="actions">
                <li>
                    <a href="{{$article->link}}" class="button dark simple">Watch</a>
                </li>
            </ul>
        </div>
    </article>
    @endforeach
</div>
@endsection

