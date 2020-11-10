@extends('layouts.admin')

@section('content')
@include('admin.includes.alert')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-secondary col-md-2" href="{{route('menus.index')}}">{{__('Back')}}</a>
        <a class="btn btn-primary col-md-2" href="{{route('menus.edit', $menu->id)}}">{{__('Edit')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Menu Details')}}</div>
    <div class="card-body">
        <div>
            <label><b>{{__('Name')}}</b></label>
            <p>{{$menu->name}}</p>
        </div>
        <div>
            <label><b>{{__('Url')}}</b></label>
            <p>{{$menu->url}}</p>
        </div>
        <div>
            <label><b>{{__('Order')}}</b></label>
            <p>{{$menu->order}}</p>
        </div>
    </div>
</div>
@endsection
