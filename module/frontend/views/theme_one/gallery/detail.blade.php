@extends($theme_path.'.layouts.master_layout')

@section('content')
    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container"><h4>GALLERY PHOTOS</h4></div>

    </div>

    <section class="photos">
        <div class="container">
            <div class="heading-section wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                <h4>{{ $data['gallery']->title }}</h4>
                {{-- <span>Posted on {{ $data['gallery']->created_at }}</span> --}}
            </div>
            <div class="photos-img">
                <div class="container">
                    <div class="row">
                        @if(isset($data['images']) && count($data['images'])>0)
                            @foreach($data['images'] as $image)
                        <div class="col-md-3 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                            <a href="{{ $image->image('300_300') }}"
                               class="gallery-link" data-fancybox="images-preview"
                               data-caption="{{ $data['gallery']->title }}">

                                <img class="img-fluid lazyloaded"
                                     src="{{ $image->image() }}">

                            </a>
                        </div>
                            @endforeach
                            @endif
                            <br>
                            <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
