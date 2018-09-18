@extends('layouts.admin')
@section('title')
  Sub-Category : {{ $subcat->subcat_name }}
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
  		Sub-Category : {{ $subcat->subcat_name }}
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/admin/subcategory"><i class="fa fa-list-alt"></i>  Sub-Category </a></li>
      <li class="/admin/subcategory">{{ $subcat->subcat_name }}</li>
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
            <i class="fa fa-th"></i>

            <h3 class="box-title">{{ $subcat->subcat_name }}</h3>

            <div class="box-tools pull-right">
              
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-responsive">
            	<tr>
               		<th>Name</th>
               		<td>{{ $subcat->subcat_name }}</td>
               	</tr>
               	<tr>
               		<th>Statis</th>
               		<td>
               			@if($subcat->is_active == 1)
               				Active
               			@else
               				Disabled
               			@endif
               		</td>
               	</tr>
               	<tr>
               		<th>Category</th>
               		<td>{{ $subcat->category->cat_name }}</td>
               	</tr>
               	<tr>
               		<th>Image</th>
               		<td><img src="{{ env('AWS_BUCKET_URL') }}/subcategory/{{ $subcat->subcat_image }}" class="img img-responsive thumbnail1" alt="{{ $subcat->subcat_name }}"/> </td>
               	</tr>
               	<tr>
               		<th>Details</th>
               		<td> {!! $subcat->subcat_details !!} </td>
               	</tr>
               	<tr>
               		<th colspan="2"><h3 class="bg-primary text-center">SEO Section</h3></th>
               	</tr>
               	<tr>
               		<th>Title</th>
               		<td> {{ $subcat->seo->title }} </td>
               	</tr>
               	<tr>
               		<th>Keyword</th>
               		<td> {{ $subcat->seo->keyword }} </td>
               	</tr>
               	<tr>
               		<th>Description</th>
               		<td> {{ $subcat->seo->description }} </td>
               	</tr>
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
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Edit Category</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" name="editcategory" method="post" action="/admin/updatecategory">
               {{ csrf_field() }} 
              <div class="form-group">
                <label class="control-label col-sm-2" for="cat_name">Category*:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="edit_cat_name" name="cat_name" required placeholder="Enter Category Name">
                  <input type="hidden" class="form-control" id="edit_id" name="id" required placeholder="Enter Category Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="cat_details">Details:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="edit_cat_details" name="cat_details"  placeholder="Enter Category Details"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="fa_icon">Fa Icon:</label>
                <div class="col-sm-10"> 
                  <input type="text" class="form-control" id="edit_fa_icon" name="fa_icon" placeholder="Enter fa-icon">
                </div>
              </div>
              <h3 class="bg-primary text-center">SEO Section</h3>
              <div class="form-group">

                <label class="control-label col-sm-2" for="title">Title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" id="edit_title" placeholder="Enter Page Title Here"/>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="keyword">Keywords</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="keyword" id="edit_keyword" placeholder="Enter Meta Keywords"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="description">Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="description" id="edit_description" placeholder="Enter Meta Description"></textarea>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary pull-right" >Submit</button>

            </form>
          </div>
          <div class="modal-footer">
          </div>
         </div>

      </div>
    </div>
    <!------------------------add category modal--------------------------->
 



 
@endsection

@section('scriptdown')
  <script src="{{ url('admin1/bower_components/ckeditor/ckeditor.js') }}"></script>  
  <script src="{{ url('admin1/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('edit_cat_details');
      CKEDITOR.replace('subcat_details');
       //bootstrap WYSIHTML5 - text editor
      //$('.textarea').wysihtml5()
    })

    function edit(a,id,cat_name,fa_icon,title,keyword,description){
      var cat_details2  =   $(a).data('cat_details');
      //alert(title);
      $("#edit_id").val(id);
      $("#edit_cat_name").val(cat_name);
      CKEDITOR.instances['edit_cat_details'].setData(cat_details2)
      //$("#edit_cat_details").val(cat_details);
      $("#edit_fa_icon").val(fa_icon);
      $("#edit_title").val(title);
      $("#edit_keyword").val(keyword);
      $("#edit_description").val(description);
      $('#editcatmodal').modal('toggle');
    }
  </script>
@endsection