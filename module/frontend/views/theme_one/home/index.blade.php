@extends($theme_path.'.layouts.master_layout')

@section('content')

    <section class="banner-section">
        @if(isset($data['slider']->background))
            <img src="{{ $data['slider']->background() }}" alt="" class="back-img">
        @else
            <img src="{{ asset('static_asset/frontend/theme_one/images/home/homepage-banner2.png') }}" alt=""
                 class="back-img">
        @endif
        <!--====== overlay section start ======-->
        <section class="banner-overlay">
            <div class="container">

                <div class="row">
                    <div class="col-md-5 first wow fadeInLeft animated" data-wow-offset="0" data-wow-delay="300ms">
                        <h3>{{ $data['slider']->title ?? '' }}</h3>
                        <h3><strong>{{ $data['slider']->sub_title ?? '' }}</strong></h3>
                        <p class="mt-10 mb-4">

                            {!! Str::words(strip_tags($data['slider']->short_description), $limit = 10, $end = '...') !!}
                        </p>

                        <a href="{{ route('frontend.about_us.index') }}"
                           class="read-more-btn"  target = "__blank">READ MORE</a>
                    </div>
                    <div class="second wow  fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">

                        @if(isset($data['slider']->image))
                        <img src="{{asset($data['slider']->image() ?? '')}}" alt="" class="manisa">
                      @endif
                     </div>
                </div>

            </div>

            {{--            <div class="social-group">--}}
            {{--                <a href="#"><img src="http://staging.themenepal.info/jal-design/assets/images/icons/whatsapp.png"--}}
            {{--                                 alt=""></a>--}}
            {{--                <a href="#"><img src="http://staging.themenepal.info/jal-design/assets/images/icons/viber.png" alt=""></a>--}}

            {{--                <a href="#"><img src="http://staging.themenepal.info/jal-design/assets/images/icons/messenger.png"--}}
            {{--                                 alt=""></a>--}}

            {{--            </div>--}}
        </section>

        <!--====== overlay section end ======-->
    </section>

    <section class="product-name">
        <div class="container pcontainer">
            @if(isset($data['product']) && count($data['product']) > 3)
                @foreach($data['product'] as $product)
                    <div><a href="{{ route('frontend.product.detail',$product->slug) }}">{{ $product->title }}</a></div>
                @endforeach
            @endif
        </div>
    </section>

    {{-- <section class="adaptations wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
        <div class="container">
            <h3>OUR PRODUCT </h3>
            <div class="slidep row">
                @if(isset($data['product']) && count($data['product']) > 3)
                    @foreach($data['product'] as $product)
                        <div class="col-md-3"><a href="{{ route('frontend.product.detail',$product->slug) }}"><img
                                    src="{{ $product->image('300_300') }}" alt=""></a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section> --}}

    <section class="request-quote">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-offset="0" data-wow-delay="300ms">
                    <form action="" name="quote-form" class="quote-form">
                        <div class="form-title"><span>Request A Quote</span></div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="Select-i">I am a</label>
                                    <select class="form-control" id="Select-i">
                                        <option>Agent</option>
                                        <option>Salesman</option>
                                        <option>Merchant</option>

                                    </select>
                                </div>

                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" placeholder="-">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email Id</label>
                                    <input type="text" class="form-control" id="email" placeholder="-">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" placeholder="-">
                                </div>
                            </div>


                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Select-cat">Category</label>
                                        <select class="form-control" id="Select-cat">
                                            <option>Product</option>
                                            <option>Product 1</option>
                                            <option>Product 2</option>
                                            <option>Product 3</option>
                                            <option>Product 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Select-sizes">Sizes</label>
                                        <select class="form-control" id="Select-sizes">
                                            <option>Small</option>
                                            <option>Large</option>
                                            <option>Extra Large</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="Select-price">Pieces</label>
                                        <select class="form-control" id="Select-price">
                                            <option>5</option>
                                            <option>7</option>
                                            <option>12</option>
                                            <option>15</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">

                                <div class="form-group">
                                    <label for="Select5">I am a</label>
                                    <select class="form-control" id="Select5">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <a href="#" class="add-more"><img
                                src="http://staging.themenepal.info/jal-design/assets/images/icons/plus.png" alt=""
                                id="add-icon">Add More</a>

                        <a href="" id="send-request">SEND REQUEST</a>
                    </form>
                </div> --}}
                <div class="col-md-6 col-sm-12 wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
                    <div class="quote-slide row">

                        @if(isset($data['scheme']) && count($data['scheme'])>1)
                            @foreach($data['scheme'] as $scheme)
                                <div><img src="{{ $scheme->image('300_300') }}"
                                          alt="">
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="video-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-md-6 first ">

                    @if(isset($data['aboutus']))
                    <img src="{{ $data['aboutus']->bestChoiceImage('700_700') }}" alt=""
                         class="bg-img">
                    @endif

                    @if(isset($data['aboutus']->video_banner_url))
                    <div class="play-btn">
                        <a data-fancybox="video-gallery" data-src="{{ $data['aboutus']->video_banner_url }}"><img
                                src="http://staging.themenepal.info/jal-design/assets/images/home/play.png" alt=""></a>
                    </div>
                        @endif
                </div>
                @if(isset($data['aboutus']->description))
                <div class="col-md-6 second">
                    <img src="http://staging.themenepal.info/jal-design/assets/images/home/dots.png" alt=""
                         class="dots">
                    <h4 class="common-h4">BEST PIPE AND FITTINGS</h4>
                    <h4 class="common-h4">COMPANY IN NEPAL</h4>

                    <p>
                        {!! Str::words(strip_tags( $data['aboutus']->description), $limit = 25, $end = '...') !!}
                    </p>

                    <a href="{{ route('frontend.about_us.index') }}" class="read-more-btn">READ MORE</a>
                </div>
                @endif
            </div>
        </div>
    </section>

    <section class="best-products wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
        <div class="container">
            <div class="row first">
                <div class="col-md-12">
                    <h4 class="common-h4">PEOPLE LOVE OUR PRODUCTS</h4>
                    <p>Jal Pipes and Fittings are manufactured with the state-of-art technology
                        from Austria, Germany and Japan.</p>
                    <a href="{{ route('frontend.product.index') }}" class="read-more-btn">READ MORE</a>
                </div>
            </div>

            <div class="slidep row">
                @if(isset($data['product']) && count($data['product'])>0)
                    @foreach($data['product'] as $product)

                <div class="col-md-3"><a href="{{ route('frontend.product.detail',$product->slug) }}"><img
                            src="{{ $product->image('300_300') }}" alt=""></a>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <div class="row first">
                <div class="col-md-6 wow fadeInLeft animated" data-wow-offset="0" data-wow-delay="300ms" id="event">
                     </div>

                <div class="col-md-6 second wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms"
                     id="affilation"></div>

                <div class="col-md-6 wow fadeInLeft animated" data-wow-offset="0" data-wow-delay="300ms"
                     id="blog"></div>

                <div class="col-md-6 awards wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms"
                     id="award"></div>
            </div>
        </div>
    </section>

    <section class="client-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms"
             id="outclient"></section>

@endsection

@push('js')
    <script>
        $(document).ready(function () {
            event();
        });

        function event() {
            $.get("ajax/home/event", function (data) {
                $('#event').html(data)
                affiliation();
            });
        }

        function affiliation() {
            $.get("ajax/home/affilation", function (data) {
                $('#affilation').html(data)
                blog();
            });
        }

        function blog() {
            $.get("ajax/home/blog", function (data) {
                $('#blog').html(data)
                award();
            });
        }

        function award() {
            $.get("ajax/home/award", function (data) {
                $('#award').html(data)
                ourclient()
            });
        }

        function ourclient() {
            $.get("ajax/home/ourclient", function (data) {
                $('#outclient').html(data)
            });
        }
    </script>
@endpush
