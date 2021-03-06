@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection()

@section('content')

<div class="wrapper mb-3">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Add Tags 
              <button href="" class="btn btn-primary btn-sm ml-5" data-toggle="modal" data-target="#modal-default">Add Tag</button>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th></th>
              <th>Tag</th>
              <th>Description</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($all_tags as $tag)
                <tr>
                    <td><img src="" /></td>
                    <td>{{$tag['TagName']}}</td>
                    <td>{{$tag['Description']}}</td>
                    <td>
                        <a href="http://" style="color:green">Edit</a> /
                        <a href="http://" style="color:red">Delete</a> /
                        <a href="http://" style="color:gray">Add Topics</a>
                    </td>
                </tr>
                @endforeach()
            </tbody>
            {{-- <tfoot>
            <tr>
                <th></th>
                <th>Website</th>
                <th>PLink</th>
                <th>Actions</th>
            </tr>
            </tfoot> --}}
          </table>
        </div>
      </div>

</div>

    <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            {{-- <h4 class="modal-title">Add Website Link</h4> --}}
        </div>
            <form action="" method="POST">
                @csrf
            <div class="modal-body">
                <input type="text" placeholder="Tag Name" class="form-control" name="tag_name">
                <br>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save link</button>
            </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>

@endsection()

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection()