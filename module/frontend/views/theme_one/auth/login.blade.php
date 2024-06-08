@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container">  <h4>LOGIN</h4></div>

    </div>

    <!-- login section -->
    <section class="py-5 login-section">
        <div class="profile profile-login">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 wow fadeInLeft animated" data-wow-offset="0" data-wow-delay="300ms">


                        <img class="img-fluid signin-img" src="{{ asset('static_asset/frontend/theme_one/images/login/login-img.jpg') }}">


                    </div>
                    <div class="col-xl-5 col-lg-5 wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
                        <div class=" pl-3 pr-3">
                            <div class=" px-35 ">
                                <h2 class="strong-700 sigin-text" >Sign In</h2>

                            </div>

                            <div class="pt-2">
                                <div class="">
                                    <form class="form-default sigin-form" role="form" action="http://127.0.0.1:8000/login" method="POST">
                                        <input type="hidden" name="_token" value="WJ1ZthjFSHPfRFNQouB9V6tBWuvgHpj20QBaBYOL">                                                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input class="form-control sigin-input" value="" placeholder="Login or e-mail" name="email" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="password" class="form-control signin-input " placeholder="Password" name="password" id="pass_log_id">

                                            </div>
                                            </span>
                                        </div>

                                        <div class="row rem-for mb-3 ">
                                            <div class="col-sm-5  col-5 ">
                                            </div>
                                            <div class="col-sm-7 col-7  text-right">
                                                <a href="{{ route('frontend.forget_password.index') }}" class="link link-xs link--style-3 forget-pass">Forgot password ?</a>
                                            </div>
                                        </div>


                                        <div>
                                            <button type="submit" class=" signin-btn w-100">Sign In</button>
                                        </div>
                                    </form>
                                    <div class="or or--1 mt-3 text-center">
                                        <span class="or">or</span>
                                    </div>
                                    <div class="other1">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4 mb-3 social-link">
                                                <img src="{{ asset('static_asset/frontend/theme_one/images/icons/face.png') }}" alt="" class="fb-btn"> Facebook
                                            </a></div>

                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 mb-3 social-link">
                                                <img src="{{ asset('static_asset/frontend/theme_one/images/icons/google.png') }}" alt="" class="google-btn"> Google
                                            </a></div>

                                    </div>
                                </div>
                            </div>
                            <div class="border-div"></div>
                            <div class="text-left px-35 pb-3">
                                <p class="make-account">
                                    You do not  have an account ?  <a href="{{ route('frontend.register.index') }}" class="strong-600 register-link">Register </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
