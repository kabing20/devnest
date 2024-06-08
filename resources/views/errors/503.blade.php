<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'Service Unavailable'.' | '.config('app.name') }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="http://staging.themenepal.info/jal-design/assets/images/icons/favicon1.png"
          type="image/png">
    <!--====== fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('static_asset/frontend/theme_one/slick-file/slick/slick-theme.css') }}"/>
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/font-awesome.min.css') }}">
    <!--====== MD bootstrap ======-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/all.css') }}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/cdn/mdb.min.css') }}">

    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('static_asset/frontend/theme_one/cdn/jquery.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!--====== MD bootstrap ======-->


    <!--====== fancybox ======-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>

    <!--====== wow animate css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/animate.css') }}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('static_asset/frontend/theme_one/css/style.css') }}">
    <style>
        .form-error-message {
            color: red;

        }
    </style>

</head>
<body>
    <div class="secondary-menu ">
        <div class="container">
            <ul>
                <li><a href="{{ route('frontend.blog.index') }}">News & Blogs</a></li>
                <li><a href="{{ route('frontend.event.index') }}">Events & Promotions</a></li>
                <li><a href="{{ route('frontend.award.index') }}">Awards & Achievements</a></li>
                <li><a href="{{ route('frontend.gallery.index') }}">Gallery</a></li>
                <li>
                    <img src="{{ asset('static_asset/frontend/theme_one/images/home/top-img.png') }}" alt="">
                </li>
            </ul>
        </div>
    </div>

<nav class="navbar navbar-expand-lg navbar-dark " >
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ route('frontend.home.index') }}" ><img src="{{ asset('static_asset/frontend/theme_one/images/logo/logo12.png') }}" class="logo" alt=""></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item{{ Request::is('/')?"  active-item":"" }}">
                    <a class="nav-link" href="{{ route('frontend.home.index') }}">Home

                    </a>
                </li>
                <li class="nav-item{{ Request::is('about-us')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.about_us.index') }}">About Us</a>
                </li>
                <li class="nav-item{{ Request::is('product*')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.product.index') }}">Our Products</a>
                </li>
                <li class="nav-item{{ Request::is('scheme')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.scheme.index') }}">Schemes</a>
                </li>
                <li class="nav-item{{ Request::is('technicle')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.technical_data.index') }}">Technical Data</a>
                </li>


                <li class="nav-item{{ Request::is('contact-us')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.contact_us.index') }}">Contact Us</a>
                </li>

                <li class="nav-item last-item">
                    <a class="nav-link hover-btn" href="{{ route('frontend.login.index') }}">Agent / Partner Login</a>
                </li>


            </ul>
            <!-- Links -->

        </div>
    </div>
</nav>
<!--/.Navbar-->

<div class="content">
    <div class="container-fluid">
        <section class="error-page">

            <div class="container">
              <div><h4>503</h4></div>
              <div><span>Service Unavailable</span></div>
              <div><a href="{{route('frontend.home.index')}}">Get Back To Home</a></div>
             </div>
            </section>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>

<!--====== subscribe   section start ======-->
{{-- <section class="site-section site-newsletter">
    <div class="container">
        <div class="newsletter-section">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="site-content">

                        <h3>SUBSCRIBE NOW</h3>

                        <p>Don’t keep your email subscription a secret!<br></p>

                    </div>
                </div>
                <div class="col-md-6" id="subscription">

                    <form action="{{ route('frontend.subscription.store','#subscription') }}" method="post">
                        {{ csrf_field() }}

                        <input type="text" name="email" class="form-control " placeholder="Enter your email id here" value="{{ old('email') ?? '' }}">
                        @if($errors->has('email'))
                        <div class="form-error-message">{{ $errors->first('email') }}</div>
                    @endif
                        <button type="submit"><img src="http://staging.themenepal.info/jal-design/assets/images/icons/subscribe-arrow.svg"alt="">
                        </button>


                    </form>

                </div>
            </div>
        </div>
    </div>
    <img src="http://staging.themenepal.info/jal-design/assets/images/home/newsletter-dots.png" alt="" class="dot">
</section> --}}
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 ">
                <div class="footer-logo">
                    <img src="http://staging.themenepal.info/jal-design/assets/images/logo/footer-logo.png" alt="">
                </div>
                <div class="footer-address">
                    <ul>
                        @if(isset($profile['location']))
                        <li><img src="http://staging.themenepal.info/jal-design/assets/images/icons/map.png" alt="">
                            {{ $profile['location'] }}
                        </li>
                        @endif
                            @if(isset($profile['email']))
                        <li><a href=""><img src="http://staging.themenepal.info/jal-design/assets/images/icons/mail.png"
                                            alt=""> {{ $profile['email'] }}</a></li>
                            @endif
                            @if(isset($profile['phone_number']))
                        <li><a href=""><img
                                    src="http://staging.themenepal.info/jal-design/assets/images/icons/phone.png"
                                    alt="">{{ $profile['phone_number'] }}</a></li>
                            @endif
                            @if(isset($profile['website']))
                        <li><a href=""><img src="http://staging.themenepal.info/jal-design/assets/images/icons/web.png"
                                            alt="">{{ $profile['website'] }}</a></li>
                            @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-4  other">
                <div class=" first">
                    <h5 class="mb-2">OTHER LINKS</h5>
                    <ul>
                        <li><a href="{{ route('frontend.about_us.index') }}">About Us</a></li>
                        <li><a href="{{ route('frontend.product.index') }}">Products</a></li>
{{--                        <li><a href="#">Projects</a></li>--}}
{{--                        <li><a href="#">Locate Dealers</a></li>--}}
                        <li><a href="{{ route('frontend.gallery.index') }}">Gallery</a></li>
                        <li><a href="{{ route('frontend.faq.index') }}">FAQ</a></li>
                        <li><a href="{{ route('frontend.blog.index') }}">News And Blogs</a></li>
                        <li><a href="{{ route('frontend.contact_us.index') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="second mt-5">
                    <h5 class="mb-3">AFFILIATIONS</h5>
                    <div class="row affiliate">
                        @if(isset($affilations) && count($affilations)>0)
                            @foreach($affilations as $affilation)
                        <div class="col-md-4"><img
                                src="{{ $affilation->image('50_50') }}"
                                alt=""></div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
            <div class="col-md-4 c0l-lg-4  get-in-touch">
                <div class="first">
                    @if(isset($profile['get_in_touch']))
                    <h5 class="mb-2">GET IN TOUCH</h5>
                    <p>{{ $profile['get_in_touch'] }}</p>
                    @endif
                    <div class="social-links">
                        @if(isset($profile['facebook']))
                        <a href="{{ $profile['facebook'] }}"><img
                                src="{{ asset('static_asset/frontend/theme_one/images/icons/social-facebook.png') }}"
                                alt=""></a>
                        @endif
                            @if(isset($profile['twitter']))
                        <a href="{{ $profile['twitter'] }}"><img
                                src="{{ asset('static_asset/frontend/theme_one/images/icons/social-twitter.png') }}"
                                alt=""></a>
                            @endif
                            @if(isset($profile['linkedin']))
                        <a href="{{ $profile['linkedin'] }}"><img
                                src="{{ asset('static_asset/frontend/theme_one/images/icons/social-linkedin.png') }}"
                                alt=""></a>
                            @endif
                            @if(isset($profile['instagram']))
                        <a href="{{ $profile['instagram'] }}"><img
                                src="{{ asset('static_asset/frontend/theme_one/images/icons/social-instagram.png') }}"
                                alt=""></a>
                            @endif
                    </div>
                </div>
                <div class="second mt-5">
                    @if(isset($profile['parent_company_logo_footer']))
                    <img src="{{ $profile['parent_company_logo_footer'] }}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- copyright -->
    <section class="copyright">
        <div class="container">
            <div><span>Jal Pipes and fittings 2021 © All rights reserved</span></div>
            <div><span class="themenepal-link">Website designed and Developed with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                        href="https://themenepal.com" target="_blank">Theme Nepal</a></span></div> </div>
    </section>
</footer>


</body>
</html>
