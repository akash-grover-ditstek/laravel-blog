@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12 mb-2">
        <a class="btn btn-secondary col-md-2" href="{{route('menus.index')}}">{{__('Back')}}</a>
    </div>
</div>
<div class="card">
    <div class="card-header">{{__('Create menu')}}</div>
    <div class="card-body">
        <form action="{{route('menus.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">{{__('Name')}}</label>
                <input type="text" class="form-control" id="name" name="name" />
                @include('admin.components.error', ['errors' => $errors->get('name')])
            </div>
            <div class="form-group">
                <label for="url">{{__('Url')}}</label>
                <input type="text" class="form-control" id="url" name="url" />
                @include('admin.components.error', ['errors' => $errors->get('url')])
            </div>
            <div class="form-group">
                <label for="order">{{__('Order')}}</label>
                <input type="number" min="0" class="form-control" id="order" name="order" />
                @include('admin.components.error', ['errors' => $errors->get('order')])
            </div>
            <div class="form-group">
                <label for="parent">{{__('Parent')}}</label>
                <select type="text" class="form-control" id="parent" name="parent">
                    <option value="">--no parent--</option>
                    @foreach ($parents as $parent)
                    <option value="{{$parent->id}}">{{$parent->name}}</option>
                    @endforeach
                </select>
                @include('admin.components.error', ['errors' => $errors->get('parent')])
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
