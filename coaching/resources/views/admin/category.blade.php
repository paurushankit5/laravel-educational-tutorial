@extends('layouts.admin')
@section('title')
  Category List
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
      Category List
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Category</li>
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

            <h3 class="box-title">Category List</h3>

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
                  <th>Category</th>
                  <th>Details</th>
                  <th>Last Updated</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if (count($category) > 0)
                  <?php $i = 1; ?>
                  @foreach ($category as $cat)
                    <tr>
                      <td> {{ $i++ }} </td>
                      <td> <i class="{{ $cat['fa_icon'] }}"></i> {{ $cat['cat_name'] }} </td>
                       <td>{{ $cat['cat_details'] }} </td>
                      <td> {{ \Carbon\Carbon::parse($cat['updated_at'])->format('d/M/Y')}}</td>
                      <td> 
                        <button class="btn btn-warning" onClick="edit('{{ $cat['id'] }}','{{ $cat['cat_name'] }}','{{ $cat['cat_details'] }}','{{ $cat['fa_icon'] }}',);"><i class="fa fa-pencil"></i></button> 
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
    <div id="addcatmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Category</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="/admin/addcategory">
               {{ csrf_field() }} 
              <div class="form-group">
                <label class="control-label col-sm-2" for="cat_name">Category*:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cat_name" name="cat_name" required placeholder="Enter Category Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="cat_details">Details:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="cat_details" name="cat_details"  placeholder="Enter Category Details"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="fa_icon">Fa Icon:</label>
                <div class="col-sm-10"> 
                  <input type="text" class="form-control" id="fa_icon" name="fa_icon" placeholder="Enter password">
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
      <div class="modal-dialog">

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
                  <input type="text" class="form-control" id="edit_id" name="id" required placeholder="Enter Category Name">
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
                  <input type="text" class="form-control" id="edit_fa_icon" name="fa_icon" placeholder="Enter password">
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
  <script type="text/javascript">
    function edit(id,cat_name,cat_details,fa_icon){
      $("#edit_id").val(id);
      $("#edit_cat_name").val(cat_name);
      $("#edit_cat_details").val(cat_details);
      $("#edit_fa_icon").val(fa_icon);
      $('#editcatmodal').modal('toggle');
    }
  </script>



 
@endsection