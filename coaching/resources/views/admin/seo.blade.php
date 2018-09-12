@extends('layouts.admin')
@section('title')
  Page SEO 
@endsection
@section('headcontent')
  <section class="content-header">
    <h1>
      Page SEO
     </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Seo</li>
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

            <h3 class="box-title">Page SEO</h3>

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
                  <th>Page Name</th>
                   <th>Title</th>
                   <th>Keyword</th>
                   <th>Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                 @if (count($seo) > 0)
                  <?php $i=1;?>
                  @foreach ($seo as $s)
                    <tr>
                       <td>{{ $i++ }} </td>
                       <td> {{ $s->page_name }} </td>
                       <td> {{ $s->title }} </td>
                       <td class="text-justify"> {{ $s->keyword }} </td>
                       <td class="text-justify"> {{ $s->description }} </td>
                       <td>
                          <button class="btn btn-warning" onclick="edit({{ $s->id }},'{{ $s->page_name }}','{{ $s->title }}','{{ $s->keyword }}','{{ $s->description }}');" ><i class="fa fa-pencil"></i></button>
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
            <h4 class="modal-title">Add a Page</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="/admin/saveseo">
               {{ csrf_field() }} 
              <div class="form-group">
                <label class="control-label col-sm-2" for="page_name">Page*:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="page_name" name="page_name" required placeholder="Enter Page Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title*:</label>
                <div class="col-sm-10">
                  <input type="text" required class="form-control" id="title" name="title"   placeholder="Enter Page Title">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="keyword">Keyword*:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="keyword" name="keyword"   placeholder="Enter Meta Keyword"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="description">Keyword*:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="description" name="description"   placeholder="Enter Meta Description"></textarea>
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
            <form class="form-horizontal" name="editcategory" method="post" action="/admin/updateseo">
               {{ csrf_field() }} 
              
               <div class="form-group">
                <label class="control-label col-sm-2" for="page_name">Page*:</label>
                <div class="col-sm-10">
                  <input type="hidden" class="form-control" id="edit_id" name="id" required placeholder="Enter Category Name">
                  <input type="text" class="form-control" id="edit_page_name" name="page_name" required placeholder="Enter Page Name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="title">Title*:</label>
                <div class="col-sm-10">
                  <input type="text" required class="form-control" id="edit_title" name="title"   placeholder="Enter Page Title">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="keyword">Keyword*:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="edit_keyword" name="keyword"   placeholder="Enter Meta Keyword"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="description">Keyword*:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="edit_description" name="description"   placeholder="Enter Meta Description"></textarea>
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
    function edit(id,page_name,title,keyword,description){
      $("#edit_id").val(id);
      $("#edit_page_name").val(page_name);
      $("#edit_title").val(title);
      $("#edit_keyword").val(keyword);
      $("#edit_description").val(description);
       $('#editcatmodal').modal('toggle');
    }
  </script>



 
@endsection