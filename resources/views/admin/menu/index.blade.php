@extends('layouts.admin')

@section('content')
@include('admin.includes.alert')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-primary col-md-2" href="{{route('menus.create')}}">{{__('Create menu')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Menu list')}}</div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="col-8">{{(__('Menu'))}}</th>
                        <th colspan=2>{{ __('Action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menus as $menu)
                    <tr>
                        <td class="col-8"><a href="{{route('menus.show', $menu->id)}}">{{ $menu->name }}</a></td>
                        <td class="col-2"><a href="{{route('menus.edit', $menu->id)}}">{{ __('Edit') }}</a></td>
                        <td>
                            <delete-btn data-url="{{route('menus.destroy', $menu->id)}}"
                                message="{{__('Are you sure?')}}"
                                title="{{__('Delete Menu')}}">
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
            {{ $menus->links() }}
        </div>
    </div>
</div>
@endsection
