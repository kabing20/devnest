@extends($theme_path.'.layouts.master_layout')

@section('content')


    <!--====== one product section  start ======-->
    <div class="first-top">

        <div class="flyer-download">
            <div class="container">


                <h4>{{ $data['row']->title }}</h4>
                <p>{!! $data['row']->short_description ?? '' !!}</p>
                    @if($data['row']->file != null)
                    <a href="{{ asset(str_replace('public','storage',$data['row']->file)) }}" download><i class="fas fa-cloud-download-alt"></i> Download Flyer</a>
                    @endif
            </div>
        </div>
    </div>

    <section class="one-product">
        <div class="container">

            <div class="second-description">
                <div class="first-row">
                    <div class="row">
                        <div class="col-md-4"><img src="{{ $data['row']->image('700_700') }}" alt=""></div>
                        <div class="col-md-8">
                            {!! $data['row']->description !!}
                        </div>
                    </div>
                </div>
                <div class="second-row">
                    <div class="row">
                        @if(isset($data['row']->images) && count($data['row']->images)>0)
                            @foreach($data['row']->images->take('4') as $image)
                        <div class="col-md-3"><a><img src="{{ $image->image('300_300') }}" alt=""></a></div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="third-similar">
                <div class="info-part">
                    <h4>SIMILAR CATEGORIES FOR YOU</h4>
                    <p>Jal Pipes and Fittings are manufactured with the state-of-art technology from Austria, Germany and Japan.</p>

                    <div class="third-slide" >


                        <div class="slidep1 row">
                            @if(isset($data['similar']) && count($data['similar'])>4)
                                @foreach($data['similar'] as $product)
                                    <div class="col-md-3"><a href="{{ route('frontend.product.detail',$product->slug) }}"><img src="{{ $product->image('300_300') }}" alt=""></a></div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== one product section  end ======-->

    @endsection
