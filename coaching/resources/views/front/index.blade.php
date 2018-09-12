@extends('layouts.app')
@section('seo')
    <title>{{ $seo->title }}</title>
    <meta name="keywords" content="{{ $seo->keyword }}">
    <meta name="description" content="{{ $seo->description }}">

@endsection
@section('banner')
    <div class="header-2">
        <div class="page-header header-filter" style="background-image: url('{{ url('jpg/exam_banner_home.jpg') }}');">
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
         <div class="section section-basic">
            @if (count($newcourses))
            <div class="container">
                <h2 class="title text-center">Our Latest Courses</h2>                           
                <br>
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
        </div>
        <div class="projects-2" id="projects-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                         <h2 class="title">Some of our Categories</h2>
                         
                    </div>
                </div>
                <div class="row">
                    @if(count($cat_navbar))                                                 
                        @foreach($cat_navbar as $c_nav)
                            <div class="col-md-4">
                                <div class="card card-plain">
                                    <a href="/course/{{ $c_nav->cat_slug }}">
                                        <div class="card-header card-header-image">
                                            <img src="{{ env('AWS_BUCKET_URL') }}/category/{{ $c_nav->cat_image }}">
                                            <div class="colored-shadow" style="background-image: url('https://www.itakshila.com/images/exam_page/exam_banner_home.jpg'); opacity: 1;"></div>
                                        </div>
                                    </a>
                                    <div class="card-body ">
                                        <a href="/course/{{ $c_nav->cat_slug }}">
                                            <h4 class="card-title">{{ $c_nav->cat_name }}</h4>
                                        </a>
                                         <!-- <p class="card-description">
                                            Material Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Google's material design. It's a great pleasure to introduce to you the material concepts in an easy to use and beautiful set of components.
                                        </p> -->
                                    </div>
                                </div>
                            </div>        
                        @endforeach
                    @endif
                     
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

            

        
        
    </div>
@endsection