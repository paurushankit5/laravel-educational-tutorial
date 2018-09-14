@extends('layouts.app')
@section('banner')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(' {{ url('jpg/cat3.jpg')  }} ');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <div class="brand">
                        <br>
                        <br>
                        <br>
                        <h2 class="title">{{ $tag->tag_name }}</h2>
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
         <div class="section section-basic">
            @if (count($tag->courses))
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2 class="title text-center">Courses for {{ $tag->tag_name }}</h2>                           
                         </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($tag->courses as $course)
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
@endsection