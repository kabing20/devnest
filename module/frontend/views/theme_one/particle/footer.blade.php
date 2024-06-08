<!--====== subscribe   section start ======-->
<section class="site-section site-newsletter">
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
                          @csrf

                        <input type="text" name="subscribe_email" class="form-control " placeholder="Enter your email id here" value="{{ old('subscribe_email') ?? '' }}">
                        @if($errors->has('subscribe_email'))
                        <div class="form-error-message">{{ $errors->first('subscribe_email') }}</div>
                    @endif
                        <button type="submit"><img
                                src="http://staging.themenepal.info/jal-design/assets/images/icons/subscribe-arrow.svg"
                                alt=""></button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <img src="http://staging.themenepal.info/jal-design/assets/images/home/newsletter-dots.png" alt="" class="dot">
</section>
<!--====== subscribe   section end ======-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 ">
                <div class="footer-logo">
                    @if(isset($profile['footer_logo']))
                     <img src="{{ $profile['footer_logo'] }}" alt="">
                    @endif
                </div>
                <div class="footer-address">
                    <ul>
                        @if(isset($profile['location']))
                        <li><img src="http://staging.themenepal.info/jal-design/assets/images/icons/map.png" alt="">
                            {{ $profile['location'] }}
                        </li>
                        @endif
                            @if(isset($profile['email']))
                        <li><a href="mailto:{{$profile['email'] ?? 'ranjan.themenepal@gmail.com'}}"><img src="http://staging.themenepal.info/jal-design/assets/images/icons/mail.png"
                                            alt=""> {{ $profile['email'] }}</a></li>
                            @endif
                            @if(isset($profile['phone_number']))
                        <li><a href="tel:{{$profile['phone_number'] ?? ''}}"><img
                                    src="http://staging.themenepal.info/jal-design/assets/images/icons/phone.png"
                                    alt="">{{ $profile['phone_number'] }}</a></li>
                            @endif
                            @if(isset($profile['website']))
                        <li><a href="{{ $profile['website'] }}"><img src="http://staging.themenepal.info/jal-design/assets/images/icons/web.png"
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
            <div><span class="themenepal-link">Website designed and Developed with <i class="fa fa-heart"  aria-hidden="true">
            </i> by <a  href="https://themenepal.com" target="_blank">Theme Nepal</a></span></div>
        </div>
    </section>
</footer>

@push('js')
    <script>
        // alert('test')
    </script>
@endpush
