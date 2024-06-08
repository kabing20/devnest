@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container">  <h4>OUR PRODUCTS</h4></div>

    </div>

    <!--====== award section  start ======-->

    <section class="products " >
        <img src="{{ asset('static_asset/frontend/theme_one/images/awards/award-ban.png') }}" alt="" class="awards-img wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
        <div class="container wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="first " >
                <h3 class="common-h3">ALL PRODUCTS CATEGORIES</h3>
                <p>Jal Pipes and Fittings are manufactured with the state-of-art technology from Austria, Germany and Japan.</p>
            </div>
            <div class="second1">
                <div class="row">
                    @if(isset($data['products']) && count($data['products'])>0)
                        @foreach($data['products'] as $product)

                    <div class="col-md-3 col-sm-6">
                        <a href="{{ route('frontend.product.detail',$product->slug) }}"><img src="{{ $product->image('300_300') }}" alt=""></a>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--====== award section  end ======-->

@endsection
