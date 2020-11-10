@extends('layouts.front')

@section('content')
    @component('front.components.masterhead', [
        'type' => 'post-heading',
        'background' => $post->header ?? config('visual.header.default')
    ])
        <h1>{{$post->title}}</h1>
        <span class="meta">{{__('Posted by')}}
            <a href="#">{{ $post->author->name ?? 'Anonymous' }}</a>
            on {{$post->created_at->format('F j, Y')}}
        </span>
    @endcomponent
    @component('front.components.container')
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $post->content !!}
            </div>
        </div>
    @endcomponent
@endsection