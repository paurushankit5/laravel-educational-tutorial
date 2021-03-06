@extends('layouts.app')
@section('seo')
    <title>{{ $category->seo->title }}</title>
    <meta name="keywords" content="{{ $category->seo->keyword }}">
    <meta name="description" content="{{ $category->seo->description }}">

@endsection
@section('banner')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(' {{ url('jpg/cat3.jpg')  }} ');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <div class="brand">
                        <br>
                        <br>
                        <br>
                        <h2 class="title">{{ $category->cat_name }}</h2>
                         <div class="col-md-12 share-div">
                            <div class="sharethis-inline-share-buttons "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
@endsection
@section('content')
<div class="main">
    <nav aria-label="breadcrumb" role="navigation">
      <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        
        <li class="breadcrumb-item active" aria-current="page">{{ $category->cat_name }}</li>
      </ol>
    </nav>
    <div class="clearfix"></div>
        <div class="section section-basic">
            @if (count($category->courses))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2 class="title text-center">Courses in {{ $category->cat_name }}</h2>                           
                         </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($category->courses as $course)
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
        <div class="cd-section" id="testimonials">
            <!--     *********    TESTIMONIALS 1     *********      -->
            <div class="testimonials-1 section-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto text-justify">
                             <span class="description">{!! $category->cat_details !!}</span>
                        </div>
                    </div> 
                </div>
            </div>       
    </div>
@endsection