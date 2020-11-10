@extends('layouts.front')

@section('content')
    @component('front.components.masterhead', ['background' => 'http://port8000.test/storage/img/home-bg.jpg'])
        <h1>{{config('app.name', 'Laravel')}}</h1>
        <span class="subheading">{{config('app.name', 'Laravel')}}</span>
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