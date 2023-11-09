@extends('layout.main')
@section('title', 'Brands')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Brands</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Products</a></li>
              <li class="breadcrumb-item active">Brands</li>
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
                    <div class="col-md-12">
                      <a href="javascript:void(0)" class="btn btn-primary pull-right addNewBrand" title="Add Brand"><i class="fas fa-plus"></i> Add Brand</a>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="brandTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th width="10&">#</th>
                    <th width="50%">Name</th>
                    <th width="20%">No. of Products</th>
                    <th width="20%" class="text-right">Action</th>
                  </tr>
                  </thead>
                  <tbody id="brandTableBody">
                      <tr class="text-center">
                        <td colspan="4"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td>
                      </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>No. of Products</th>
                    <th class="text-right">Action</th>
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


<div class="modal fade" id="addBrandModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="addBrandForm" action="{{route('products.brands.create')}}">
        @csrf
        <input type="hidden" name="b_id" id="b_id">
        <div class="modal-header">
          <h4 class="modal-title">Add Category</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="b_name" required>
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
@endsection
@section('addScript')
<!-- DataTables  & Plugins -->
<script src="{{URL::to('/public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{URL::to('/public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script>
  $(function () {

    loadBrands();

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });




    $(document).on('click', '.addNewBrand', function(){
      $("#addBrandForm").trigger("reset");
      $('#b_id').val('');
      $('#addBrandModal .modal-title').html('Add Brand');
      $('#addBrandModal').modal('show');
    });


    $("#addBrandForm").submit(function (event) {
      var form=$(this);

      $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        encode: true,
      }).done(function (data) {
        if(data.success){
          $('#addBrandModal').modal('hide');
          Toast.fire({
            icon: 'success',
            title: data.message
          });
          setTimeout(function(){
            $("#addBrandForm").trigger("reset");
            loadBrands();
          }, 500)
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });

      event.preventDefault();
    }); 

    $(document).on('click', '.deleteBrand', function(){
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
          $.get("{{URL::to('/products/brands/delete')}}/"+id, function(data){
              console.log(data);
              if(data == 'success'){
                Toast.fire({
                  icon: 'success',
                  title: 'Success! Brand Successfully Deleted.'
                });
                loadBrands();
              }else{
                Toast.fire({
                  icon: 'error',
                  title: "Warning! This Brand has products listed."
                });
              }
          });
        }
      });
    });

    $(document).on('click', '.editBrand', function(){
      var id = $(this).data('id');

      $.getJSON("{{URL::to('/products/brands/edit')}}/"+id, function(data){
          $('#b_id').val(data.id);
          $('#b_name').val(data.name);

          $('#addBrandModal .modal-title').html('Edit Brand');
          $('#addBrandModal').modal('show');
      });
    });
  });

  function loadBrands(){
    var url = "{{route('products.brands.load')}}";

    $('#brandTableBody').html('<tr class="text-center"><td colspan="4"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
    $.get(url, function(data){
      $('#brandTableBody').html(data);
      $('#brandTable').DataTable();
    });
  }
</script>
@endsection