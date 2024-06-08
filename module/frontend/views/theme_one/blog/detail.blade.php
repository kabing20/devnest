@extends($theme_path.'.layouts.master_layout')

@section('content')




<!--====== event detail section  start ======-->

<section class="blogs-detail">
    <div class="breadcrumb-section">
        <div class="container">

            <div class="breadcrumb-info wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                <span>Home >  News & Blogs  >  {{ $data['row']->title }}</span>
                <h4>{{ $data['row']->title }} {{ isset($data['row']->inaguration)?" Inauguration by ".$data['row']->inaguration:"" }}</h4>
                <div>
                    <span class="date">{{ $data['row']->date }}</span>
                    <span class="address">{{ $data['row']->location }}</span>
                </div>

            </div>
        </div>
    </div>
    <div class="description-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated" data-wow-offset="0" data-wow-delay="300ms">
                    <img src="{{ $data['row']->image('700_700') }}" alt="">
                    {!! $data['row']->description !!}
                </div>
                <div class="col-md-4 wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
                    <div class="title"><h4>Latest Blogs</h4></div>
                    @if(isset($data['latest']) && count($data['latest'])>0)
                        @foreach($data['latest'] as $blog)
                            @continue($blog->id == $data['row']->id)
                    <div class="latest">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ route('frontend.blog.detail',$blog->slug) }}"><img src="{{ $blog->image('300_300') }}" alt=""></a>
                            </div>
                            <div class="col-md-9">
                                <h5><a href="{{ route('frontend.blog.detail',$blog->slug) }}"> {{ $blog->title }} </a></h5>
                                <p>{!! \Illuminate\Support\Str::limit($blog->description,150) !!}</p>

                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>


    <div class="similar-blogs">
        <div class="container">
            <div class="event-title wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                <h4>SIMILAR BLOGS TO READ</h4>
            </div>
            <div class="event-item" data-wow-offset="0" data-wow-delay="300ms">
                <div class="row">
                    @if(isset($data['latest']) && count($data['latest'])>0)
                        @foreach($data['latest'] as $blog)
                            @continue($blog->id == $data['row']->id)
                    <div class="col-md-4 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                        <div class="image"><a href="{{ route('frontend.blog.detail',$blog->slug) }}"><img src="{{ $blog->image('700_700') }}" alt=""></a></div>
                        <div class="dates">
                            <span>{{ $blog->date }}</span>

                        </div>
                        <div class="name"><a href="{{ route('frontend.blog.detail',$blog->slug) }}"><h5>{{ $blog->title }}</h5></a></div>
                        <div class="info">
                            <span>{{ \Illuminate\Support\Str::limit($blog->description,150) }}</span>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

</section>
<!--====== evetnt detail section  end ======-->


    @endsection
