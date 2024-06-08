@extends($theme_path.'.layouts.master_layout')

@section('content')

    <div class="banner-part">
        <img src="{{ asset('static_asset/frontend/theme_one/images/about/ban.jpg') }}" alt="">
        <div class="container">  <h4>Register</h4></div>

    </div>

    <!-- login section -->
    <section class="py-5 login-section">
        <div class="profile profile-login">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 wow fadeInLeft animated" data-wow-offset="0" data-wow-delay="300ms">


                        <img class="img-fluid signin-img" src="{{ asset('static_asset/frontend/theme_one/images/scheme/scheme3.jpg') }}">


                    </div>
                    <div class="col-xl-5 col-lg-5 wow fadeInRight animated" data-wow-offset="0" data-wow-delay="300ms">
                        <div class=" pl-3 pr-3">
                            <div class=" px-35 ">
                                <h2 class="strong-700 sigin-text" >Register</h2>

                            </div>

                            <div class="pt-2">
                                <div>
                                    <form class="form-default sigin-form" role="form" action="{{ route('frontend.create.user') }}" method="POST">

                                      @csrf
                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="text" class="form-control signin-input " placeholder="Enter First Name" name="firstname" id="firstname" value = "{{old('firstname')}}" required>
                                            </div>
                                            @if($errors->has('firstname'))
                                            <div class="form-error-message">{{ $errors->first('firstname') }}</div>
                                        @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="text" class="form-control signin-input " placeholder="Enter Last Name" name="lastname" id="lastname" value = "{{old('lastname')}}" required>

                                            </div>
                                            @if($errors->has('lastname'))
                                            <div class="form-error-message">{{ $errors->first('lastname') }}</div>
                                        @endif
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group ">


                                                <select name="user_type" class="form-control" id="cars" placeholder = "Select User Type" required>
                                                    <option  disabled selected>Select User Type</option>
                                                    <option value="Distributor">Distributor</option>
                                                    <option value="Dealer">Dealer</option>
                                                    <option value="Plumber">Plumber</option>
                                                    <option value="Partner">Partner</option>
                                                  </select>
                                            </div>
                                            @if($errors->has('user_type'))
                                                <div class="form-error-message">{{ $errors->first('user_type') }}</div>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="text" class="form-control signin-input " placeholder="Enter Address" name="address" id="address" value = "{{old('address')}}" required>

                                            </div>
                                            @if($errors->has('address'))
                                                <div class="form-error-message">{{ $errors->first('address') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="number" class="form-control signin-input " placeholder="Enter Phone Number" name="phone-no" id="number" value = "{{old('phone-no')}}" required>
                                            </div>
                                            @if($errors->has('title'))
                                            <div class="form-error-message">{{ $errors->first('phon-no') }}</div>
                                        @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input class="form-control sigin-input" value="" placeholder=" E-mail" name="email" value = "{{old('email')}}" required>
                                            </div>
                                            @if($errors->has('email'))
                                                <div class="form-error-message">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="password" class="form-control signin-input " placeholder="Password" name="password" id="r-password">
                                            </div>
                                            @if($errors->has('password'))
                                                <div class="form-error-message">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group ">
                                                <input type="password" class="form-control signin-input " placeholder="Retype Password" name="password_confirmation" id="re-password">

                                            </div>

                                        </div>




                                        <div>
                                            <button type="submit" class=" signin-btn w-100"> Submit
                                            </button>
                                        </div>
                                    </form>
                                    {{-- <div class="or or--1 mt-3 text-center">
                                        <span class="or">or</span>
                                    </div> --}}
                                    {{-- <div class="other1">
                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-styled btn-block btn-facebook btn-icon--2 btn-icon-left px-4 mb-3 social-link">
                                                <img src="{{ asset('static_asset/frontend/theme_one/images/icons/face.png') }}" alt="" class="fb-btn"> Facebook
                                            </a></div>

                                        <div>
                                            <a href="javascript:void(0)" class="btn btn-styled btn-block btn-google btn-icon--2 btn-icon-left px-4 mb-3 social-link">
                                                <img src="{{ asset('static_asset/frontend/theme_one/images/icons/google.png') }}" alt="" class="google-btn"> Google
                                            </a></div>

                                    </div> --}}
                                </div>
                            </div>
                            <div class="border-div"></div>
                            {{-- <div class="text-left px-35 pb-3">
                                <p class="make-account">
                                    You do have an account ?  <a href="{{ route('frontend.login.index') }}" class="strong-600 register-link">Login </a>
                                </p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
