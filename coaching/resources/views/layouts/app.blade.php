<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="png/apple-icon.png">
    <link rel="icon" href="{{ asset('png/favicon.png') }}">
    @yield('seo')
     
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/material-kit.mine8da.css?v=2.0.3') }}">
 
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/vertical-nav.css') }}" rel="stylesheet" />
   
   
</head>
<body class="sections-page  section-white ">
     @include('front.includes.header')
     @yield('banner')
     @yield('content')
   

    
    
    <footer class="footer footer-white footer-big">
                        <div class="container">
                            <hr>
                            <div class="content">
                                <div class="row">

                                    <div class="col-md-3">
                                        <a href="#pablo">
                                            <h5>Material Kit PRO</h5>
                                        </a>
                                        <p>Probably the best UI Kit in the world! We know you've been waiting for it, so don't be shy!</p>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>About</h5>
                                        <ul class="links-vertical">
                                            <li>
                                                <a href="#pablo">
                                                    Blog
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    About Us
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Presentation
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pablo">
                                                    Contact Us
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>Our Categories</h5>
                                        <ul class="links-vertical">
                                            @if(count($cat_navbar))                                                 
                                                @foreach($cat_navbar as $c_nav)
                                                    <li>
                                                        <a href="/course/{{ $c_nav->cat_name }} ">
                                                            {{ $c_nav->cat_name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                            
                                        </ul>
                                    </div>
                                     
                                    <div class="col-md-3">
                                        <h5>Subscribe to Newsletter</h5>
                                        <p>
                                            Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                                        </p>
                                        <form class="form form-newsletter" method="" action="#">
                                            <div class="form-group bmd-form-group">
                                                <input type="email" class="form-control" placeholder="Your Email...">
                                            </div>
                                            <button type="button" class="btn btn-primary btn-just-icon" name="button">
                                                <i class="material-icons">mail</i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <ul class="social-buttons">
                                <li>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-youtube">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="copyright pull-center">
                                Copyright ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>2018 Creative Tim All Rights Reserved.
                            </div>
                        </div>
                    </footer>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-material-design.min.js') }}"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <!--    Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <!--    Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('js/bootstrap-selectpicker.js') }}"></script>
    <!--    Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
    <script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
    <!--    Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    <!--    Plugin for Small Gallery in Product Page -->
    <script src="{{ asset('js/jquery.flexisel.js') }}"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/vertical-nav.js') }}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{ asset('js/material-kit.mine8da.js?v=2.0.3') }}"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="{{ asset('js/material-kit-demo.js') }}"></script>
    @yield('scriptdown')
    
</body>


</html>
