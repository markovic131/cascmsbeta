<!DOCTYPE html>
<html xml:lang="{{ LaravelLocalization::setLocale() }}" lang="{{ LaravelLocalization::setLocale() }}">
<head>
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ setting('core::site-description') }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ setting('core::site-name') }}@show
    </title>
    {!! Theme::style('css/'.setting('foundation::theme').'.css') !!}
    <!-- <link rel="shortcut icon" href="{{-- Theme::url('favicon.ico') --}}"> -->

</head>
<body>
    @include('partials.navigation')

    <div class="container">
        @yield('content')
    </div>
    <hr>
    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    @yield('scripts')
    {{-- Theme::script('js/all.js') --}}

    <?php if (Setting::has('core::google-analytics')): ?>
        {!! setting('core::google-analytics') !!}
    <?php endif; ?>
</body>
</html>