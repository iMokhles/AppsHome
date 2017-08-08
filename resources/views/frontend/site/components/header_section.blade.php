{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: imokhles--}}
 {{--* Date: 06/08/2017--}}
 {{--* Time: 14:21--}}
 {{--*/--}}
<!-- Site Header -->
<header>
    <div class="container">
        <!-- Site Logo -->
        <a href="/" class="site-logo">
            <i class="gi gi-flash"></i> <strong>Apps</strong>Home
        </a>
        <!-- Site Logo -->

        <!-- Site Navigation -->
        <nav>
            <!-- Menu Toggle -->
            <!-- Toggles menu on small screens -->
            <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                <i class="fa fa-bars"></i>
            </a>
            <!-- END Menu Toggle -->

            <!-- Main Menu -->
            <ul class="site-nav">
                <!-- Toggles menu on small screens -->
                <li class="visible-xs visible-sm">
                    <a href="javascript:void(0)" class="site-menu-toggle text-center">
                        <i class="fa fa-times"></i>
                    </a>
                </li>
                <!-- END Menu Toggle -->
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/features">Features</a>
                </li>
                <li>
                    <a href="/pricing">Pricing</a>
                </li>
                <li>
                    <a href="/contact">Contact</a>
                </li>
                <li>
                    <a href="/about">About</a>
                </li>

                <li>
                    <a href="{{route('login_user_page')}}" class="btn btn-primary">Log In</a>
                </li>
                <li>
                    <a href="{{route('register_user_page')}}" class="btn btn-success">Sign Up</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="site-nav-sub"><i class="fa fa-angle-down site-nav-arrow"></i><i class="fa fa-language"></i> English</a>
                    <ul>
                        <li>
                            <a href="ecom_home.html"><i class="fa fa-language"></i> العربية</a>
                        </li>
                        <li>
                            <a href="ecom_search_results.html"><i class="fa fa-language"></i>  Francaise</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END Main Menu -->
        </nav>
        <!-- END Site Navigation -->
    </div>
</header>
<!-- END Site Header -->