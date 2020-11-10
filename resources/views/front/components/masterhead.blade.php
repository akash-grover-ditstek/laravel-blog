<header class="masthead" style="{{ isset($background) ? "background-image: url('$background')" : "" }}">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="{{ $type ?? 'site-heading' }}">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</header>