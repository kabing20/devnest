@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container">  <h4>GALLERY</h4></div>

    </div>

    <section class="gallery">
        <div class="container">
            <div class="heading-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                <h4>OUR GALLERY</h4>
            </div>
            <div class="gallery-album">
                <div class="row">
                    @if(isset($data['galleries']) && count($data['galleries'])>0)
                        @foreach($data['galleries'] as $gallery)
                    <div class="col-md-3 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                        <div class="cover">
                            <div class="number"><img src="{{ asset('static_asset/frontend/theme_one/images/gallery/pic.png') }}" alt=""><span>{{ count($gallery->images) }}</span></div>
                            <div class="gal-img">
                                <a href="{{ route('frontend.gallery.detail',$gallery->slug) }}"><img src="{{ $gallery->image('300_300') }}" alt=""></a>
                            </div>
                        </div>
                        <span class="img-title"><a href="{{ route('frontend.gallery.detail',$gallery->slug) }}">{{ $gallery->title }}</a></span>
                    </div>
                        @endforeach
                        @endif
                </div>
            </div>
        </div>
    </section>

@endsection
