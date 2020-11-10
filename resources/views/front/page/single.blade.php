@extends('layouts.front')

@section('content')
    @component('front.components.masterhead', [
        'background' => $page->header ?? config('visual.header.default')
    ])
        <h1>{{$page->title}}</h1>
    @endcomponent
    @component('front.components.container')
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $page->content !!}
            </div>
        </div>
    @endcomponent
@endsection