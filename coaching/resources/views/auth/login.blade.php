<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-kit-pro/examples/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 06:30:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="png/apple-icon.png">
    <link rel="icon" href="png/favicon.png">
    <title>
        Login Area
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
    
<!-- End Google Tag Manager -->
</head>

  <body class="login-page ">
 

    @include('front.includes.header')
    <div class="page-header header-filter" style=" background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <div class="card card-signup">
                        <form class="form" method="POST" action="{{ route('login') }}">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Log in</h4>
                                <div class="social-line">
                                    <!-- <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-twitter"></i>
                                    </a> -->
                                    <a href="{{ url('google-oauth2') }}" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
<!--                             <p class="description text-center">Or Be Classical</p>
 -->                            <div class="card-body">
                                <div class="input-group">
                                    {{ csrf_field() }}
                                    @if ($errors->has('email'))
                                        
                                        <div class="alert alert-danger">
                                            <div class="alert-icon">
                                                <i class="material-icons">error_outline</i>
                                            </div>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                            </button>
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email..." required  name="email" value="{{ old('email') }}">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password..." name="password" required>
                                </div>
                               
                            </div>
                            <div class="footer text-center">
                                <br>
                                <button type="submit" class="btn btn-rose">Login</button>
                                <br>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!--   Core JS Files   -->
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/popper.min.js') }}"></script>
    <script src="{{ url('js/bootstrap-material-design.min.js') }}"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
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
    <!-- Sharrre libray -->
    <script src="{{ url('js/jquery.sharrre.js') }}">
    </script>
    
</body>


<!-- Mirrored from demos.creative-tim.com/material-kit-pro/examples/login-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jun 2018 06:30:58 GMT -->
</html>
