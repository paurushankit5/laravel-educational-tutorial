@extends('layouts.admin')
@section('title')
  Course : {{ $course->course_name }}
  <style type="text/css">
  	td h5{
  		padding:0px;
  		font-size:40px;
  	}
  </style>
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
      Course Details
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/admin/courses"><i class="fa fa-graduation-cap"></i> Courses</a></li>
      <li class="active">{{ $course->course_name }}</li>
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
                
                          <div class="clearfix"></div>

              <hr>
           </div>
        </div>
         <div class="box box-primary">
          <div class="box-header">
            <i class="fa fa-graduation-cap"></i>

            <h3 class="box-title">{{ $course->course_name }}</h3>

            <div class="box-tools pull-right">
              <button class="btn btn-primary" data-toggle="collapse" data-target="#addCourseDiv"><i class="fa fa-plus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">            
			<table class="table table-responsive">
				<tr>
					<th> Name: </th>
					<td> {{ $course->course_name }} </td>
				</tr>
				<tr>
					<th> Overview: </th>
					<td> {{ $course->course_overview }} </td>
				</tr>
				<tr>
					<th> Language: </th>
					<td> {{ $course->course_language }} </td>
				</tr>
				<tr>
					<th> Lectures: </th>
					<td> {{ $course->course_lecture_count }} </td>
				</tr>
				<tr>
					<th> Video: </th>
					<td> {{ $course->course_video_length }} </td>
				</tr>
				<tr>
					<th> Added By: </th>
					<td> {{ $course->user->name }} on  {{ \Carbon\Carbon::parse($course['created_at'])->format('d/M/Y')}} </td>
				</tr>
				<tr class="bg-primary">
					<td colspan="2"><h5 class="text-center">Prerequisites</h3></td>
				</tr>
				<tr>
 					<td colspan="2"> {{ $course->course_requirements }} </td>
				</tr>
				<tr class="bg-primary">
					<td colspan="2"><h5 class="text-center">Details</h3></td>
				</tr>
				<tr>
					<td colspan="2">{!! $course->course_details !!}</td>
				</tr>
			</table>     
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix no-border">
 
          </div>
        </div>
        <div class="box box-primary">
          <div class="box-header">
            <i class="fa fa-graduation-cap"></i>

            <h3 class="box-title">Table Of Contents</h3>
        	<div class="box-tools pull-right">
              <button class="btn btn-primary" data-toggle="modal" data-target="#addsectionmodal"><i class="fa fa-plus"></i> Section</button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          	@if (count($course->sections))
          		<?php $i=1; ?>
          		<table class="table table-responsive">          			
          		@foreach ($course->sections as $section)
          			<tr class="bg bg-primary">
          				<td>Section {{ $i++ }}: {{ $section->section_name }}  <button class="btn btn-warning pull-right"><i class="fa fa-plus"></i> Lecture</button> </td>
          			</tr>
          		@endforeach
          		</table>

          	@endif
 			
          </div>
          <div class="box-footer clearfix no-border">
 
         	</div>
        </div>
        
        <!-- /.box -->
      </div>
    </div>

  </section>
    <!-- /.content -->

     

    <!------------------------Edit category modal--------------------------->
    <div id="addsectionmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Category</h4>
          </div>
          <div class="modal-body">
          	<input type="button" class="btn btn-primary" value="Add Row" onclick="addRow('dataTable1')" />   
            <form class="form-horizontal" name="editcategory" method="post" action="/admin/storesection">
               {{ csrf_field() }} 
               <input type="hidden" name="course_id" value="{{ $course['id'] }}"> 
                <table id="dataTable1"   class="table table-responsive table-bordered">           
                    <tr>
                        <td>
                            <!--<input type="checkbox"  name="chk[]"/>-->
                            <button  class="btn btn-danger btn-sm" onclick="delrow(this);" type="button"><i class="fa fa-trash"></i></button>
                        </td>
                        <td>
                            <input required type="text" name="section_name[]" placeholder="Section Name" class="form-control"/>
                        </td>
                    </tr>
                </table>
               
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
  < 



 
@endsection

@section('scriptdown')
  <script src="{{ url('admin1/bower_components/ckeditor/ckeditor.js') }}"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="{{ url('admin1/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      //CKEDITOR.replace('course_details')
      //bootstrap WYSIHTML5 - text editor
      //$('.textarea').wysihtml5()
    })
    function addRow(tableID) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);
        var colCount = table.rows[0].cells.length;
        for(var i=0; i<colCount; i++) {
	        var newcell = row.insertCell(i);
            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch(newcell.childNodes[0].type) {
                case "text":
                    newcell.childNodes[0].value = "";
	                break;
    	        case "checkbox":
                    newcell.childNodes[0].checked = false;
                    break;
                case "select-one":
                    newcell.childNodes[0].selectedIndex = 0;
                    break;
                }
            }
        }

        function delrow(a){
        	//alert("hello");
        	var table = document.getElementById("dataTable1");
            var rowCount = table.rows.length;
        	//console.log(rowCount);
        	if(rowCount>1)
        	{
        		//$(this).parent().parent().hide();
        		$(a).closest('tr').remove();
        	}
        	else{
        		alert('You can not remove all rows');
        	}
        }
  </script>

@endsection