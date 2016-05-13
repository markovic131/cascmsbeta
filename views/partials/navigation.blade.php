<div class="container">
    <div class="row" style="padding-top:15px;padding-bottom:15px">
        <div class="col-md-6">
            <img src="/assets/media/logo.jpg" alt="" class="img-responsive">
        </div>
    </div>
    <nav class="navbar navbar-default">
            <div class="navbar-header">
                <!-- <a class="navbar-brand" href="{{ URL::to('/'.LaravelLocalization::setLocale()) }}">
                    <img class="img-responsive" alt="{{ Setting::get('core::site-name') }}" src="/assets/media/logo.jpg">
                </a> -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="{{ URL::to('/') }}">{{ Setting::get('core::site-name') }}</a> -->
            </div>
            <div class="collapse navbar-collapse">
                {!! Menu::render('main','navbar') !!}
                {!! Menu::render('lang','navbar-right') !!}
            </div>
    </nav>
</div>