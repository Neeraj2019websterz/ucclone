

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-lg-2">
                    <h1 class="mb-0 site-logo"><a href="<?php echo site_url('/') ?>" class="mb-0">UC Clone</a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-lg-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                            <li class="has-children">
                                <a href="blog.html" class="nav-link">Services</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html" class="nav-link">Shifting Homes</a></li>
                                    <li><a href="blog.html" class="nav-link">Health & Wellness</a></li>
                                    <li><a href="blog.html" class="nav-link">Salon Service</a></li>
                                    <li><a href="blog.html" class="nav-link">Massage at home</a></li>
                                    <li><a href="blog.html" class="nav-link">Recommended Services</a></li>
                                </ul>
                            </li>
                            <li><a href="pricing.html" class="nav-link">Pricing</a></li>

                            <li class="has-children">
                                <a href="blog.html" class="nav-link">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html" class="nav-link">Blog</a></li>
                                    <li><a href="blog-single.html" class="nav-link">Blog Sigle</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('contact') ?>" class="nav-link">Contact</a></li>
                            <li class="has-children">
                                <a href="blog.html" class="nav-link">Login/SignUp</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('contact') ?>" class="nav-link">Login/SignUp as Customer</a></li>
                                    <li><a href="<?php echo site_url('contact') ?>" class="nav-link">Login/SignUp as Service Professional</a></li>                                    
                                </ul>
                            </li>                        
                        </ul>

                    </nav>
                </div>


                <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

                    <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
                       data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>

            </div>
        </div>

    </header>