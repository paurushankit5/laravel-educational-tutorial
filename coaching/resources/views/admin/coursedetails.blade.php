@extends('layouts.admin')
@section('title')
  Course : {{ $course->course_name }}
  
@endsection
@section('headcontent')
  <style type="text/css">
    td h5{
      padding:0px;
      font-size:40px;
    }
  </style>
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
        
         <div class="box box-primary">
          <div class="box-header">
            <i class="fa fa-graduation-cap"></i>

            <h3 class="box-title">{{ $course->course_name }}</h3>
            <div class="box-tools pull-right">
              <a href="/course/{{ $course->category->cat_slug }}/{{ $course->course_slug }}" target="_blank" class="btn btn-primary">
                <i class=" fa fa-eye"></i>
              </a>
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
          <th> Category: </th>
          <td> {{ $course->category->cat_name }} </td>
        </tr>
        <tr>
          <th> Status: </th>
          <td> 
              @if(!$course->is_active)
                <p class="text-danger">Disabled &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button class="btn btn-primary btn-sm" onClick="changeStatus(1);" title="Mark this course as active"><i class="fa fa-check"></i></button></p>
              @else
                <p class="text-primary">Active  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <button class="btn btn-danger btn-sm"
                onClick="changeStatus(0);"  title="Mark this course as disabled"><i class="fa fa-ban"></i></button></p>
              @endif
          </td>
        </tr>
        <tr>
          <th> Tags: </th>
          <td>
            @if(count($course->tags))
              @foreach($course->tags as $tag)
                {{ $tag->tag_name }}  <br>
              @endforeach
            @endif
          </td>
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
          		<?php $j=1; ?>
          		<table class="table table-responsive">          			
          		@foreach ($course->sections as $section)
          			<tr class="bg bg-primary">
          				
          				<td>
          					Section {{ $i++ }}: {{ $section->section_name }}  <button class="btn btn-warning pull-right" data-toggle="collapse" data-target="#addlecture{{ $section->id }}"><i class="fa fa-plus"></i> Lecture</button> 
          				</td>
          			</tr>
          			<tr>
          				<td>
          					<div class="row collapse" id="addlecture{{ $section->id }}">
          						<div class="col-sm-12">
          							<input type="button" class="btn btn-primary" value="Add Row" onclick="addRow('dataTablesection{{ $section->id }}')" />
          							<form class="form-horizontal" method="post" action="/admin/storelecture">
						               {{ csrf_field() }} 
						               <input type="hidden" name="section_id" value="{{ $section['id'] }}"> 
						               <input type="hidden" name="course_id" value="{{ $course['id'] }}"> 
						                <table id="dataTablesection{{ $section->id }}"   class="table table-responsive table-bordered">           
						                    <tr>
						                        <td>
						                            <!--<input type="checkbox"  name="chk[]"/>-->
						                            <button  class="btn btn-danger btn-sm" onclick="delrow(this,'dataTablesection{{ $section->id }}');" type="button"><i class="fa fa-trash"></i></button>
						                        </td>
						                        <td>
						                            <input required type="text" name="lecture_name[]" placeholder="Lecture Name" class="form-control"/>
						                        </td>
						                        <td>
						                            <input type="text" required name="video_link[]" placeholder="Youtube Embed Link " class="form-control"/>
						                        </td>
						                    </tr>
						                </table>
						               
						              <button type="submit" class="btn btn-primary pull-right" >Submit</button>

						            </form>
          						</div>
          					</div>
          				</td>
          			</tr>
          			<tr>
          				@if(count($section->videolectures))
          					<td>
          						<ul class="list-group">
		          					@foreach($section->videolectures as $lecture)
		          						<li class="list-group-item">{{$j++}}.&nbsp;&nbsp;&nbsp; {{ $lecture->lecture_name }} 
		          							@if($lecture->video_link !='' )
		          								<span class="badge" onClick="showvideo('{{ $lecture->video_link }}');" style="cursor:pointer;">Preview Available</span>

		          							@endif
		          						</li>
		          					@endforeach
          						</ul>
          					</td>
          				@endif
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

     

    <!------------------------Add Section modal--------------------------->
    <div id="addsectionmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Section</h4>
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
                            <button  class="btn btn-danger btn-sm" onclick="delrow(this,'dataTable1');" type="button"><i class="fa fa-trash"></i></button>
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
  	 <!------------------------Video modal--------------------------->
    <div id="videomodal" class="modal mddal-lg fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          
          <div class="modal-body">
          	<iframe style="width:100%;min-height:300px;" id="iframe">
			</iframe>
          </div>
           
         </div>

      </div>
    </div>
    <!------------------------add category modal--------------------------->



 
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

        function delrow(a,tableid){
        	//alert("hello");
        	var table = document.getElementById(tableid);
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
        function showvideo(url)
        {
        	$("iframe").attr('src',url);
        	$("#videomodal").modal('toggle');
        }
        function changeStatus(status){
          var r = confirm(" Are you sure about this?");
          if(r)
          {
            $.ajax({
              type  :   "POST",
              url   :   "/admin/changecoursestatus",
              data  :   {
                          "_token"      : "{{ csrf_token() }}",
                          "is_active"   : status,
                          "id"          : "{{ $course->id }}",
              },
              success : function(data){
                if(data == 1)
                {
                  location.reload();
                }
                else{
                  alert("We are facing some technical issues. Please try later.")
                }
              }
            }); 
          }
          
        }
  </script>

@endsection