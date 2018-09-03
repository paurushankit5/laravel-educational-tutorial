@extends('layouts.admin')
@section('title')
  Courses
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
               <form class="form-horizontal" name="editcategory" method="post" action="/admin/storecourse">
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
                    <select class="form-control" id="cat_id" name="cat_id" required >
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
                  <th>Actions</th>
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
                      <td> 
                        <button class="btn btn-warning" onClick="edit('{{ $course['id'] }}','{{ $course['course_name'] }}');"><i class="fa fa-pencil"></i></button> 
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button> 
                      </td>
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

     

    <!------------------------Edit category modal--------------------------->
    <div id="editcatmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Category</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" name="editcategory" method="post" action="/admin/updatetag">
               {{ csrf_field() }} 
              <div class="form-group">
                <label class="control-label col-sm-2" for="cat_name">Tag*:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="edit_tag_name" name="tag_name" required placeholder="Enter Category Name">
                  <input type="hidden" class="form-control" id="edit_id" name="id" required placeholder="Enter Category Name">
                </div>
              </div>
               
              <button type="submit" class="btn btn-primary pull-right" >Submit</button>

            </form>
            <div class="clearfix"></div>
          </div>
          <div class="modal-footer">
          </div>
         </div>

      </div>
    </div>
    <!------------------------add category modal--------------------------->
  <script type="text/javascript">
    function edit(id,tag_name){
      $("#edit_id").val(id);
      $("#edit_tag_name").val(tag_name); 
      $('#editcatmodal').modal('toggle');
    }
  </script>



 
@endsection

@section('scriptdown')
  <script src="{{ url('admin1/bower_components/ckeditor/ckeditor.js') }}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ url('admin1/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('course_details')
      //bootstrap WYSIHTML5 - text editor
      //$('.textarea').wysihtml5()
    })
  </script>
@endsection