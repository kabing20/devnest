@extends($theme_path.'.layouts.master_layout')

@section('content')

    <section class="about-us">

        <div class="banner-part">
            <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
            <div class="container">  <h4>ABOUT US</h4></div>

        </div>

        <div class="first-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ asset('static_asset/frontend/theme_one/images/about/jal-ad.jpg') }}" alt="">
                    </div>
                    <div class="col-md-7">
                        <p>{!! $data['aboutus']->description ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-section wow fadeInUp animated"  data-wow-offset="0" data-wow-delay="300ms" >
            <div class="container">

                @if(isset($data['aboutus']))
                <img src="{{ $data['aboutus']->bestChoiceImage('700_700') }}" alt="">
                <div class="choice-info">
                    <h4>{{ $data['aboutus']->best_choice_title ?? '' }}</h4>
                    <p>{{$data['aboutus']->best_choice_description ?? ''}}</p>
                </div>
                    @endif

            </div>
        </div>
        <div class="third-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms" >
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span>BEST PIPE</span>
                        <span>AND</span>
                        <span>FITTINGS</span>
                        <span>COMPANY IN</span>
                        <span>NEPAL</span>
                    </div>
                    <div class="col-md-8">
                        <div class="sub-div">
                            <div><img src="{{ asset('static_asset/frontend/theme_one/images/about/y.png') }}" alt=""></div>
                            <div class="second">
                                <h4>OUR VISION</h4>
                                <p>{!! $data['aboutus']->vision_description ?? '' !!}</p>
                            </div>
                        </div>

                        <div class="sub-div">

                            <div><img src="{{ asset('static_asset/frontend/theme_one/images/about/x.png') }}" alt=""></div>
                            <div  class="second">
                                <h4>OUR MISSION</h4>
                                <p>{!! $data['aboutus']->mission_description ?? '' !!}</p>
                            </div>
                        </div>

                        <div class="sub-div">
                            <div><img src="{{ asset('static_asset/frontend/theme_one/images/about/i2.png') }}" alt=""></div>
                            <div  class="second">
                                <h4>OUR GOALS</h4>
                                <p>{!! $data['aboutus']->goal_description ?? '' !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></br>
        <div class="fourth-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >

                        <img src="{{ $data['aboutus']->VideoBannerThumb('700_700') }}" alt="" class="bg-img">

                        <div class="play-btn">
                            <a data-fancybox="video-gallery" data-src="{{ $data['aboutus']->video_banner_url }}"><img src="{{ asset('static_asset/frontend/theme_one/images/home/play.png') }}" alt="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fifth-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4>WE ARE</h4>
                        <h4>AFFILATED WITH</h4>
                    </div>
                    <div class="col-md-6 second">


                        <div class="row affiliate">
                            @foreach($data['affilation'] as $key => $image)
                            <div class="col-md-4"><img src="{{ $image->image('50_50') }}" alt=""></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sixth-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="container">
                <div class="row">
                    @foreach($data['images'] as $image)

                    <div class="col-md-3"><img src="{{ $image->image('300_300') }}" alt=""></div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="seventh-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="container">
                <div class="title"><h4>OUR CLIENTS LOVE WORKING WITH US</h4></div>
                <div class="testimonial-slider">
                    @foreach($data['testimonial'] as $testimonial)
                    <div class="testimonial-div">
                        <div class="statement">
                            <p>{!! $testimonial->description !!}</p>
                        </div>
                        <div class="client-name">
                            <img src="{{ $testimonial->image('50_50') }}" alt="">
                            <span>{{ $testimonial->name }}</span>
                            <span>{{ $testimonial->position }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
