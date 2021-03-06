<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        @if(Auth::user()->is('admin') || Auth::user()->is('manager') || Auth::user()->is('moderator'))
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/admin')}}">
                <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/employee')}}">
                    <span class="fa fa-user"> </span>
                    Employees
                    </a>
            </li>  
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/order')}}">
                <span class="fa fa-shopping-cart"></span>
                Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/customer')}}">
                <span class="fa fa-users"></span>
                Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/review')}}">
                <span class="fa fa-question"></span>
                Reviews
                </a>
            </li>
        </ul>
        @endif
        
        @if(Auth::user()->is('blogger'))
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span class="fa fa-copy text-danger"> Blogs Controll</span>
        </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/admin/blog')}}">
                    <span class="fa fa-paste"></span>
                    Blogs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/tag')}}">
                    <span class="fa fa-link"></span>
                    Tags
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/reply')}}">
                    <span class="fa fa-comments"></span>
                    Replies
                    </a>
                </li>
            </ul>
        @endif
        @if(Auth::user()->is('admin') || Auth::user()->is('manager') || Auth::user()->is('moderator'))
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span class="fa fa-shopping-basket text-danger"> E-commerce Controll</span> 
        </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/category')}}">
                    <span class="fa fa-plus-circle"></span>
                    Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/product')}}">
                    <span class="fa fa-plus-circle"></span>
                    Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/size')}}">
                    <span class="fa fa-link"></span>
                    Sizes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/color')}}">
                    <span class="fa fa-link"></span>
                    Colors
                    </a>
                </li>
            </ul>

        @endif
        @if(Auth::user()->is('admin') || Auth::user()->is('manager'))
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span class="fa fa-copy text-danger"> Main Pages</span>
        </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                    <span class="fa fa-home"></span>
                    Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/tag')}}">
                    <span class="fa fa-link"></span>
                    About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/reply')}}">
                    <span class="fa fa-comments"></span>
                    Contact Us
                    </a>
                </li>
            </ul>
        @endif
    </div>
</nav>