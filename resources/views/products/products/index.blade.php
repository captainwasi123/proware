@extends('layout.main')
@section('title', 'Products')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
                <form id="filterProduct">
                  @csrf
                  <div class="row">
                    <div class="col-md-3">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-2">
                      <label>Brand</label>
                      <select class="form-control" name="brand_id">
                        <option value="">All</option>
                        @foreach($brands as $val)
                          <option value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>Category</label>
                      <select class="form-control" name="category_id">
                        <option value="">All</option>
                        @foreach($categories as $val)
                          <option value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>Status</label>
                      <select class="form-control" name="status">
                        <option value="">All</option>
                        <option value="1">Available</option>
                        <option value="2">Unavailable</option>
                      </select>
                    </div>
                    <div class="col-md-1" style="display: inline-flex;justify-content: space-between;">
                      <button type="submit" class="btn btn-info mt-32"><i class="fas fa-search"></i></button>
                      <div class="reset_button">
                        
                      </div>
                    </div>
                    <div class="col-md-2">
                      <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" title="Add Product" data-toggle="modal" data-target="#addProductModal"><i class="fas fa-plus"></i> Add Product</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="productTable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount%</th>
                    <th>Sold</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody id="productTableBody">

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount%</th>
                    <th>Sold</th>
                    <th>Status</th>
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


<div class="modal fade" id="addProductModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="addProductForm" action="{{route('products.create')}}" enctype="multipart/form-data">
        @csrf
      <div class="modal-header">
        <h4 class="modal-title">Add Product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="product-image-wrapper">
              <input type="file" name="product_image" accept="image/*" />
              <div class="close-btn">×</div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="name" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Category</label>
              <select class="form-control form-control-lg select2" name="category_id" required>
                <option value="">Select</option>
                @foreach($categories as $val)
                  <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Brand</label>
              <select class="form-control form-control-lg select2" name="brand_id" required>
                <option value="">Select</option>
                @foreach($brands as $val)
                  <option value="{{$val->id}}">{{$val->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Price</label>
              <input type="number" class="form-control" step="any" name="price" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Discount%</label>
              <input type="number" class="form-control" step="any" name="discount">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status">
                <option value="1">Available</option>
                <option value="2">Unavailable</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <p class="form-heading">Additional Information</p>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" name="discription" rows="5"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="editProductModal">
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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{URL::to('/public')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
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
<!-- SweetAlert2 -->
<script src="{{URL::to('/public')}}/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
  $(function () {

    loadProducts();

    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 5000
    });

    $('.select2').select2();

    $(document).on('click', '.editProduct', function(){
      var id = $(this).data('id');
      var url = '{{URL::to("/products/edit/")}}/'+id;
      $.get(url, function(data){
        $('#editProductModal .modal-content').html(data);
      });
      $('#editProductModal').modal('show');
    });

    $('input[name="product_image"]').on('change', function(){
      readURL(this, $('.product-image-wrapper'));  //Change the image
    });

    $('.close-btn').on('click', function(){ //Unset the image
       let file = $('input[name="product_image"]');
       $('.product-image-wrapper').css('background-image', 'unset');
       $('.product-image-wrapper').removeClass('file-set');
       file.replaceWith( file = file.clone( true ) );
    });

    $(document).on('change','input[name="edit_product_image"]', function(){
      readURL(this, $('.edit_product-image-wrapper'));  //Change the image
    });

    $(document).on('click','.edit_close-btn', function(){ //Unset the image
       let file = $('input[name="edit_product_image"]');
       $('.edit_product-image-wrapper').css('background-image', 'unset');
       $('.edit_product-image-wrapper').removeClass('file-set');
       file.replaceWith( file = file.clone( true ) );
    });

    $("#addProductForm").submit(function (event) {
      var form=$(this);
      var formData = new FormData($("#addProductForm")[0]);
      $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: formData,
        dataType: "json",
        encode: true,
        processData: false,
        contentType: false,
      }).done(function (data) {
        if(data.success == 'success'){
          Toast.fire({
            icon: 'success',
            title: data.message
          });
          form.trigger("reset");
          $('#addProductModal').modal('hide');
          loadProducts();
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });

      event.preventDefault();
    }); 

    $(document).on('submit', '#editProductForm', function (event) {
      var form=$(this);
      var formData = new FormData($("#editProductForm")[0]);
      $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: formData,
        dataType: "json",
        encode: true,
        processData: false,
        contentType: false,
      }).done(function (data) {
        if(data.success == 'success'){
          Toast.fire({
            icon: 'success',
            title: data.message
          });
          form.trigger("reset");
          $('#editProductModal').modal('hide');
          loadProducts();
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });

      event.preventDefault();
    });

    $(document).on('click', '.deleteProduct', function(){
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
          $.get("{{URL::to('/products/delete')}}/"+id, function(data){
                Toast.fire({
                  icon: 'success',
                  title: 'Success! Product Successfully Deleted.'
                });
                $("#productTable").destroy();
                loadProducts();
          });
        }
      });
    }); 


    $("#filterProduct").submit(function (event) {
      $('#productTableBody').html('<tr class="text-center"><td colspan="9"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
      var url = "{{route('products.filter')}}";
      var form=$(this);
      $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(),
        encode: true,
      }).done(function (data) {
        $('#productTableBody').html(data);
        $("#productTable").DataTable();
        $('.reset_button').html('<button type="button" class="btn btn-default mt-32 reset_filter" title="Reset Filter"><i class="fas fa-times"></i></button>')
      });

      event.preventDefault();
    }); 

    $(document).on('click', '.reset_filter', function(){
      loadProducts();
      $("#filterProduct").trigger('reset');
      $('.reset_button').html('');
    });

  });

  //FILE
  function readURL(input, obj){
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        obj.css('background-image', 'url('+e.target.result+')');
        obj.addClass('file-set');
      }
      reader.readAsDataURL(input.files[0]);
    }
  };

  function loadProducts(){
    var url = "{{route('products.load')}}";

    $('#productTableBody').html('<tr class="text-center"><td colspan="9"><img src="{{URL::to('/public/loader.gif')}}" height="30px"></td></tr>');
    $.get(url, function(data){

      $('#productTableBody').html(data);

      $("#productTable").DataTable();
    });
  }
</script>
@endsection