@if(isset($loads) && is_array($loads))
    @foreach($loads as $load)
    <script src="{{$load}}" defer></script>
    @endforeach
@endif
{!! $slot !!}