<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        @yield('description')
        <title>@yield('title')</title>
        <!-- Bootstrap v3.3.7 -->
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
        <!-- Font Awesome v4.7.0 -->
        <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
        @yield('style')
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('/assets/css/styles.min.css') }}">
        <link rel="shortcut icon" href="{{ asset('/assets/images/ico/favicon.png') }}">
    </head>

    <body>
        <!-- Header -->
        <header id="header">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-sm-5">
                            <ul class="social-media">
                                <li><a href="https://www.facebook.com/GuildGather-249992778800238/?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/guildgather/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC4FWbiw6GCz6V-5ZieHSlWQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul> <!-- /social-media -->
                        </div> <!-- /col-sm-5 -->
                        
                        <div class="col-sm-2">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('/assets/images/logo.png') }}">
                                </a>
                            </div> <!-- /logo -->
                        </div> <!-- /col-sm-2 -->

                        <div class="col-sm-5">
                            <ul class="menu">
                                <li><a href="{{ url('/#homepage-feature') }}">What is GuildGather?</a></li>
                                <!-- <li><a href="#">Article</a></li> -->
                                <li><a href="{{ url('/register') }}">Register your Username</a></li>
                            </ul>
                        </div> <!-- /col-sm-5 -->

                    </div> <!-- /row -->
                </div> <!-- /container-fluid -->
            </div> <!-- /header-top -->
        </header> <!-- /header -->

        <!-- Content -->
        <div class="content">
            @yield('content')
        </div> <!-- /content -->

        <!-- Footer -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="footer-logo">
                                <img src="{{ url('/assets/images/logo-full.png') }}" alt="GuildGather">
                            </div> <!-- /footer-logo -->
                        </div> <!-- /col-sm-3 -->

                        <div class="col-sm-3">
                            <ul class="footer-menu">
                                <li><b>Menu</b></li>
                                <li><a href="{{ url('/#homepage-feature') }}">About Us</a></li>
                                <!-- <li><a href="#">Article</a></li> -->
                                <li><a href="{{ url('/register') }}">Register</a></li>
                            </ul>
                        </div> <!-- /col-sm-3 -->

                        <div class="col-sm-3">
                            <ul class="footer-menu">
                                <li><b>Community Policies</b></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul> <!-- /footer-menu -->
                        </div> <!-- /col-sm-3 -->

                        <div class="col-sm-3">
                            <p><b>Connect with us</b></p>
                            <ul class="social-media">
                                <li><a href="https://www.facebook.com/GuildGather-249992778800238/?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/guildgather/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UC4FWbiw6GCz6V-5ZieHSlWQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul> <!-- /social-media -->
                        </div> <!-- /col-sm-3 -->

                    </div> <!-- /row -->
                </div> <!-- /container -->
            </div> <!-- /footer-top -->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="copyright">Copyright&copy; {{ date('Y') }} GuildGather All rights reserved</p>
                        <p class="contribute">Developed by Martin Yi | Designed by Martin Yi</p>
                    </div> <!-- /row -->
                </div> <!-- /container -->
            </div> <!-- /footer-bottom -->
        </footer> <!-- /footer -->

        <!-- jQuery v2.2.4 -->
        <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap v3.3.7 -->
        <script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>
        <!-- jQuery scrollUp -->
        <script type="text/javascript" src="{{ asset('/assets/js/jquery.scrollUp.min.js') }}"></script>
        @yield('script')
        <!-- Main JS -->
        <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>
        <!-- Analytics Javascript -->
    </body>
</html>