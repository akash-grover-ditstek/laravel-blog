@extends('layouts.admin')

@section('content')
@include('admin.includes.alert')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-secondary col-md-2" href="{{route('pages.index')}}">{{__('Back')}}</a>
        <a class="btn btn-primary col-md-2" href="{{route('pages.edit', $page->id)}}">{{__('Edit')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Page Details')}}</div>
    <div class="card-body">
        <div>
            <label><b>{{__('Title')}}</b></label>
            <p>{{$page->title}}</p>
        </div>
        <div>
            <label><b>{{__('Slug')}}</b></label>
            <p>{{$page->slug}}</p>
        </div>
        <div>
            <label><b>{{__('Content')}}</b></label> 
            <div>{!!$page->content!!}</div>
        </div>
    </div>
</div>
@endsection
