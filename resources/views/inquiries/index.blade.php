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
                      <a href="javascript:void(0)" class="btn btn-primary mt-32 pull-right" title="Add Inquiry" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i> Add Inquiry</a>
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
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
                    <td>8</td>
                    <td class="text-right">
                      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>1001</td>
                    <td>31-Oct-2023</td>
                    <td>Aster Pharmacy</td>
                    <td>Khalidya</td>
                    <td>xyz</td>
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


<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form id="add_inquiry_form" action="{{route('inquiries.create')}}">
        @csrf
        <div class="modal-header">
          <h4 class="modal-title">Add Inquiry</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <p class="form-heading">Customer</p>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Name</label>
                <select class="form-control form-control-lg select2" id="add_customer_name_field" style="width: 100%;">
                  <option disabled selected>Select</option>
                  @foreach($customers as $val)
                    <option value="{{$val->id}}">{{$val->name.'  ( '.$val->contact_person.' - '.$val->contact_person_mobile.' )'}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="add_customer_email" disabled>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" id="add_customer_phone" disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" id="add_customer_address" disabled>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="form-heading">Products</p>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Name</label>
                <select class="form-control form-control-lg select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Brand</label>
                <input type="email" class="form-control" disabled>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" disabled>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" value="1">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" disabled>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <button class="btn btn-primary mt-23 pull-right"><i class="fas fa-plus"></i></button>
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
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Special Remarks</label>
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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

    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $
  });
</script>
@endsection