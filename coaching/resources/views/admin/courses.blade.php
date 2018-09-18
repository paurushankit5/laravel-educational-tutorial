@extends('layouts.admin')
@section('title')
  Courses
@endsection
@section('uppercss')
    <link rel="stylesheet" href="{{ url('admin1/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin1/bower_components/select2/dist/css/select2.min.css') }}">
    
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
      Courses
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Courses</li>
    </ol>
  </section>
@endsection
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- TO DO List -->
        <div class="box box-primary collapse" id="addCourseDiv">
          <div class="box-header">
            <i class="fa fa-graduation-cap"></i>

            <h3 class="box-title">Add Courses</h3>
        
          </div>
          <!-- /.box-header -->
          <div class="box-body">
               <form class="form-horizontal" method="post" action="/admin/storecourse" enctype="multipart/form-data">
               {{ csrf_field() }} 
                <div class="form-group">
                  <label class="control-label col-sm-2" for="course_name">Name*:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="course_name" name="course_name" required placeholder="Enter Course Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="cat_id">Category*:</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="cat_id" onchange="getsubcatdetails();"  required >
                      <option value="">Select Course Category</option>
                      @if (count($category) > 0)
                        @foreach ($category as $cat)
                          <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="subcat_id">Sub-Category*:</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="subcat_id" name="subcat_id" required >
                      <option value="">Select Sub-Category</option>                       
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="course_image">Image*:</label>
                  <div class="col-sm-10">
                    <input type="file" accept="image/*" required class="form-control" name="course_image" id="course_image">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Tags {{ count($tags) }} </label>
                  <div class="col-sm-10">
                    <select class="form-control select2" required multiple="multiple" name="tags[]" data-placeholder="Select Tags"
                            style="width: 100%;">
                      @if (count($tags) > 0)
                        @foreach ($tags as $ta)
                          <option value="{{ $ta->id }}">{{ $ta->tag_name }}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="course_language">Language*:</label>
                  <div class="col-sm-10">
                    <select class="form-control" id="course_language" name="course_language" required >
                      <option value="">Select Video Language</option>
                      @if (count($lang) > 0)
                        @foreach ($lang as $l)
                          <option>{{ $l->lang_name }}</option>
                        @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="course_overview">Overview*:</label>
                  <div class="col-sm-10">
                    <input type="text" required maxlength="300" class="form-control" id="course_overview" name="course_overview" placeholder="Enter Course Overview (Not more than 300 characters)">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="course_lecture_count">Lectures*:</label>
                  <div class="col-sm-10">
                    <input type="number" required maxlength="300" class="form-control" id="course_lecture_count" name="course_lecture_count" placeholder="10">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-sm-2" for="course_details">Details*:</label>
                  <div class="col-sm-10">                    
                    <textarea id="course_details" name="course_details" required placeholder="Enter Course Details" placeholder="Enter course details here"></textarea>                     
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="course_name">Prerequisites:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="course_requirements" id="course_requirements" placeholder="Enter Course Prerequisites"></textarea>
                  </div>
                </div>
                <h3 class="bg-primary text-center">SEO Section</h3>
                <div class="form-group">

                  <label class="control-label col-sm-2" for="title">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Page Title Here"/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="keyword">Keywords</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="keyword" id="keyword" placeholder="Enter Meta Keywords"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="description">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" placeholder="Enter Meta Description"></textarea>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary pull-right" >Submit</button>

              </form>
                          <div class="clearfix"></div>

              <hr>
           </div>
        </div>
         <div class="box box-primary">
          <div class="box-header">
            <i class="fa fa-graduation-cap"></i>

            <h3 class="box-title">Courses</h3>

            <div class="box-tools pull-right">
              <button class="btn btn-primary" data-toggle="collapse" data-target="#addCourseDiv"><i class="fa fa-plus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">            
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Courses</th>
                  <th>Category</th>
                   <th>Last Updated</th>
                 </tr>
              </thead>
              <tbody>
                @if (count($courses) > 0)
                  <?php 
                    $page=1;
                    if(isset($_GET['page']))
                    {
                      $page = $_GET['page']; 
                    }
                    $i = --$page*$limit;
                  ?>
                  @foreach ($courses as $course)
                    <tr>
                      <td> {{ ++$i }} </td>
                      <td> <a href="/admin/course/details/{{ $course['id'] }}">{{ $course['course_name'] }}</a> </td>
                      <td> {{ $course->category->cat_name }} </td>
                      <td> {{ \Carbon\Carbon::parse($course['updated_at'])->format('d/M/Y')}}</td>
                     
                    </tr>
                  @endforeach
                  <tr>
                    <td colspan="4"> {{ $courses->links() }} </td>
                  </tr>
                @endif
              </tbody>
            </table>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix no-border">
 
          </div>
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
    <!-- /.content -->

     
 



 
@endsection

@section('scriptdown')
  <script src="{{ url('admin1/bower_components/ckeditor/ckeditor.js') }}"></script>  
  <script src="{{ url('admin1/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ url('admin1/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('course_details');
       $('.select2').select2();
      //bootstrap WYSIHTML5 - text editor
      //$('.textarea').wysihtml5()
    });
    
    function getsubcatdetails(){
      var cat_id  =   $("#cat_id").val();
      $.ajax({
              type  :   "POST",
              url   :   "/admin/getsubcategory",
              data  :   {
                          "_token"      : "{{ csrf_token() }}",
                          "id"   : cat_id,
               },
              success : function(data){

                var i =0;
                var data  = data.slice(2,-1);
                //data       = data.slice(1);
                console.log(data);
                data = JSON.parse(data);
                $(data).each(function(i,val){
                  console.log(i);
                  console.log(val);
                });
                
              }
      }); 
    }
  </script>
@endsection