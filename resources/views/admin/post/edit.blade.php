@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-secondary col-md-2" href="{{route('posts.index')}}">{{__('Back')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Edit Post')}}</div>

    <div class="card-body">
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="{{__('Title')}}">{{__('Title')}}</label>
                <input type="hidden" name="id" value="{{$post->id}}">
                <input type="text" class="form-control" id="title" name="title" 
                    placeholder="ex: post title" 
                    value="{{ old('title') ?? $post->title }}">
                @include('admin.components.error', ['errors' => $errors->get('title')])
            </div>
            <div class="form-group">
                <label for="{{__('Slug')}}">{{__('Slug')}}</label>
                <input type="text" class="form-control" id="slug" name="slug" 
                    placeholder="ex: post-slug"
                    value="{{ old('slug') ?? $post->slug}}">
                @include('admin.components.error', ['errors' => $errors->get('slug')])
            </div>
            <div class="form-group">
                <label for="{{__('contents')}}">{{__('Content')}}</label>
                @include('admin.components.error', ['errors' => $errors->get('content')])
                <textarea class="form-control init-tinymce" id="content" name="content"  rows="5">
                    {{ old('content') ?? $post->content}}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
@component('admin.components.scripts', [
    'loads' => [
        asset('/vendor/tinymce/tinymce.min.js'),
        asset('/js/admin/inittinymce.js'),
    ]
])
@endcomponent
@endsection