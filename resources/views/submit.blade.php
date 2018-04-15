@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h1>Add New Tutorial</h1>
        <form action="{{route('addArticlePersist')}}" method="POST">
            {{ csrf_field() }}
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">Please fix the following errors</div>
            @endif
            
            {!! csrf_field() !!}
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}"/>
                @if($errors->has('title'))
                <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                <label for="url">Video Id: <small>i.e <b>L_wy8tLSbjs</b></small></label>
                <input type="text" class="form-control" id="video" name="video" placeholder="Youtube video do" value="{{ old('video') }}"/>
                @if($errors->has('video'))
                <span class="help-block">{{ $errors->first('video') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description">Description/Intro</label>
                <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                <span class="help-block">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description">Article</label>
                <textarea name="articleContent" class="summernote"></textarea>
                @if($errors->has('content'))
                <span class="help-block">{{ $errors->first('content') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
@endsection