@extends('layouts.app')

@section('content')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url(clark-street-merc.html);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <div class="brand">
                        <br>
                        <br>
                        <br>
                        <h2 class="title">{{ $course->course_name }}</h2>
                        <h4>{{ $course->course_overview }}</h4>
                        <br>
                        <a href="#" class="btn btn-rose btn-round btn-lg"> Buy Now  <i class="material-icons">shopping_cart</i></a>
                        <br>
                        <br>
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
            <li class="breadcrumb-item"><a href="/category/{{ $course->category->cat_slug }}">{{ $course->category->cat_name }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $course->course_name }}</li>
          </ol>
        </nav>
        <div class="section">

            <div class="container">
                <div class="row">

                    <div class="col-md-8 col-sm-12">
                         <iframe src="https://www.youtube.com/embed/rfscVS0vtbw" style="width:100%;height:400px;"></iframe>
                    </div>
                    <div class="col-md-4 col-sm-8">
                        <h2 class="title"> Becky Silk Blazer </h2>
                        <h3 class="main-price">$335</h3>
                        <div id="accordion" role="tablist">
                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Description
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Eres&apos; daring &apos;Grigri Fortune&apos; swimsuit has the fit and coverage of a bikini in a one-piece silhouette. This fuchsia style is crafted from the label&apos;s sculpting peau douce fabric and has flattering cutouts through the torso and back. Wear yours with mirrored sunglasses on vacation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Designer Information
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        An infusion of West Coast cool and New York attitude, Rebecca Minkoff is synonymous with It girl style. Minkoff burst on the fashion scene with her best-selling &apos;Morning After Bag&apos; and later expanded her offering with the Rebecca Minkoff Collection - a range of luxe city staples with a &quot;downtown romantic&quot; theme.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-collapse">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Details and Care
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li>Storm and midnight-blue stretch cotton-blend</li>
                                            <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single vent, internal pocket</li>
                                            <li>Two button fastening</li>
                                            <li>84% cotton, 14% nylon, 2% elastane</li>
                                            <li>Dry clean</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pick-size">
                            <div class="col-md-6 col-sm-6">
                                <label>Select color</label>
                                <select class="selectpicker" data-style="select-with-transition" data-size="7">
                                    <option value="1">Rose </option>
                                    <option value="2">Gray</option>
                                    <option value="3">White</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label>Select size</label>
                                <select class="selectpicker" data-style="select-with-transition" data-size="7">
                                    <option value="1">Small </option>
                                    <option value="2">Medium</option>
                                    <option value="3">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pull-right">
                            <button class="btn btn-rose btn-round">Add to Cart &#xA0;<i class="material-icons">shopping_cart</i></button>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card card-nav-tabs">
                                <div class="card-header card-header-primary">
                                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#description" data-toggle="tab">
                                                        <i class="material-icons">face</i> Description
                                                    </a>
                                                </li>
                                                <li class="nav-item ">
                                                    <a class="nav-link active" href="#table_of_contents" data-toggle="tab">
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
                                        <div class="tab-pane " id="description">
                                            {!! $course->course_details !!}
                                        </div>
                                        <div class="tab-pane active" id="table_of_contents">
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
                                                                        <td> {{ $lecture->lecture_name }} </td>
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
                                <div class="card card-blog">
                                    <div class="card-header card-header-image">
                                        <a href="#pablo">
                                            <img class="img" src="jpg/card-blog1.jpg">
                                            <div class="card-title">
                                                This Summer Will be Awesome
                                            </div>
                                        </a>
                                    <div class="colored-shadow" style="background-image: url(&quot;jpg/card-blog1.jpg&quot;); opacity: 1;"></div></div>
                                    <div class="card-body">
                                        <h6 class="card-category text-info">Fashion</h6>
                                        <p class="card-description">
                                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                        </p>
                                    </div>
                                </div>
                              <!--  < div class="card bg-info">
                                    <div class="card-body">
                                        <h5 class="card-category card-category-social">
                                            <i class="fa fa-twitter"></i> Twitter
                                        </h5>
                                        <h4 class="card-title">
                                            <a href="#pablo">"You Don't Have to Sacrifice Joy to Build a Fabulous Business and Life"</a>
                                        </h4>
                                    </div>
                                    <div class="card-footer">
                                        <div class="author">
                                            <a href="#pablo">
                                                <img src="jpg/avatar.jpg" alt="..." class="avatar img-raised">
                                                <span>Tania Andrew</span>
                                            </a>
                                        </div>
                                        <div class="stats ml-auto">
                                            <i class="material-icons">favorite</i> 2.4K ·
                                            <i class="material-icons">share</i> 45
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            
                        </div>
                </div>

</div>
</div>
</div>









@endsection