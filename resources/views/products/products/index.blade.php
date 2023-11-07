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
                  <div class="row">
                    <div class="col-md-3">
                      <label>Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                      <label>Brand</label>
                      <select class="form-control">
                        <option value="">All</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>Category</label>
                      <select class="form-control">
                        <option>All</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>Status</label>
                      <select class="form-control">
                        <option value="">All</option>
                      </select>
                    </div>
                    <div class="col-md-1">
                      <a href="javascript:void(0)" class="btn btn-info mt-32"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="col-md-2">
                      <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" title="Add Product" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i> Add Product</a>
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
                    <th>Brand</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount%</th>
                    <th>Sold</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>Panadol</td>
                    <td>abc</td>
                    <td>Medicine</td>
                    <td>20 AED</td>
                    <td>5%</td>
                    <td>246</td>
                    <td><label class="badge badge-success">Available</label></td>
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


<div class="modal fade" id="modal-lg">
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
              <input type="number" class="form-control" step="any" name="Price" required>
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
                <option value="0">Unavailable</option>
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


    $('input[name="product_image"]').on('change', function(){
      readURL(this, $('.product-image-wrapper'));  //Change the image
    });

    $('.close-btn').on('click', function(){ //Unset the image
       let file = $('input[name="upload-img"]');
       $('.product-image-wrapper').css('background-image', 'unset');
       $('.product-image-wrapper').removeClass('file-set');
       file.replaceWith( file = file.clone( true ) );
    });

    $("#addProductForm").submit(function (event) {
      var form=$(this);
      console.log(form.serialize());

     /* $.ajax({
        type: "POST",
        url: form.attr("action"),
        data: form.serialize(),
        dataType: "json",
        encode: true,
      }).done(function (data) {
        if(data.success){
          $('#addCategoryModal').modal('hide');
          Toast.fire({
            icon: 'success',
            title: data.message
          });
          setTimeout(function(){
            $("#addCategoryForm").trigger("reset");
            loadCategories();
          }, 500)
        }else{
          Toast.fire({
            icon: 'error',
            title: data.errors
          });
        }
      });*/

      event.preventDefault();
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
</script>
@endsection