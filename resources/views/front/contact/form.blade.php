@extends('layouts.front')

@section('content')
    @component('front.components.masterhead', [
        'background' => $page_header ?? config('visual.header.default')
    ])
        <h1>{{__('Contact')}}</h1>
    @endcomponent
    @component('front.components.container')
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @include('front.includes.alert')
                <form action="{{ route('inquiry.send') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="input-name">Name</label>
                        <input id="input-name" class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="your name">
                    </div>
                    <div class="form-group">
                        <label for="input-email">Email</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="your email">
                        <small id="email-help" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="input-message">Message</label>
                        <textarea class="form-control" type="message" name="message">{{ old('message') }}</textarea>
                    </div>
                    <input class="form-control" type="submit">
                </form>
            </div>
        </div>
    @endcomponent
@endsection