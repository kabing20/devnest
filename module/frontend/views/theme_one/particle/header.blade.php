
<div class="secondary-menu ">
    <div class="container">
        <ul>
            <li><a href="{{ route('frontend.blog.index') }}">News & Blogs</a></li>
            <li><a href="{{ route('frontend.event.index') }}">Events & Promotions</a></li>
            <li><a href="{{ route('frontend.award.index') }}">Awards & Achievements</a></li>
            <li><a href="{{ route('frontend.gallery.index') }}">Gallery</a></li>
            <li>
                @if(isset($profile['parent_company_logo']))
                <img src="{{ $profile['parent_company_logo'] }}" alt="">
                @endif
            </li>
        </ul>
    </div>

</div>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark " >
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ route('frontend.home.index') }}" >
            @if(isset($profile['logo']))
            <img src="{{ $profile['logo'] }}" class="logo" alt="">
            @endif
        </a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- Links -->
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item{{ Request::is('/')?"  active-item":"" }}">
                    <a class="nav-link" href="{{ route('frontend.home.index') }}">Home

                    </a>
                </li>
                <li class="nav-item{{ Request::is('about-us')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.about_us.index') }}">About Us</a>
                </li>
                <li class="nav-item{{ Request::is('product*')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.product.index') }}">Our Products</a>
                </li>
                <li class="nav-item{{ Request::is('scheme')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.scheme.index') }}">Schemes</a>
                </li>
                <li class="nav-item{{ Request::is('technicle')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.technical_data.index') }}">Technical Data</a>
                </li>


                <li class="nav-item{{ Request::is('contact-us')?"  active-item":"" }} ">
                    <a class="nav-link" href="{{ route('frontend.contact_us.index') }}">Contact Us</a>
                </li>


                    @if(Auth::check())
                    <li class="nav-item last-item">

                     <form action="{{ route('frontend.logout.post') }}" method="post" id="logoutform">@csrf</form>
                    <a class="nav-link hover-btn" onclick="$('#logoutform').submit()">Agent / Partner Logout</a>
                </li>
                    @else
                    <li class="nav-item last-item">
                    <a class="nav-link hover-btn" href="{{ route('frontend.register.index') }}">Agent / Partner Login</a>
                </li>
                    @endif



            </ul>
            <!-- Links -->

        </div>
    </div>
</nav>
<!--/.Navbar-->
