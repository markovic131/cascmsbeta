<div class="container">
    <div class="row" style="padding-top:15px;padding-bottom:15px">
        <div class="col-md-6">
            <div class="site-name">{{ Setting::get('core::site-name') }}</div>
            <!-- <img src="/assets/media/logo.jpg" alt="" class="img-responsive"> -->
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ Setting::get('core::site-name') }}</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            {!! Menu::render('main','navbar') !!}
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/en">EN</a></li>
                <li><a href="/el">GR</a></li>
            </ul>
        </div>
    </div>
</nav>