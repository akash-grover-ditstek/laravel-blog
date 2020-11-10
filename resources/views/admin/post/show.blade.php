@extends('layouts.admin')

@section('content')
@include('admin.includes.alert')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-secondary col-md-2" href="{{route('posts.index')}}">{{__('Back')}}</a>
        <a class="btn btn-primary col-md-2" href="{{route('posts.edit', $post->id)}}">{{__('Edit')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Page Details')}}</div>
    <div class="card-body">
        <div>
            <label><b>{{__('Title')}}</b></label>
            <p>{{$post->title}}</p>
        </div>
        <div>
            <label><b>{{__('Slug')}}</b></label>
            <p>{{$post->slug}}</p>
        </div>
        <div>
            <label><b>{{__('Content')}}</b></label> 
            <div>{!!$post->content!!}</div>
        </div>
    </div>
</div>
@endsection

