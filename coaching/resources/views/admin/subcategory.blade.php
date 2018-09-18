@extends('layouts.admin')
@section('title')
  Sub-Category List
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
      Sub-Category List
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Sub-Category</li>
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
            <i class="fa fa-list-alt"></i>

            <h3 class="box-title">Sub-Category List</h3>

            <div class="box-tools pull-right">
              <button class="btn btn-primary" data-toggle="modal" data-target="#addcatmodal"><i class="fa fa-plus"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Sub-Category</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Last Updated</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>

                @if (count($subcat) > 0)
                  <?php $i = 1; ?>
                  @foreach ($subcat as $sub)
                    <tr>
                      <td> {{ $i++ }} </td>
                      <td>  {{ $sub['subcat_name'] }} </td>
                      <td>  {{ $sub->category->cat_name }} </td>
                       <td><img src="{{ env('AWS_BUCKET_URL') }}/subcategory/{{ $sub->subcat_image }}" class="img img-responsive thumbnail1" alt="{{ $sub->subcat_name }}"/> </td>
                      <td> {{ \Carbon\Carbon::parse($sub['updated_at'])->format('d/M/Y')}}</td>
                      <td> 

                         
                        <a href="/admin/subcategorydetails/{{ $sub->id }}" class="btn btn-primary"><i class="fa fa-info"></i></a> 
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button> 
                      </td>
                    </tr>
                  @endforeach
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

    <!------------------------add category modal--------------------------->
    <div id="addcatmodal" class="modal fade " role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Sub-Category</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="/admin/addsubcategory" enctype="multipart/form-data">
               {{ csrf_field() }} 
              <div class="form-group">
                <label class="control-label col-sm-2" for="cat_id">Select Category*:</label>
                <div class="col-sm-10">
                  <select class="form-control" id="cat_id" name="cat_id" required >
                    @if( count($category) )
                      @foreach($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="subcat_name">Sub-Category*:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="subcat_name" name="subcat_name" required placeholder="Enter Sub-Category Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="subcat_name">Active*:</label>
                <div class="col-sm-10">
                  <label><input type="radio" name="is_active" checked value="1"> Yes</label>
                  <label><input type="radio" name="is_active" value="0"> No</label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="subcat_details">Details:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="subcat_details" name="subcat_details"  placeholder="Enter Category Details"></textarea>
                </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-sm-2" for="subcat_image">Image:</label>
                <div class="col-sm-10"> 
                  <input type="file" class="form-control" id="subcat_image" name="subcat_image" >
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
              <button type="submit" class="btn btn-primary" >Submit</button>

            </form>
          </div>
          <div class="modal-footer">
          </div>
         </div>

      </div>
    </div>
    <!------------------------add category modal--------------------------->

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