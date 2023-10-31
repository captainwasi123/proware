@extends('layout.main')
@section('title', 'Inquires')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inquiries</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inquiries</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                  <div class="row">
                    <div class="col-md-2">
                      <label>From</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label>To</label>
                      <input type="date" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label>Salesman</label>
                      <select class="form-control">
                        <option value="">All</option>
                      </select>
                    </div>
                    <div class="col-md-1">
                      <a href="javascript:void(0)" class="btn btn-info mt-32" title="Add Inquiry"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="col-md-3">
                      
                    </div>
                    <div class="col-md-2">
                      <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" title="Add Inquiry"><i class="fas fa-plus"></i> Add Inquiry</a>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Inq#</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Zone</th>
                    <th>Salesman</th>
                    <th>No. of Products</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Inq#</th>
                    <th>Date</th>
                    <th>Customer</th>
                    <th>Zone</th>
                    <th>Salesman</th>
                    <th>No. of Products</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
@section('addStyle')
<!-- DataTables -->
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('addScript')
<!-- DataTables  & Plugins -->
<script src="{{URL::to('/public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
@endsection