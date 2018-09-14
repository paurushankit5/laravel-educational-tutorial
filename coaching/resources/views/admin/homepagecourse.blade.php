@extends('layouts.admin')
@section('title')
  Home Page Courses
@endsection
@section('uppercss')
	<link rel="stylesheet" href="{{ url('admin1/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin1/bower_components/select2/dist/css/select2.min.css') }}">

   <style type="text/css">
   	.draggable {
	    cursor: move; 
	}
   </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
	   /* $("#sortable").sortable({
			stop: function(event, ui) {
			  
			}
		});*/
  } );

  	
  </script>
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
      Courses
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Home Page Courses</li>
    </ol>
  </section>
@endsection
@section('content')
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- TO DO List -->
         
         <div class="box box-primary">
          <div class="box-header">
            <i class="fa fa-graduation-cap"></i>

            <h3 class="box-title">Home Page Courses</h3>
 			<div class="box-tools pull-right">
              	
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body"> 
          	 @if (count($courses) > 0)  
          	<form method="post" action="/admin/sethomepagecourse">
          		{{ csrf_field() }}
          		<div class="form-group">
          			<select class="form-control select2" required multiple="multiple" name="home_page_course[]" data-placeholder="Courses to be displayed on Home Page" style="width: 100%;">
	                 
	                    @foreach ($courses as $course)
	                      <option value="{{ $course->id }}">{{ $course->course_name }}</option>
	                    @endforeach
	                  
                	</select>
          		</div>
          		<div class="form-group">
          			<button type="submit" class="btn btn-primary">Submit</button>
          		</div>
          	</form>  
          	@endif   
          	@if(count($home_page_course))
	            <ul id="sortable" class="list-group">
	            	@foreach($home_page_course as $course)
				  		<li class="ui-state-default list-group-item draggable"  data-id="{{ $course->id }}" id="{{ $course->id }}">
                {{ $course->course_name }} 
                <a class="btn btn-danger btn-sm pull-right" onclick="remove('{{ $course->id }}');"><i class="fa fa-times"></i></a>
              </li>
				  	@endforeach
				</ul>
 			@endif
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix no-border">
 				<button class="btn btn-primary pull-right" id="save_changes">Save Changes</button>
          </div>
        </div>
        <!-- /.box -->
      </div>
    </div>

  </section>
    <!-- /.content -->

     
 



 
@endsection

@section('scriptdown')
   <script src="{{ url('admin1/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
   <script>
    $(function () {
          $('.select2').select2();
     });
      $("#save_changes").click(function(){
      	    var data1 = [];

  		$("#sortable li").each(function(i,val){
	    	/*console.log("position is "+ ++i);
		    console.log("id of the course is "+$(val).attr('data-id'));
	    	console.log("hello");*/
	    	data1[i]		= 	$(val).attr('data-id');
	    });
	    $.ajax({
	    	type	: 	"POST",
	    	url 	: 	"/admin/updatehomepagecourse",
	    	data    : 	{
              "_token"      : "{{ csrf_token() }}",
	    				"data1"		: 	data1
	    	},
	    	success	: 	function(data)
	    	{
	    		if (data == '1')
	    		{
	    			location.reload();
	    		}
	    	}
	    });
  	});
    function remove(id){
      var r = confirm("Are you sure, you eant to remove this from home page?");
      if(r){
        $.ajax({
        type  :   "POST",
        url   :   "/admin/removehomepagecourse",
        data    :   {
              "_token"      : "{{ csrf_token() }}",
              "id"          : id
        },
        success :   function(data)
        {
          if (data == '1')
          {
            $("#"+id).remove();
            $("#save_changes").click();
          }
        }
      });
    }
  }
  </script>
@endsection