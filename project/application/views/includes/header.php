

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
                            <li class="active"><a href="<?php echo site_url('/') ?>" class="nav-link">Home</a></li>
                            <li class="has-children">
                                <a href="blog.html" class="nav-link">Provider</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('professionals/professionalslogin') ?>" class="nav-link">Login</a></li>
                                    <li><a href="<?php echo site_url('professionals/professionalssignup') ?>" class="nav-link">Signup</a></li>
                                </ul>
                            </li>
                              <li class="has-children">
                                <a href="blog.html" class="nav-link">Customers</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo site_url('/login') ?>" class="nav-link">Login</a></li>
                                    <li><a href="<?php echo site_url('/homepage/signup') ?>" class="nav-link">Signup</a></li>
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
</div>