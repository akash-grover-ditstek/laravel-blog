@php($menus = WebConfig::menu())
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('homepage')}}">{{config('app.name', 'Laravel')}}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach($menus as $menu)
                <li class="nav-item {!! $menu['childs'] ? 'dropdown' : '' !!}">
                    <a class="nav-link {!! $menu['childs'] ? 'dropdown-toggle' : '' !!}"
                        {!! !$menu['childs'] ? 'href="'.$menu['url'].'"' : '' !!} 
                        {!! $menu['childs'] ? 'id="dropdown-'.$menu['id'].'"' : '' !!}>
                        {{ $menu['name'] }}</a>
                    @if($menu['childs'])
                        <div class="dropdown-menu" aria-labelledby="dropdown-{{$menu['id']}}">
                        @foreach($menu['childs'] as $childMenu)
                            <a class="dropdown-item" href="{{$childMenu['url']}}">{{$childMenu['name']}}</a>
                        @endforeach
                        </div>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mobileNav">
    <div class="container">
        <a class="navbar-brand" href="{{route('homepage')}}">{{config('app.name', 'Laravel')}}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach($menus as $menu)
                <li class="nav-item {!! $menu['childs'] ? 'dropdown' : '' !!}">
                    <a class="nav-link {!! $menu['childs'] ? 'dropdown-toggle' : '' !!}"
                        href="{{ !$menu['childs'] ? $menu['url'] : '/' }}" 
                        {!! $menu['childs'] ? 'role="button" data-toggle="dropdown"' : '' !!}
                        {!! $menu['childs'] ? 'id="dropdown-'.$menu['id'].'"' : '' !!}>
                        {{ $menu['name'] }}</a>
                    @if($menu['childs'])
                        <div class="dropdown-menu" aria-labelledby="dropdown-{{$menu['id']}}">
                        @foreach($menu['childs'] as $childMenu)
                            <a class="dropdown-item" href="{{$childMenu['url']}}">{{$childMenu['name']}}</a>
                        @endforeach
                        </div>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>