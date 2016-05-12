<!DOCTYPE html>
<html xml:lang="{{ LaravelLocalization::setLocale() }}" lang="{{ LaravelLocalization::setLocale() }}">
<head>
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}" />
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-mvYjhBJXQ9VlNETV/xXShy849GsBHnKzVVudnMOcWUVM/6Nd2ksj8VNng5f8ylyX" crossorigin="anonymous">
    <style>.container { max-width: 980px; }</style>
    <!-- <link rel="shortcut icon" href="{{-- Theme::url('favicon.ico') --}}"> -->

    {{-- Theme::style('css/main.css') --}}
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
        {!! Setting::get('core::google-analytics') !!}
    <?php endif; ?>
</body>
</html>