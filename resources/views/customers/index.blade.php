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
                <form id="filterCustomer">
                  @csrf
                  <div class="row">
                    <div class="col-md-2">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-3">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="col-md-2">
                      <label>Phone#</label>
                      <input type="text" class="form-control" name="mobile">
                    </div>
                    <div class="col-md-2">
                      <label>Zone</label>
                      <select class="form-control form-control-lg select2" name="zone_id">
                        <option value="">All</option>
                        @foreach($zones as $val)
                          <option value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-1" style="display: inline-flex;justify-content: space-between;">
                      <button type="submit" class="btn btn-info mt-32"><i class="fas fa-search"></i></button>
                      <div class="reset_button">
                        
                      </div>
                    </div>
                    <div class="col-md-2">
                      <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" title="Add Customer" data-toggle="modal" data-target="#addCustomerModal"><i class="fas fa-plus"></i> Add Customer</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="customerTable" class="table table-bordered table-striped">
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
                  <tbody id="customerTableBody">

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

<div class="modal fade" id="editCustomerModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="viewCustomerModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
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

    loadCustomers();

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });

    $("#addCustomerForm").submit(function (event) {
      var form=$(this);
      $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        encode: true,
      }).done(function (data) {
        if(data.success == 'success'){
          Toast.fire({
            icon: 'success',
            title: data.message
          });
          form.trigger("reset");
          $('#addCustomerModal').modal('hide');
          loadCustomers();
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });

      event.preventDefault();
    });


    $(document).on('click', '.editCustomer', function(){
      var id = $(this).data('id');
      var url = '{{URL::to("/customers/edit/")}}/'+id;
      $.get(url, function(data){
        $('#editCustomerModal .modal-content').html(data);
      });
      $('#editCustomerModal').modal('show');
    });


    $(document).on('submit', '#editCustomerForm', function (event) {
      var form=$(this);
      $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        encode: true,
      }).done(function (data) {
        if(data.success == 'success'){
          Toast.fire({
            icon: 'success',
            title: data.message
          });
          form.trigger("reset");
          $('#editCustomerModal').modal('hide');
          loadCustomers();
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });

      event.preventDefault();
    });


    $(document).on('click', '.deleteCustomer', function(){
      var id = $(this).data('id');

      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.get("{{URL::to('/customers/delete')}}/"+id, function(data){
                Toast.fire({
                  icon: 'success',
                  title: 'Success! Customer Successfully Deleted.'
                });
                //$("#customerTable").destroy();
                loadCustomers();
          });
        }
      });
    });


    $(document).on('click', '.viewCustomer', function(){
      var id = $(this).data('id');
      var url = '{{URL::to("/customers/view/")}}/'+id;
      $.get(url, function(data){
        $('#viewCustomerModal .modal-content').html(data);
      });
      $('#viewCustomerModal').modal('show');
    });


    $("#filterCustomer").submit(function (event) {
      $('#customerTableBody').html('<tr class="text-center"><td colspan="9"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
      var url = "{{route('customers.filter')}}";
      var form=$(this);
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        encode: true,
      }).done(function (data) {
        $('#customerTableBody').html(data);
        $("#customerTable").DataTable();
        $('.reset_button').html('<button type="button" class="btn btn-default mt-32 reset_filter" title="Reset Filter"><i class="fas fa-times"></i></button>')
      });

      event.preventDefault();
    }); 

    $(document).on('click', '.reset_filter', function(){
      loadCustomers();
      $("#filterCustomer").trigger('reset');
      $('.reset_button').html('');
    });

  });



  function loadCustomers(){
    var url = "{{route('customers.load')}}";

    $('#customerTableBody').html('<tr class="text-center"><td colspan="9"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
    $.get(url, function(data){

      $('#customerTableBody').html(data);

      $("#customerTable").DataTable();
    });
  }
</script>
@endsection