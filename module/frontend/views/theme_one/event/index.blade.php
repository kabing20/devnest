@extends($theme_path.'.layouts.master_layout')

@section('content')
    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container">  <h4>EVENTS & PROMOTIONS</h4></div>

    </div>

    <section class="event1">
        <div class="container">
            <div class="event-title wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                <h4>EVENTS & PROMOTIONS</h4>
            </div>
            <div class="event-item">
                <div class="row">
                    @if(isset($data['events']) && count($data['events'])>0)
                        @foreach($data['events'] as $row)
                            <div class="col-md-4 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                                <div class="image"><a href="{{ route('frontend.event.detail',$row->slug) }}"><img
                                            src="{{ $row->image('300_300') }}"
                                            alt=""></a>
                                </div>
                                <div class="dates">
                                    <span>{{ $row->date }}</span>
                                    <span>{{ $row->location }}</span>

                                </div>
                                @if($row->inaguration)
                                    <div class="name"><a href="{{ route('frontend.event.detail',$row->slug) }}">
                                            <h5>{{ $row->inaguration }} - Inaguration</h5></a></div>
                                @else
                                    <div class="name"><a href="{{ route('frontend.event.detail',$row->slug) }}">
                                            <h5>{{ $row->title }}</h5></a></div>
                                @endif
                                <div class="info">
                                    <span>{!! \Illuminate\Support\Str::limit($row->description,150) !!}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
