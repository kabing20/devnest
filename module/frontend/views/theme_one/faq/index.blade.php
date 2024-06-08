@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container"><h4>FAQ</h4></div>

    </div>

    <section class="faq">
        <div class="container wow  fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
            <div class="title"><h4>Frequently Asked Questions</h4></div>
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                @if(isset($data['faq']) && count($data['faq'])>0)
                    @foreach($data['faq'] as $key => $faq)
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header " role="tab" id="headingOne{{ $faq->id }}" style="background-color:none !important;">
                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{ $faq->id }}" aria-expanded="true"
                           aria-controls="collapseOne{{ $faq->id }}">
                            <h5 class="mb-0">
                                <div class="float-left"><span>  Q {{ $key+1 }}:</span>
                                </div>
                                <div class="overflow-hidden"> {{ $faq->title }} </div>
                                <div class="dropdown-icon"><i class="fas fa-angle-down rotate-icon"></i></div>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne{{ $faq->id }}" class="collapse{{ $key == 1?' show':'' }}" role="tabpanel" aria-labelledby="headingOne{{ $faq->id }}"
                         data-parent="#accordionEx">
                        <div class="card-body">
                            {!! $faq->description !!}
                        </div>
                    </div>

                </div>
                    @endforeach
                    @endif

            </div>

        </div>
    </section>
@endsection
