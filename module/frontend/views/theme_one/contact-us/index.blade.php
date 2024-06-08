@extends($theme_path.'.layouts.master_layout')

@section('content')
    <section class="contact-us">
        <div class="banner-part">
            <div class="container">
                <div class=" wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms"><span>CONTACT US</span></div>
            </div>
        </div>
        <div class="banner-second">
            <div class="container">
                <div class="row">
                    @if(isset($profile['location']))
                    <div class="col-md-4 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms"><img src="{{ asset('static_asset/frontend/theme_one/images/contact/map.png') }}" alt=""><span>{{ $profile['location'] }}</span></div>
                    @endif
                        @if(isset($profile['email']))
                    <div class="col-md-4 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms"><img src="{{ asset('static_asset/frontend/theme_one/images/contact/mail.png') }}" alt=""><span><a href="mailto:{{$profile['email'] ?? 'ranjan.themenepal@gmail.com'}}">{{ $profile['email'] }}</a></span></div>
                        @endif
                        @if(isset($profile['phone_number']))
                    <div class="col-md-4 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms"><img src="{{ asset('static_asset/frontend/theme_one/images/contact/phone.png') }}" alt=""><span><a href="tel:{{$profile['phone_number'] ?? ''}}">{{ $profile['phone_number'] }}</a></span></div>
                            @endif
                </div>
            </div>
        </div>
        <div class="form-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                        <form action="{{ route('frontend.contact_us.store') }}" method="post">
                            @csrf
                            <h4>MESSAGE US</h4>
                            <div class="form-group">

                                @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control" name="full_name" aria-describedby="emailHelp" placeholder="Full Name" value="{{ old('full_name') ?? '' }}">
                                @if($errors->has('full_name'))
                                <div class="form-error-message">{{ $errors->first('full_name') }}</div>
                              @endif
                            </div>
                            <div class="form-group">

                                <input type="number" class="form-control" name="phone_number" aria-describedby="emailHelp" placeholder="Phone Number" value="{{ old('phone_number') ?? '' }}">
                                @if($errors->has('phone_number'))
                                <div class="form-error-message">{{ $errors->first('phone_number') }}</div>
                            @endif
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Email" value="{{ old('email') ?? '' }}">
                                @if($errors->has('email'))
                                <div class="form-error-message">{{ $errors->first('email') }}</div>
                            @endif
                            </div>

                            <div class="form-group">
                                <textarea name="message" cols="30" rows="5" placeholder="Message" >{{ old('message') ?? '' }}</textarea>
                                @if($errors->has('message'))
                                <div class="form-error-message">{{ $errors->first('message') }}</div>
                            @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                    <div class="col-md-7 wow fadeInUp animated" data-wow-offset="0" data-wow-delay="300ms">
                        @if(isset($profile['google_map']))
                            {!! $profile['google_map'] !!}
                        @else
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28261.854287852984!2d85.32230873701337!3d27.69468349900166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1641886499229!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
