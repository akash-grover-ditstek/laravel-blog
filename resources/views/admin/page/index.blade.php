@extends('layouts.admin')

@section('content')
@include('admin.includes.alert')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-primary col-md-2" href="{{route('pages.create')}}">{{__('Create Page')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Page list')}}</div>

    <div class="card-body">
         <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-8">{{(__('Page'))}}</th>
                        <th colspan=2>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pages as $page)
                    <tr>
                        <td class="col-8"><a href="{{route('pages.show', $page->id)}}">{{ $page->title }}</a></td>
                        <td class="col-2"><a href="{{route('pages.edit', $page->id)}}">{{ __('Edit') }}</a></td>
                        <td>
                            <delete-btn data-url="{{route('pages.destroy', $page->id)}}"
                                message="{{__('Are you sure?')}}"
                                title="{{__('Delete Page')}}">
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
            {{ $pages->links() }}
        </div>
    </div>
</div>
@endsection
