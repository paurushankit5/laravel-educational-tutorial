@extends('layouts.app')
@section('banner')
    <div class="header-2">
        <div class="page-header header-filter" style="background-image: url(https://www.itakshila.com/images/exam_page/exam_banner_home.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h1 class="title"> You should work with us!</h1>
                        <h4>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h4>
                    </div>
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-raised card-form-horizontal">
                            <div class="card-body">
                                <form method="" action="#">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fa fa-graduation-cap fa-2x"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Type Course Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn btn-rose btn-block">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="main">
    <div class="section-space"></div>
        <div class="section section-basic">
            @if (count($newcourses))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2 class="title text-center">Our Latest Courses</h2>                           
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($newcourses as $course)
                    <div class="col-md-4">
                        <div class="card card-blog course-box">
                            <div class="card-header card-header-image">
                                <a href="/course/{{ $course->category->cat_slug }}/{{ $course->course_slug }}">
                                    <img src="{{ env('AWS_BUCKET_URL') }}/courses/{{ $course->course_image }}" alt="">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="/course/{{ $course->category->cat_slug }}/{{ $course->course_slug }}">
                                    <h6 class="card-category text-warning">{{ $course->course_name }}  </h6>
                                </a>
                                <p class="card-title course-overview text-justify">
                                    {{ substr($course->course_overview,0,240) }}
                                    @if(strlen($course->course_overview)>240)
                                        ...
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="container">
                <div class="title">
                    <h2>Basic Elements</h2>
                     
                </div>
            </div>
        </div>
        <div class="projects-2" id="projects-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h6 class="text-muted">Our work</h6>
                        <h2 class="title">Some of Our Awesome Products - 2</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
                        <div class="section-space"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <a href="https://www.creative-tim.com/product/material-kit" target="_blank">
                                <div class="card-header card-header-image">
                                    <img src="{{ url('jpg/opt_mk_thumbnailac92.jpg?1458052306') }}">
                                <div class="colored-shadow" style="background-image: url('https://www.itakshila.com/images/exam_page/exam_banner_home.jpg'); opacity: 1;"></div></div>
                            </a>
                            <div class="card-body ">
                                <a href="https://www.creative-tim.com/product/material-kit" target="_blank">
                                    <h4 class="card-title">Material Kit Free</h4>
                                </a>
                                <h6 class="card-category">Free UI Kit</h6>
                                <p class="card-description">
                                    Material Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Google's material design. It's a great pleasure to introduce to you the material concepts in an easy to use and beautiful set of components.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
                                <div class="card-header card-header-image">
                                    <img src="{{ url('jpg/opt_lbd_pro_thumbnailfc0d.jpg?1512732672') }}">
                                <div class="colored-shadow" style="background-image: url(&quot;jpg/opt_lbd_pro_thumbnailfc0d.jpg?1512732672&quot;); opacity: 1;"></div></div>
                            </a>
                            <div class="card-body ">
                                <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
                                    <h4 class="card-title">Light Bootstrap Dashboard</h4>
                                </a>
                                <h6 class="card-category">Premium Template</h6>
                                <p class="card-description">
                                    Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. Forget about boring dashboards and grab yourself a copy to kickstart new project!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-plain">
                            <a href="https://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
                                <div class="card-header card-header-image">
                                    <img src="{{ url('jpg/opt_gsdk_new_thumbnail.jpg') }}">
                                <div class="colored-shadow" style="background-image: url(&quot;jpg/opt_gsdk_new_thumbnail.jpg&quot;); opacity: 1;"></div></div>
                            </a>
                            <div class="card-body ">
                                <a href="https://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
                                    <h4 class="card-title">Get Shit Done Kit PRO</h4>
                                </a>
                                <h6 class="card-category">Premium UI Kit</h6>
                                <p class="card-description">
                                    Get Shit Done Kit Pro it's a Bootstrap Kit that comes with a huge number of customisable components. They are pixel perfect, light and easy to use and combine with other elements.
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="cd-section" >
            <div class="container">
             
               
               
                <!--     *********     FEATURES 4      *********      -->
                <div class="features-4">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Your life will be much easier</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-12 ml-auto">
                            <div class="info info-horizontal">
                                <div class="icon icon-info">
                                    <i class="material-icons">code</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">For Developers</h4>
                                    <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-danger">
                                    <i class="material-icons">format_paint</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">For Designers</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="phone-container">
                                <img src="{{ url('png/iphone2.png') }}">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 mr-auto">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">dashboard</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Bootstrap Grid</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-success">
                                    <i class="material-icons">view_carousel</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Example Pages Included</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--     *********    END FEATURES 4      *********      -->
            </div>
            
        </div>

        <div class="projects-1" id="projects-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Some of Our Awesome Products - 1</h2>
                            <ul class="nav nav-pills nav-pills-rose">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pill1" data-toggle="tab">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill2" data-toggle="tab">Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill3" data-toggle="tab">Development</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill3" data-toggle="tab">Productivity</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill3" data-toggle="tab">Web Design</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="pill1">
                                </div>
                                <div class="tab-pane" id="pill2">
                                </div>
                                <div class="tab-pane" id="pill3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-raised card-background" style="background-image: url('jpg/office2-2.jpg')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Productivity</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-danger btn-round">
                                        <i class="material-icons">content_copy</i> View App
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-raised card-background" style="background-image: url('jpg/card-blog3.jpg')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Design</h6>
                                    <h3 class="card-title">The Sculpture Where Details Matter</h3>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-info btn-round">
                                        <i class="material-icons">build</i> View Project
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-raised card-background" style="background-image: url('jpg/card-project6.jpg')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Marketing</h6>
                                    <h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-warning btn-round">
                                        <i class="material-icons">subject</i> Case Study
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="team-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">The Executive Team 3</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('jpg/card-profile1-square.jpg') }}">
                                            </a>
                                        <div class="colored-shadow" style="background-image: url(&quot;jpg/card-profile1-square.jpg&quot;); opacity: 1;"></div></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Alec Thompson</h4>
                                            <h6 class="card-category text-muted">Founder</h6>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('jpg/card-profile6-square.jpg') }}">
                                            </a>
                                        <div class="colored-shadow" style="background-image: url(&quot;jpg/card-profile6-square.jpg&quot;); opacity: 1;"></div></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Kendall Andrew</h4>
                                            <h6 class="card-category text-muted">Graphic Designer</h6>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('jpg/card-profile4-square.jpg') }}">
                                            </a>
                                        <div class="colored-shadow" style="background-image: url(&quot;jpg/card-profile4-square.jpg&quot;); opacity: 1;"></div></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Gina Andrew</h4>
                                            <h6 class="card-category text-muted">Web Designer</h6>
                                            <p class="card-description">
                                                I love you like Kanye loves Kanye. Don't be scared of the truth.
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-youtube"><i class="fa fa-youtube-play"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ url('jpg/card-profile2-square.jpg') }}">
                                            </a>
                                        <div class="colored-shadow" style="background-image: url(&quot;jpg/card-profile2-square.jpg&quot;); opacity: 1;"></div></div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">George West</h4>
                                            <h6 class="card-category text-muted">Backend Hacker</h6>
                                            <p class="card-description">
                                                I love you like Kanye loves Kanye. Don't be scared of the truth.
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook-square"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="blogs-2" id="blogs-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title">Latest Blogposts 2</h2>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-plain card-blog">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img img-raised" src="{{ url('jpg/card-blog4.jpg') }}">
                                            </a>
                                        <div class="colored-shadow" style="background-image: url(&quot;jpg/card-blog4.jpg&quot;); opacity: 1;"></div></div>
                                        <div class="card-body">
                                            <h6 class="card-category text-info">Enterprise</h6>
                                            <h4 class="card-title">
                                                <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                            </h4>
                                            <p class="card-description">
                                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                                <a href="#pablo"> Read More </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-plain card-blog">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img img-raised" src="{{ url('jpg/blog5.jpg') }}">
                                            </a>
                                        <div class="colored-shadow" style="background-image: url(&quot;jpg/blog5.jpg&quot;); opacity: 1;"></div></div>
                                        <div class="card-body ">
                                            <h6 class="card-category text-success">
                                                Startups
                                            </h6>
                                            <h4 class="card-title">
                                                <a href="#pablo">Lyft launching cross-platform service this week</a>
                                            </h4>
                                            <p class="card-description">
                                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                                <a href="#pablo"> Read More </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-plain card-blog">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img img-raised" src="{{ url('jpg/blog7.jpg') }}">
                                            </a>
                                        <div class="colored-shadow" style="background-image: url(&quot;jpg/blog7.jpg&quot;); opacity: 1;"></div></div>
                                        <div class="card-body ">
                                            <h6 class="card-category text-danger">
                                                <i class="material-icons">trending_up</i> Enterprise
                                            </h6>
                                            <h4 class="card-title">
                                                <a href="#pablo">6 insights into the French Fashion landscape</a>
                                            </h4>
                                            <p class="card-description">
                                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                                <a href="#pablo"> Read More </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
        
    </div>
@endsection