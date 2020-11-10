@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-secondary col-md-2" href="{{route('pages.index')}}">{{__('Back')}}</a>
    </div>
</div>
<div class="card">

    <div class="card-header">{{__('Edit Page')}}</div>
    <div class="card-body">
        <form action="{{route('pages.update', $page->id)}}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="{{__('title')}}">{{__('Title')}}</label>
                <input type="hidden" name="id" value="{{$page->id}}">
                <input type="text" class="form-control" id="title" name="title" 
                    placeholder="ex: title page" 
                    value="{{ old('title') ?? $page->title }}">
                @include('admin.components.error', ['errors' => $errors->get('title')])
            </div>
            <div class="form-group">
                <label for="{{__('slug')}}">{{__('Slug')}}</label>
                <input type="text" class="form-control" id="slug" name="slug" 
                    placeholder="ex: slug-page"
                    value="{{ old('slug') ?? $page->slug }}">
                @include('admin.components.error', ['errors' => $errors->get('slug')])
            </div>
            <div class="form-group">
                <label for="contents">{{__('Content')}}</label>
                @include('admin.components.error', ['errors' => $errors->get('content')])
                <textarea class="form-control init-tinymce" id="contents" name="content" rows="3">
                    {{ old('content') ?? $page->content }}
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