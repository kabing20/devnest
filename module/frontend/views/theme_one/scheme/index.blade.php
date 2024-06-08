@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container">  <h4>SCHEMES</h4></div>

    </div>

    <!--====== evetns section  start ======-->
    <section class="scheme" >
        <div class="container">
            <div class="scheme-title  wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms" >
                <h4>AVAILABLE SCHEMES</h4>
            </div>
            <div class="scheme-item">
                <div class="row">
                    @if(isset($data['scheme']) && count($data['scheme'])>0)
                        @foreach($data['scheme'] as $row)
                    <div class="col-md-6  wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                        <div class="image"><a><img src="{{ $row->image('700_700') }}" alt=""></a></div>

                        {{-- <div class="name"><a href="#"><h5>{{ $row->title }}</h5></a></div> --}}
                        <div class="name"><h5>{{ $row->title }}</h5></div>
                        <div class="info">
                            {!! $row->description !!}
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
