<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<!-- Favicons -->
<link rel="apple-touch-icon" href="{{ url('png/apple-icon.png') }}">
<link rel="icon" href="{{ url('png/favicon.png') }}">

<title>

    Material Dashboard by Creative Tim

</title>


<!--  Social tags      -->
<meta name="keywords" content="">

<meta name="description" content="">
 
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="{{ url('trainer/css/font-awesome.min.css') }}" />


<link rel="stylesheet" href="{{ url('trainer/css/material-dashboard.min790f.css?v=2.0.1') }}">




<!-- Documentation extras -->


<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ url('trainer/css/demo.css" rel="stylesheet') }}"/>

<!-- iframe removal -->



  <script type="text/javascript">
    if (document.readyState === 'complete') {
        if (window.location != window.parent.location) {
          const elements = document.getElementsByClassName("iframe-extern");
          while (elemnts.lenght > 0) elements[0].remove();
            // $(".iframe-extern").remove();
        }
    };
  </script>




       </head>

      <body >
         <div class="wrapper">
            <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ url('trainer/jpg/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="https://www.creative-tim.com/" class="simple-text logo-mini">
             CT
        </a>

        <a href="https://www.creative-tim.com/" class="simple-text logo-normal">
             Creative Tim
        </a>

    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ url('trainer/jpg/avatar.jpg') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                       Tania Andrew
                      <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> MP </span>
                              <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> EP </span>
                              <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                              <span class="sidebar-mini"> S </span>
                              <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">

            <li class="nav-item active ">
                <a class="nav-link" href="dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                    <i class="fa fa-graduation-cap"></i>
                    <p> Courses
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('trainercourses') }}">
                              <span class="sidebar-mini"> M </span>
                              <span class="sidebar-normal"> My Courses </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('traineraddcourse') }}">
                              <span class="sidebar-mini"> A </span>
                              <span class="sidebar-normal"> Add Course </span>
                            </a>
                        </li>
                         
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p> Components
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="buttons.html">
                              <span class="sidebar-mini"> B </span>
                              <span class="sidebar-normal"> Buttons </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="grid.html">
                              <span class="sidebar-mini"> GS </span>
                              <span class="sidebar-normal"> Grid System </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="panels.html">
                              <span class="sidebar-mini"> P </span>
                              <span class="sidebar-normal"> Panels </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="sweet-alert.html">
                              <span class="sidebar-mini"> SA </span>
                              <span class="sidebar-normal"> Sweet Alert </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="notifications.html">
                              <span class="sidebar-mini"> N </span>
                              <span class="sidebar-normal"> Notifications </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="icons.html">
                              <span class="sidebar-mini"> I </span>
                              <span class="sidebar-normal"> Icons </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="typography.html">
                              <span class="sidebar-mini"> T </span>
                              <span class="sidebar-normal"> Typography </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p> Forms
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="regular.html">
                              <span class="sidebar-mini"> RF </span>
                              <span class="sidebar-normal"> Regular Forms </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="extended.html">
                              <span class="sidebar-mini"> EF </span>
                              <span class="sidebar-normal"> Extended Forms </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="validation.html">
                              <span class="sidebar-mini"> VF </span>
                              <span class="sidebar-normal"> Validation Forms </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="wizard.html">
                              <span class="sidebar-mini"> W </span>
                              <span class="sidebar-normal"> Wizard </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p> Tables
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="regular-2.html">
                                <span class="sidebar-mini"> RT </span>
                                <span class="sidebar-normal"> Regular Tables </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="extended-2.html">
                              <span class="sidebar-mini"> ET </span>
                              <span class="sidebar-normal"> Extended Tables </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="datatables.net.html">
                              <span class="sidebar-mini"> DT </span>
                              <span class="sidebar-normal"> DataTables.net </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">place</i>
                    <p> Maps
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="google.html">
                              <span class="sidebar-mini"> GM </span>
                              <span class="sidebar-normal"> Google Maps </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="fullscreen.html">
                              <span class="sidebar-mini"> FSM </span>
                              <span class="sidebar-normal"> Full Screen Map </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="vector.html">
                              <span class="sidebar-mini"> VM </span>
                              <span class="sidebar-normal"> Vector Map </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="widgets.html">
                    <i class="material-icons">widgets</i>
                    <p> Widgets </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="charts.html">
                    <i class="material-icons">timeline</i>
                    <p> Charts </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="calendar.html">
                    <i class="material-icons">date_range</i>
                    <p> Calendar </p>
                </a>
            </li>

        </ul>
    </div>
</div>


            <div class="main-panel">
                <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
	<div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize">
        <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
        </button>
      </div>
			<a class="navbar-brand" href="#pablo">Dashboard</a>
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
			<span class="navbar-toggler-icon icon-bar"></span>
		</button>

	    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
          <div class="input-group no-border">
              <input type="text" value="" class="form-control" placeholder="Search...">
              <button type="submit" class="btn btn-white btn-round btn-just-icon">
                <i class="material-icons">search</i>
                <div class="ripple-container"></div>
              </button>
          </div>
      </form>

			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#pablo">
            <i class="material-icons">dashboard</i>
						<p>
              <span class="d-lg-none d-md-block">Stats</span>
            </p>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="https://creative-tim.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
						<p>
							<span class="d-lg-none d-md-block">Some Actions<b class="caret"></b></span>
						</p>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Mike John responded to your email</a>
						<a class="dropdown-item" href="#">You have 5 new tasks</a>
						<a class="dropdown-item" href="#">You're now friend with Andrew</a>
						<a class="dropdown-item" href="#">Another Notification</a>
						<a class="dropdown-item" href="#">Another One</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="#pablo">
            <i class="material-icons">person</i>
					  <p>
              <span class="d-lg-none d-md-block">Account</span>
            </p>
					</a>
				</li>
			</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    @yield('content')
  </div>
</div>
<footer class="footer ">
  <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com/">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="https://presentation.creative-tim.com/">
                       About Us
                    </a>
                </li>
                <li>
                    <a href="https://blog.creative-tim.com/">
                       Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="material-icons">favorite</i> by <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>



</footer>


            </div>
        </div>



<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			      <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="ml-auto mr-auto">
                      <span class="badge filter badge-purple" data-color="purple"></span>
                      <span class="badge filter badge-azure" data-color="azure"></span>
                      <span class="badge filter badge-green" data-color="green"></span>
                      <span class="badge filter badge-orange" data-color="orange"></span>
                      <span class="badge filter badge-danger" data-color="danger"></span>
                      <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="header-title">Sidebar Background</li>
              <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger background-color">
                      <div class="ml-auto mr-auto">
                          <span class="badge filter badge-white" data-color="white"></span>
                          <span class="badge filter badge-black active" data-color="black"></span>
                      </div>
                      <div class="clearfix"></div>
                  </a>
              </li>

            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="ml-auto">
                      <div class="togglebutton switch-sidebar-mini">
                        <label>
                            <input type="checkbox">
                                <span class="toggle"></span>
                        </label>
                      </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Images</p>
                    <label class="switch-mini ml-auto">
                      <div class="togglebutton switch-sidebar-image">
                        <label>
                            <input type="checkbox" checked="">
                              <span class="toggle"></span>
                        </label>
                      </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="header-title">Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ url('trainer/jpg/sidebar-1.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ url('trainer/jpg/sidebar-2.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ url('trainer/jpg/sidebar-3.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ url('trainer/jpg/sidebar-4.jpg') }}" alt="" />
                </a>
            </li>

             
  
        </ul>
    </div>
</div>


    </body>

    <!--   Core JS Files   -->
<script src="{{ url('trainer/js/jquery.min.js') }}"></script>
<script src="{{ url('trainer/js/popper.min.js') }}"></script>


<script src="{{ url('trainer/js/bootstrap-material-design.min.js') }}"></script>


<script src="{{ url('trainer/js/perfect-scrollbar.jquery.min.js') }}"></script>



<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>


<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="{{ url('trainer/js/moment.min.js') }}"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{ url('trainer/js/bootstrap-datetimepicker.min.js') }}"></script>

<!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
<script src="{{ url('trainer/js/nouislider.min.js') }}"></script>



<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="{{ url('trainer/js/bootstrap-selectpicker.js') }}"></script>

<!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
<script src="{{ url('trainer/js/bootstrap-tagsinput.js') }}"></script>

<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ url('trainer/js/jasny-bootstrap.min.js') }}"></script>

<!-- Plugins for presentation and navigation  -->
<script src="{{ url('trainer/js/modernizr.js') }}"></script>




<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->

<script src="{{ url('trainer/js/material-dashboard790f.js') }}?v=2.0.1"></script>



<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="{{ url('trainer/js/core.js') }}"></script>

<!-- Library for adding dinamically elements -->
<script src="{{ url('trainer/js/arrive.min.js') }}" type="text/javascript"></script>

<!-- Forms Validations Plugin -->
<script src="{{ url('trainer/js/jquery.validate.min.js') }}"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{ url('trainer/js/chartist.min.js') }}"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ url('trainer/js/jquery.bootstrap-wizard.js') }}"></script>

<!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ url('trainer/js/bootstrap-notify.js') }}"></script>

<!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
<script src="{{ url('trainer/js/jquery-jvectormap.js') }}"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="{{ url('trainer/js/nouislider.min.js') }}"></script>

<!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="{{ url('trainer/js/jquery.select-bootstrap.js') }}"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{ url('trainer/js/jquery.datatables.js') }}"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="{{ url('trainer/js/sweetalert2.js') }}"></script>

<!-- Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ url('trainer/js/jasny-bootstrap.min.js') }}"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ url('trainer/js/fullcalendar.min.js') }}"></script>

<!-- demo init -->
<script src="{{ url('trainer/js/demo.js') }}"></script>





















  <script type="text/javascript">

$(document).ready(function(){

  //init wizard

  demo.initMaterialWizard();

  // Javascript method's body can be found in assets/js/demos.js
  demo.initDashboardPageCharts();

  demo.initCharts();

});

</script>










  <script type="text/javascript">
$(document).ready(function(){

  demo.initVectorMap();
});

</script>
















<!-- Sharrre libray -->
<script src="{{ url('trainer/js/jquery.sharrre.js') }}">

</script>
 
 
</html>
