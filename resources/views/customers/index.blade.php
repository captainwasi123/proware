@extends('layout.main')
@section('title', 'Customers')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customers</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Customers</li>
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
                      <label>Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <label>Email</label>
                      <input type="email" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label>Phone#</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label>Zone</label>
                      <select class="form-control">
                        <option value="">All</option>
                      </select>
                    </div>
                    <div class="col-md-1">
                      <a href="javascript:void(0)" class="btn btn-info mt-32"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="col-md-2">
                      <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" title="Add Customer" data-toggle="modal" data-target="#addCustomerModal"><i class="fas fa-plus"></i> Add Customer</a>
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
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone#</th>
                    <th>Zone</th>
                    <th>Inquiries</th>
                    <th>Orders</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Aster Pharmacy</td>
                    <td>abc@gmail.com</td>
                    <td>12345678</td>
                    <td>Khalidya</td>
                    <td>12</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone#</th>
                    <th>Zone</th>
                    <th>Inquiries</th>
                    <th>Orders</th>
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


<div class="modal fade" id="addCustomerModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="addCustomerForm" action="{{route('customers.create')}}">
        @csrf
        <div class="modal-header">
          <h4 class="modal-title">Add Customer</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Landline#</label>
                <input type="text" class="form-control" name="landline">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Mobile#</label>
                <input type="text" class="form-control" name="mobile" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Customer Type</label>
                <select class="form-control" name="customer_type" required>
                  @foreach($customer_type as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Contact Person</label>
                <input type="text" class="form-control" name="contact_person" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Contact Person Mobile#</label>
                <input type="text" class="form-control" name="contact_person_mobile" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" required>
                  <option value="1">Active</option>
                  <option value="0">In-Active</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="form-heading">Address</p>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Shop#</label>
                <input type="text" class="form-control" name="shop_no" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Building/Floor</label>
                <input type="text" class="form-control" name="building_floor" required>
              </div>
            </div>
            <div class="col-md-4"></div>


            <div class="col-md-4">
              <div class="form-group">
                <label>Country</label>
                <select class="form-control form-control-lg select2 countryField" name="country_id" required>
                  @foreach($countries as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>State</label>
                <select class="form-control form-control-lg select2 stateField" name="state_id" required>
                  <option value="">Select</option>
                  @foreach($states as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Zone</label>
                <select class="form-control form-control-lg select2 zoneField" name="zone_id" required>
                  <option value="">Select</option>
                  @foreach($zones as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="form-heading">Additional Information</p>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="5" name="description"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Special Remarks</label>
                <textarea class="form-control" rows="5" name="special_remarks"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
@endsection
@section('addStyle')
<!-- DataTables -->
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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

<!-- Select2 -->
<script src="{{URL::to('/public')}}/plugins/select2/js/select2.full.min.js"></script>

<script>
  $(function () {
    $('.select2').select2();

    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
@endsection