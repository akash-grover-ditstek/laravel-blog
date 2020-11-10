@extends('layouts.admin')

@section('content')
@include('admin.includes.alert')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-primary col-md-2" href="{{route('posts.create')}}">{{__('Create post')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Post list')}}</div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-8">{{(__('Post'))}}</th>
                        <th colspan=2>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts as $post)
                    <tr>
                        <td class="col-8"><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></td>
                        <td class="col-2"><a href="{{route('posts.edit', $post->id)}}">{{ __('Edit') }}</a></td>
                        <td>
                            <delete-btn data-url="{{route('posts.destroy', $post->id)}}"
                                message="{{__('Are you sure?')}}"
                                title="{{__('Delete Page')}}"
                                confirm="{{__('Yes')}}"
                                cancel="{{__('Cancel')}}">
                            </delete-btn>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">{{ __('No Data') }}</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
