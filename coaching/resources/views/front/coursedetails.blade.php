@extends('layouts.app')
@section('seo')
    @if(isset($course->seo_title))
    <title>{{ $course->seo->title }}</title>
    <meta name="keywords" content="{{ $course->seo->keyword }}">
    <meta name="description" content="{{ $course->seo->description }}">

    @else
    <title>{{ $course->category->cat_name }} - {{ $course->course_name }} </title>
    @endif

@endsection
@section('content')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(' {{ url('jpg/course1.jpg')  }} ');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <div class="brand">
                        <br>
                        <br>
                        <br>
                        <h2 class="title">{{ $course->course_name }}</h2>
                        <h5>{{ $course->course_overview }}</h5>
                        <br> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/course/{{ $course->category->cat_slug }}">{{ $course->category->cat_name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $course->course_name }}</li>
          </ol>
        </nav>
        <div class="clearfix"></div>
        <div class="section">

            <div class="container" id="iframe_parent">
                <div class="row">

                    <div class="col-md-8 col-sm-12" >
                            <br>
                        @if(count($course->sections) && count($course->sections[0]->videolectures))
                         <iframe src="{{ $course->sections[0]->videolectures[0]->video_link }}" id="iframe" style="width:100%;height:400px;"  allowfullscreen="allowfullscreen"
                            mozallowfullscreen="mozallowfullscreen" 
                            msallowfullscreen="msallowfullscreen" 
                            oallowfullscreen="oallowfullscreen" 
                            webkitallowfullscreen="webkitallowfullscreen" frameborder="0"></iframe>
                        @else
                            <h2 class="text text-center text-warning">Tutorials not available yet. </h2>
                        @endif
                        <div class="sharethis-inline-share-buttons"></div>

                    </div>
                    <div class="col-md-4 col-sm-8">
                        <div class="card card-pricing card-raised bg-rose">
                            <div class="card-body">
<!--                                 <h6 class="card-category text-info">Premium</h6>
 -->                                <!-- <h1 class="card-title">
                                    <small>$</small>89
                                    <small>/mo</small>
                                </h1> -->
                                <?php

                                    $fullstar = 0;
                                    $halfstar = 0;
                                    $blankstar = 5;
                                    $rating = 0;
                                    if($course->course_user_rated_count > 0)
                                    {

                                        $rating =  number_format($course->course_star_count/$course->course_user_rated_count,1);
                                        $fullstar = round($rating); 
                                        if($rating-$fullstar>0)
                                        {
                                            $halfstar = 1;
                                        }
                                    }
                                    
                                    $blankstar = $blankstar-($fullstar+$halfstar);
                                    $title = $rating." ratings out of ".$course->course_user_rated_count. " reviews";
                                    for($i=0;$i<$fullstar;$i++)
                                    {
                                        ?>
                                            <span class="fa fa-star star-checked" title="{{ $title }}">  </span>
                                        <?php
                                    }
                                    if($halfstar == 1)
                                    {
                                        ?>
                                            <span class="fa fa-star-half-o star-checked" title="{{ $title }}"></span>
                                        <?php
                                    }
                                    for($i=0;$i<$blankstar;$i++)
                                    {
                                        ?>
                                            <span class="fa fa-star" title="{{ $title }}"></span>
                                        <?php
                                    }

                                 ?>
                                <ul>
                                    <li> {{ $title }} </li>
                                    <li>
                                        <b>{{ $course->course_lecture_count }}</b> Lectures</li>
                                    <li>
                                        <b>{{$course->course_video_length}}</b> of video </li>
                                    <li>
                                        <b>{{$course->course_language}}</b> Language</li>
                                     
                                </ul>
                                <button class="btn btn-warning btn-round">Move to Wishlist <i class="material-icons">favorite</i></button>

                            </div>
                        </div>
                         @if(count($course->tags))
                            <center>
                            @foreach($course->tags as $tag)
                                <a href="/tags/{{ $tag->tag_slug }}" class="btn btn-warning btn-sm"> {{ $tag->tag_name }} </a>
                            @endforeach
                            </center>
                         @endif
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card card-nav-tabs">
                                <div class="card-header card-header-primary">
                                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active " href="#description" data-toggle="tab">
                                                        <i class="material-icons">face</i> Description
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link " href="#table_of_contents" data-toggle="tab">
                                                        <i class="material-icons">chat</i> Table Of Contents
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#prerequisites" data-toggle="tab">
                                                        <i class="material-icons">build</i> Prerequisites
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="tab-content text-justify">
                                        <div class="tab-pane active " id="description">
                                            {!! $course->course_details !!}
                                        </div>
                                        <div class="tab-pane " id="table_of_contents">
                                             @if(count($course->sections))
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <?php $i = 1 ; $j=1; ?>
                                                        @foreach($course->sections as $section)
                                                            @if(count($section->videolectures))
                                                                <tr class="bg-info white">
                                                                    <td colspan="2"> Section {{ $i++ }}: {{ $section->section_name }} </td>
                                                                </tr>
                                                                @foreach ($section->videolectures as $lecture)
                                                                    <tr>
                                                                        <td> {{ $j++ }} </td>
                                                                        <td><a href="#iframe_parent" onClick="showvideo('{{ $lecture->video_link }}');"> {{ $lecture->lecture_name }} <i class="material-icons pull-right text-primary">video_library</i></a>

                                                                        </td>

                                                                    </tr>
                                                                @endforeach
                                                            @endif

                                                        @endforeach  
                                                    </table>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="tab-pane" id="prerequisites">
                                            {!! $course->course_requirements !!}
                                        </div>
                                    </div>
                                </div>
                            </div>



                             
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="col-lg-12 col-md-12">
                                
                               
                            </div>
                            
                        </div>
                </div>

</div>
</div>
</div>
@endsection

@section('scriptdown')
    <script type="text/javascript">
        function showvideo(url)
        {
            url     =   url+"&autoplay=1&fs=1";
            $("#iframe").attr("src",url);
        }
    </script>  
@endsection