@extends('layout.main')
@section('title', 'Salesmen')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Salesmen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Salesmen</li>
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
                <form id="filterSalesmen">
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
                      <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" title="Add Salesmen" data-toggle="modal" data-target="#addSalesmanModal"><i class="fas fa-plus"></i> Add Salesmen</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="salesmenTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Emirates ID</th>
                    <th>D.O.B</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Mobile#</th>
                    <th>Is Actice</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="salesmenTableBody">

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Emirates ID</th>
                    <th>D.O.B</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Mobile#</th>
                    <th>Is Actice</th>
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


<div class="modal fade" id="addSalesmanModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="addSalesmanForm" action="{{route('salesmen.create')}}">
        @csrf
        <div class="modal-header">
          <h4 class="modal-title">Add Salesman</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label>Emirates ID</label>
                <input type="text" class="form-control" name="eid" autocomplete="off" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>D.O.B</label>
                <input type="date" class="form-control" name="dob" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="gender" autocomplete="off" required>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Mobile#</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirm_password" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Working Zone</label>
                <select class="select2" multiple="multiple" name="zone_id[]" data-placeholder="Select Zones" style="width: 100%;">
                  @foreach($zones as $val)
                    <option value="{{$val->id}}">{{$val->name}}</option>
                  @endforeach
                </select>
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


<div class="modal fade" id="editSalesmanModal">
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
<!-- Select2 -->
<script src="{{URL::to('/public')}}/plugins/select2/js/select2.full.min.js"></script>

<script>
  $(function () {
    $('.select2').select2();

    loadSalesmen();

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });

    $("#addSalesmanForm").submit(function (event) {
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
          $('#addSalesmanModal').modal('hide');
          $('.select2').val(null).trigger('change');
          loadSalesmen();
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });

      event.preventDefault();
    });

    $(document).on('change', '.statusSalesman', function() {
      var id = $(this).data('id');
      var checkbox = $(this);
      var msg = '';
      var status = 0;
        if(this.checked) {
          status = 1;
          msg = "This user will able to login and access the panel!";
        }else{
          status = 0;
          msg = "This salesman will not be able to login!";
        }

      Swal.fire({
        title: 'Are you sure?',
        text: msg,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Confirm'
      }).then((result) => {
        if (result.isConfirmed) {
          var url = '{{URL::to("/salesmen/statusChange/")}}/'+id+'/'+status;
          $.get(url, function(data){
            Toast.fire({
              icon: 'success',
              title: data
            });
          });
        }else{
          if(status == 1){
            checkbox.prop('checked', false);
          }else{
            checkbox.prop('checked', true);
          }
        }
      });

    });


    $(document).on('click', '.deleteSalesman', function(){
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
          $.get("{{URL::to('/salesmen/delete')}}/"+id, function(data){
                Toast.fire({
                  icon: 'success',
                  title: 'Success! Salesman Successfully Deleted.'
                });
                //$("#customerTable").destroy();
                loadSalesmen();
          });
        }
      });
    });



    $(document).on('click', '.editSalesman', function(){
      var id = $(this).data('id');
      var url = '{{URL::to("/salesmen/edit/")}}/'+id;
      $.get(url, function(data){
        $('#editSalesmanModal .modal-content').html(data);
        $('.working_zone_select').select2();
      });
      $('#editSalesmanModal').modal('show');
    });


    $(document).on('submit', '#editSalesmanForm', function (event) {
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
          $('#editSalesmanModal').modal('hide');
          loadSalesmen();
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });

      event.preventDefault();
    });


    $("#filterSalesmen").submit(function (event) {
      $('#salesmenTableBody').html('<tr class="text-center"><td colspan="9"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
      var url = "{{route('salesmen.filter')}}";
      var form=$(this);
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        encode: true,
      }).done(function (data) {
        $('#salesmenTableBody').html(data);
        $("#salesmenTable").DataTable();
        $('.reset_button').html('<button type="button" class="btn btn-default mt-32 reset_filter" title="Reset Filter"><i class="fas fa-times"></i></button>')
      });

      event.preventDefault();
    }); 

    $(document).on('click', '.reset_filter', function(){
      loadSalesmen();
      $("#filterSalesmen").trigger('reset');
      $('.reset_button').html('');
    });
  });



  function loadSalesmen(){
    var url = "{{route('salesmen.load')}}";

    $('#salesmenTableBody').html('<tr class="text-center"><td colspan="9"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
    $.get(url, function(data){

      $('#salesmenTableBody').html(data);

      $("#salesmenTable").DataTable();
    });
  }
</script>
@endsection