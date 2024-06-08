@extends($theme_path.'.layouts.master_layout')

@section('content')
    <section class="forget">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('static_asset/frontend/theme_one/images/scheme/scheme3.jpg') }}" alt="">
                </div>
                <div class="col-md-5">

                    <div class="user-form forget-pass">
                        <span class="small-title">Forgot Password ?</span>
                        <h2>Enter Email</h2>
                        <form id="emailResetForm" action="" method="POST">
                            <div class="form-group d-flex with-icon">
                                <input type="email" required="" placeholder="Email address" name="email" value="">
                                <span><i class="bi bi-phone"></i></span>
                            </div>
                            <div class="form-group">
                                <button>Reset password</button>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('frontend.login.index') }}">
                                    <button class="orange clear" type="button">Cancel</button>
                                </a>
                            </div>
                        </form>
                        <!-- <small><a href="#">Recover using Phone number instead</a></small> -->
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
