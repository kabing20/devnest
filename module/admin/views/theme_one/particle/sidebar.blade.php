<li class="nav-item">
    <a href="{{ route('admin.dashboard.index') }}" class="nav-link{{ Request::is('admin/dashboard')?' active':'' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

{{--<li class="nav-item{{ Request::is('language*')?' menu-open':'' }}">--}}
{{--    <a href="#" class="nav-link{{ Request::is('language*')?' active':'' }}">--}}
{{--        <i class="nav-icon fas fa-flag"></i>--}}
{{--        <p>--}}
{{--            Language--}}
{{--            <i class="right fas fa-angle-left"></i>--}}
{{--        </p>--}}
{{--    </a>--}}
{{--    <ul class="nav nav-treeview">--}}
{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('admin.language.index') }}" class="nav-link{{ Request::is('language')?' active':'' }}">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>List</p>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('admin.language.create') }}" class="nav-link{{ Request::is('language/create')?' active':'' }}">--}}
{{--                <i class="far fa-circle nav-icon"></i>--}}
{{--                <p>Create</p>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</li>--}}

<li class="nav-item{{ Request::is('admin/blog*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/blog*')?' active':'' }}">
        <i class="nav-icon fas fa-blog"></i>
        <p>
            Blog
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.blogcategory.index') }}"
               class="nav-link{{ Request::is('admin/blogcategory')?' active':'' }}">
                <i class="far fa-circle nav-book"></i>
                <p>Category</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.blog.index') }}" class="nav-link{{ Request::is('admin/blog')?' active':'' }}">
                <i class="far fa-circle nav-bar"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.blog.create') }}" class="nav-link{{ Request::is('admin/blog/create')?' active':'' }}">
                <i class="far fa-circle nav-bar"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item{{ Request::is('admin/product*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/product*')?' active':'' }}">
        <i class="nav-icon fas fa-receipt"></i>
        <p>
            Product
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        {{-- <li class="nav-item">
            <a href="{{ route('admin.productcategory.index') }}"
               class="nav-link{{ Request::is('productcategory')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li> --}}
        <li class="nav-item">
            <a href="{{ route('admin.productcategory.create') }}"
               class="nav-link{{ Request::is('admin/productcategory/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Category</p>
            </a>
        </li>

            <li class="nav-item">
                <a href="{{ route('admin.product.index') }}" class="nav-link{{ Request::is('admin/product')?' active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.product.create') }}"
                   class="nav-link{{ Request::is('admin/product/create')?' active':'' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create</p>
                </a>
            </li>

    </ul>
</li>


{{-- <li class="nav-item{{ Request::is('product*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('product*')?' active':'' }}">
        <i class="nav-icon fas fa-folder"></i>
        <p>
            Product
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>

</li> --}}


<li class="nav-item{{ Request::is('admin/event*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/event*')?' active':'' }}">
        <i class="nav-icon fas fa-calendar"></i>
        <p>
            Event
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.eventcategory.index') }}"
               class="nav-link{{ Request::is('admin/eventcategory')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Category</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.event.index') }}" class="nav-link{{ Request::is('admin/event')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.event.create') }}" class="nav-link{{ Request::is('admin/event/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item{{ Request::is('homeslider*')?' menu-open':'' }}">
<a href="{{ route('admin.homeslider.index') }}" class="nav-link{{ Request::is('admin/homeslider*')?' active':'' }}">
    <i class="nav-icon fas fa-home"></i>
    <p>
        HomeSlider

    </p>
</a>

</li>



<li class="nav-item{{ Request::is('admin/award*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/award*')?' active':'' }}">
        <i class="nav-icon fas fa-award"></i>
        <p>
            Award
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.award.index') }}" class="nav-link{{ Request::is('admin/award')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.award.create') }}" class="nav-link{{ Request::is('admin/award/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item{{ Request::is('admin/faq*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/faq*')?' active':'' }}">
        <i class="nav-icon fas fa-question"></i>
        <p>
            Faq
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.faq.index') }}" class="nav-link{{ Request::is('admin/faq')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.faq.create') }}" class="nav-link{{ Request::is('admin/faq/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item{{ Request::is('admin/scheme*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/scheme*')?' active':'' }}">
        <i class="nav-icon fas fa-equals"></i>
        <p>
            Scheme
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.scheme.index') }}" class="nav-link{{ Request::is('admin/scheme')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.scheme.create') }}"
               class="nav-link{{ Request::is('admin/scheme/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item{{ Request::is('admin/gallery*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/gallery*')?' active':'' }}">
        <i class="nav-icon fas fa-images"></i>
        <p>
            Gallery
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.gallery.index') }}" class="nav-link{{ Request::is('admin/gallery')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.gallery.create') }}"
               class="nav-link{{ Request::is('admin/gallery/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item{{ (Request::is('admin/techinicaldata/*')  || Request::is('admin/technicaldatafile') || Request::is('admin/technicaldatafile/*') || Request::is('admin/technicaldataimage') || Request::is('admin/technicaldataimage/*'))?' menu-open':'' }}">
    <a href="#" class="nav-link{{ (Request::is('admin/techinicaldata/*')  ||  Request::is('admin/technicaldatafile') || Request::is('admin/technicaldatafile/*') ||  Request::is('admin/technicaldataimage') || Request::is('admin/technicaldataimage/*'))?' active':'' }}">
        <i class="nav-icon fas fa-tasks"></i>
        <p>
            Technical Data
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.techinicaldata.create') }}"
               class="nav-link{{ Request::is('admin/techinicaldata/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Description</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.technicaldatafile.index') }}"
               class="nav-link{{ Request::is('admin/technicaldatafile')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Files</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.technicaldataimage.index') }}"
               class="nav-link{{ Request::is('admin/technicaldataimage')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Images</p>
            </a>
        </li>


    </ul>
</li>


<li class="nav-item{{ Request::is('admin/affilation*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/affilation*')?' active':'' }}">
        <i class="nav-icon fas fa-at"></i>
        <p>
            Affilation
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.affilation.index') }}"
               class="nav-link{{ Request::is('admin/affilation')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.affilation.create') }}"
               class="nav-link{{ Request::is('admin/affilation/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item{{ Request::is('admin/generalsetting*')?' menu-open':'' }}">
    <a href="{{ route('admin.generalsetting.index') }}"
       class="nav-link{{ Request::is('admin/generalsetting*')?' active':'' }}">
        <i class="nav-icon fas fa-cog"></i>
        <p>
            General Settings
        </p>
    </a>
</li>
<li class="nav-item{{ Request::is('admin/subscription*')?' menu-open':'' }}">
    <a href="{{ route('admin.subscription.index') }}"
       class="nav-link{{ Request::is('admin/subscription*')?' active':'' }}">
        <i class="nav-icon fas fa-print"></i>
        <p>
            Subscription
        </p>
    </a>
</li>

<li class="nav-item{{ Request::is('admin/contactus*')?' menu-open':'' }}">
    <a href="{{ route('admin.contactus.index') }}"
       class="nav-link{{ Request::is('admin/contactus*')?' active':'' }}">
        <i class="nav-icon fas fa-phone"></i>
        <p>
            Contact us
        </p>
    </a>
</li>



{{-- <li class="nav-item{{ Request::is('admin/aboutus*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/aboutus*')?' active':'' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
            About Us
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.aboutus.index') }}"
               class="nav-link{{ Request::is('admin/aboutus')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>aboutus</p>
            </a>
        </li>

    </ul>
</li> --}}


<li class="nav-item{{ Request::is('admin/user*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/user*')?' active':'' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
            User
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link{{ Request::is('admin/user')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item{{ Request::is('admin/aboutus*')?' menu-open':'' }}">
    <a href="{{ route('admin.aboutus.index') }}" class="nav-link{{ Request::is('admin/aboutus*')?' active':'' }}">
        <i class="nav-icon fas fa-font"></i>
        <p>
            About Us

        </p>
    </a>

    </li>


<li class="nav-item{{ Request::is('admin/testimonial*')?' menu-open':'' }}">
    <a href="{{ route('admin.testimonial.index') }}" class="nav-link{{ Request::is('admin/testimonial*')?' active':'' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Testimonial

        </p>
    </a>

</li>

<li class="nav-item{{ Request::is('admin/ourclient*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('admin/ourclient*')?' active':'' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Our CLient
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.ourclient.index') }}"
               class="nav-link{{ Request::is('admin/ourclient')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.ourclient.create') }}"
               class="nav-link{{ Request::is('admin/ourclient/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>



