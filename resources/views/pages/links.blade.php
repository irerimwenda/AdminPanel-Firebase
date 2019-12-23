@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection()

@section('content')

<div class="wrapper mb-3">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Manage Links</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th></th>
              <th>Website</th>
              <th>Link</th>
              <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($all_links as $link)
                <tr>
                    <td><img src="" /></td>
                    <td>{{$link['LinkName']}}</td>
                    <td><a href="{{$link['Link']}}">{{$link['Link']}}</a></td>
                    <td>
                        <a href="http://">Edit</a> /
                        <a href="http://">Delete</a>
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
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
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