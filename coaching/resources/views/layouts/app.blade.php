<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-kit-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 06:29:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="png/apple-icon.png">
    <link rel="icon" href="png/favicon.png">
    <title>
        Material Kit PRO by Creative Tim
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
    <!--  Social tags      -->
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/material-kit.mine8da.css?v=2.0.3') }}">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ url('css/demo.css') }}" rel="stylesheet" />
    <link href="{{ url('css/vertical-nav.css') }}" rel="stylesheet" />
    <!-- iframe removal -->
   
   
</head>

<body class="index-page "> 
    @include('front.includes.header')
    @yield('banner')
    @yield('content')
    <div class="clearfix"></div>
    <footer class="footer footer-white footer-big">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-2">
                        <h5>About Us</h5>
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
                    <div class="col-md-2">
                        <h5>Market</h5>
                        <ul class="links-vertical">
                            <li>
                                <a href="#pablo">
                                    Sales FAQ
                                </a>
                            </li>
                            <li>
                                <a href="#pablo">
                                    How to Register
                                </a>
                            </li>
                            <li>
                                <a href="#pablo">
                                    Sell Goods
                                </a>
                            </li>
                            <li>
                                <a href="#pablo">
                                    Receive Payment
                                </a>
                            </li>
                            <li>
                                <a href="#pablo">
                                    Transactions Issues
                                </a>
                            </li>
                            <li>
                                <a href="#pablo">
                                    Affiliates Program
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Social Feed</h5>
                        <div class="social-feed">
                            <div class="feed-line">
                                <i class="fa fa-twitter"></i>
                                <p>How to handle ethical disagreements with your clients.</p>
                            </div>
                            <div class="feed-line">
                                <i class="fa fa-twitter"></i>
                                <p>The tangible benefits of designing at 1x pixel density.</p>
                            </div>
                            <div class="feed-line">
                                <i class="fa fa-facebook-square"></i>
                                <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>Follow Us</h5>
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
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <h5>Numbers Don&apos;t Lie</h5>
                        <h4>14.521
                            <small>Freelancers</small>
                        </h4>
                        <h4>1.423.183
                            <small>Transactions</small>
                        </h4>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright pull-center">
                Copyright &#xA9;
                <script>
                    document.write(new Date().getFullYear())
                </script> Creative Tim All Rights Reserved.
            </div>
        </div>
    </footer>            

     

    <!--   Core JS Files   -->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap-material-design.min.js') }}"></script>
    <!--  Google Maps Plugin  -->
     <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="{{ url('js/moment.min.js') }}"></script>
    <!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ url('js/bootstrap-datetimepicker.min.js') }}"></script>
    <!--    Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
    <script src="{{ url('js/nouislider.min.js') }}"></script>
    <!--    Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ url('js/bootstrap-selectpicker.js') }}"></script>
    <!--    Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
    <script src="{{ url('js/bootstrap-tagsinput.js') }}"></script>
    <!--    Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ url('js/jasny-bootstrap.min.js') }}"></script>
    <!--    Plugin for Small Gallery in Product Page -->
    <script src="{{ url('js/jquery.flexisel.js') }}"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="{{ url('js/modernizr.js') }}"></script>
    <script src="{{ url('js/vertical-nav.js') }}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{ url('js/material-kit.mine8da.js?v=2.0.3') }}"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="{{ url('js/material-kit-demo.js') }}"></script>
    <script>
        $(document).ready(function() {

            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });
    </script>
    <!-- Sharrre libray -->
    <script src="{{ url('js/jquery.sharrre.js') }}">
    </script> 
    
</body>


<!-- Mirrored from demos.creative-tim.com/material-kit-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 06:29:52 GMT -->
</html>
