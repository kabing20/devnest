@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="http://staging.themenepal.info/jal-design/assets/images/about/ban.jpg" alt="">
        <div class="container"><h4>NEWS & BLOGS</h4></div>

    </div>

    <section class="blogs">
        <div class="container">
            <div class="event-title wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                <h4>NEWS & BLOGS</h4>
            </div>
            <div class="blogs-item">
                <div class="row">
                    @if(isset($data['blogs']) && count($data['blogs'])>0)
                        @foreach($data['blogs'] as $blog)
                            <div class="col-md-4 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                                <div class="image"><a href="{{ route('frontend.blog.detail',$blog->slug) }}"><img
                                            src="{{ $blog->image('300_300') }}"
                                            alt=""></a>
                                </div>
                                <div class="dates">
                                    <span>{{ $blog->date }}</span>

                                </div>
                                @if($blog->inaguration)
                                    <div class="name"><a href="{{ route('frontend.blog.detail',$blog->slug) }}">
                                            <h5>{{ $blog->inaguration ?? ''}} - Inaguration</h5></a></div>
                                @else
                                    <div class="name"><a href="{{ route('frontend.blog.detail',$blog->slug) }}">
                                            <h5>{{ $blog->title ?? '' }}</h5></a></div>
                                @endif
                                <div class="info">
                                    <span> {!! Str::words($blog->description, 10, ' ...') !!}</span>

                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
