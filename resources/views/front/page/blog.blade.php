@extends('layouts.front')

@section('content')
    @component('front.components.masterhead', [
        'background' => $page_header ?? config('visual.header.default')
    ])
        <h1>{{__('Blog')}}</h1>
    @endcomponent
    @component('front.components.container')
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($posts as $post)
                    @component('front.components.post.preview', [
                        'title' => $post->title,
                        'url' => route('blog.post',$post->slug),
                        'user' => $post->author->name ?? 'Anonymous',
                        'profile' => route('homepage'),
                        'date' => $post->created_at->format('F j, Y'),
                    ])
                    @endcomponent
                @endforeach
                {!! $posts->links() !!}
            </div>
        </div>
    @endcomponent
@endsection