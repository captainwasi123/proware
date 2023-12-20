<div class="invoice p-3 mb-3">
  <!-- title row -->
  <div class="row">
    <div class="col-12">
      <h4>
        <i class="fas fa-globe"></i> {{env('COMPANY_NAME')}}
        <small class="float-right text-right"><b>Inquiry #{{sprintf("%'.05d\n", $data->id)}}</b><br>Date: {{date('d-M-Y', strtotime($data->created_at))}}</small>
      </h4>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      From
      <address>
        <strong>{{env('COMPANY_NAME')}}</strong><br>
        {{env('COMPANY_ADDRESS')}}<br>
        Phone: {{env('COMPANY_PHONE')}}<br>
        Email: {{env('COMPANY_EMAIL')}}
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      To
      <address>
        <strong>{{$data->customer->name}}</strong><br>
        {{$data->customer->shop_no.', '.$data->customer->building_floor}}<br>
        {{$data->customer->zone->name.', '.$data->customer->state->name.', '.$data->customer->country->name}}<br>
        Phone: {{$data->customer->landline}}<br>
        Email: {{$data->customer->email}}
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      
      <br>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-12 table-responsive">
      <table class="table table-striped">
        <thead>
        <tr>
          <th>S#</th>
          <th>Product</th>
          <th>Category</th>
          <th>Brand</th>
          <th>Qty</th>
          <th>Price</th>
        </tr>
        </thead>
        <tbody>
          @foreach($data->products as $key => $val)
            <tr>
              <td>{{++$key}}</td>
              <td>{{$val->product->name}}</td>
              <td>{{$val->product->category->name}}</td>
              <td>{{$val->product->brand->name}}</td>
              <td>{{$val->quantity}}</td>
              <td>{{number_format($val->price, 2)}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="row">
    <!-- accepted payments column -->
    <div class="col-7">

      <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
        <strong>Description:</strong><br>
        {{$data->description}}
        <hr>
        <strong>Special Remarks:</strong><br>
        {{$data->special_remarks}}
      </p>
    </div>
    <!-- /.col -->
    <div class="col-5">

      <div class="table-responsive">
        <table class="table">
          <tr>
            <th style="width:50%">Subtotal:</th>
            <td class="text-right">{{number_format($data->subtotal, 2).' '.env('APP_CURRENCY')}}</td>
          </tr>
          <tr>
            <th>Discount:</th>
            <td class="text-right">{{number_format($data->discount, 2).' '.env('APP_CURRENCY')}}</td>
          </tr>
          <tr>
            <th>Tax (5%)</th>
            <td class="text-right">{{number_format($data->vat, 2).' '.env('APP_CURRENCY')}}</td>
          </tr>
          <tr>
            <th>Total:</th>
            <td class="text-right">{{number_format($data->total, 2).' '.env('APP_CURRENCY')}}</td>
          </tr>
        </table>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- this row will not appear when printing -->
  <div class="row no-print">
    <div class="col-12">
      <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
      
    </div>
  </div>
</div>
<p style="font-size: 12px; margin-top: -10px;">
  <span>Generated By: {{Auth::user()->name}}</span>
  <span class="float-right">Generated at: {{date('h:i a | d-M-Y')}}</span>
</p>