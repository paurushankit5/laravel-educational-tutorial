@extends('layouts.admin')
@section('title')
  Tags
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
      Tags
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Tags</li>
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
            <i class="fa fa-tag"></i>

            <h3 class="box-title">Tags</h3>

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
                   <th>Last Updated</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @if (count($tags) > 0)
                  <?php 
                    $page=1;
                    if(isset($_GET['page']))
                    {
                      $page = $_GET['page']; 
                    }
                    $i = --$page*$limit;
                  ?>
                  @foreach ($tags as $tag)
                    <tr>
                      <td> {{ ++$i }} </td>
                      <td> {{ $tag['tag_name'] }} </td>
                       <td> {{ \Carbon\Carbon::parse($tag['updated_at'])->format('d/M/Y')}}</td>
                      <td> 
                        <button class="btn btn-warning" onClick="edit('{{ $tag['id'] }}','{{ $tag['tag_name'] }}');"><i class="fa fa-pencil"></i></button> 
                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button> 
                      </td>
                    </tr>
                  @endforeach
                  <tr>
                    <td colspan="4"> {{ $tags->links() }} </td>
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

    <!------------------------add category modal--------------------------->
    <div id="addcatmodal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Tags</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="/admin/addtags">
               {{ csrf_field() }} 
              <div class="form-group">
                <label class="control-label col-sm-2" for="tag_name">Tag*:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tag_name" name="tag_name" required placeholder="Enter Tag Name">
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary pull-right" >Submit</button>

            </form>
          </div>
          <div class="clearfix"></div>
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