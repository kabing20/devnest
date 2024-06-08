@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container">  <h4>AWARDS & ACHIEVEMENTS</h4></div>

    </div>

    <section class="awards">
        <img src="{{ asset('static_asset/frontend/theme_one/images/awards/award-ban.png') }}" alt="" class="awards-img  wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
        <div class="container wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="first">
                <h3 class="common-h3">AWARDS & ACHIEVEMENTS</h3>
                <p>Technology from Austria, Germany and Japan Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum officia deserunt mollit anim.</p>
            </div>
            <div class="second">
                <div class="row">
                    @if(isset($data['awards']) && count($data['awards'])>0)
                        @foreach($data['awards'] as $row)
                    <div class="col-md-4 col-sm-12 mb-4">
                        <img src="{{ $row->image('300_300') }}" alt="">
                        <a> <h5 class="common-h5">{{ $row->title }}</h5></a>
                        <p>{!! \Illuminate\Support\Str::limit($row->description,150) !!}</p>

                        <!-- <a href="#" class="read-more-btn">READ MORE</a>     -->
                    </div>
                        @endforeach
                        @endif
                </div>
            </div>
        </div>
    </section>

@endsection
