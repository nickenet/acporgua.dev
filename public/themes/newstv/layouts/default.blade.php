<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="canonical" href="{{ url('/') }}">
        <meta http-equiv="content-language" content="en">
        <!--<link rel="shortcut icon" href="{{ ThemeOption::getOption('logo') }}">-->
        <link rel="apple-touch-icon" sizes="57x57" href="uploads/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="uploads/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="uploads/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="uploads/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="uploads/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="uploads/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="uploads/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="uploads/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="uploads/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="uploads/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="uploads/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="uploads/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="uploads/favicon/favicon-16x16.png">
        <link rel="manifest" href="uploads/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="uploads/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        {!! SeoHelper::render() !!}

        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body>
        <div class="wrapper" id="site_wrapper">
            {!! Theme::partial('header') !!}

            <main class="main" id="main">
                <div class="container">
                    @if (Route::currentRouteName() == 'public.index')
                        @php
                            $featured = get_featured_posts(5);
                        @endphp
                        @if (count($featured) > 0)
                            <div class="main-feature">
                                @foreach ($featured as $feature_item)
                                    <div class="feature-item">
                                        <div class="feature-item-dv">
                                            <a href="{{ route('public.single.detail', $feature_item->slug) }}"
                                               title="{{ $feature_item->name }}"
                                               style="display: block">
                                                <img class="img-full img-bg" src="{{ get_object_image($feature_item->image) }}" alt="{{ $feature_item->name }}"
                                                     style="background-image: url('{{ get_object_image($feature_item->image) }}');">
                                                <span class="feature-item-link"
                                                      title="{{ $feature_item->name }}">
                                                    <span>{{ $feature_item->name }}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endif
                    <div class="main-content">
                        <div class="main-left">
                            {!! Theme::content() !!}
                        </div>
                        {!! Theme::partial('sidebar') !!}
                    </div>
                </div>
            </main>

            {!! Theme::partial('footer') !!}
        </div>

        {!! Theme::asset()->container('footer')->scripts() !!}

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58b80e5cfacf57001271be31&product=sticky-share-buttons"></script>

        <script>
            $(document).ready(function () {
                $('.banner-slider-wrap').slick({
                    dots: true
                });
            });
        </script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=867766230033521";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

    </body>
</html>
