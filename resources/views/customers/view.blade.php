
  <div class="modal-header">
    <h5 class="modal-title">Customer Details</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-7">
        <div class="form-group">
          <h5 class="viewModalText"><strong>{{$data->name}}</strong></h5>
          <h5 class="viewModalText">
            <label class="badge badge-info">{{empty($data->type) ? '-' : $data->type->name}}</label>
            @switch($data->status)
              @case('1')
                <label class="badge badge-success">Active</label>
                @break

              @case('0')
                <label class="badge badge-danger">In-Active</label>
                @break
            @endswitch
          </h5>
          <h5 class="viewModalText"><a href="mailto:{{$data->email}}"><i class="fas fa-envelope"></i> &nbsp;{{$data->email}}</a></h5>
          <h5 class="viewModalText"><i class="fas fa-phone"></i> <a href="tel:{{$data->landline}}">{{$data->landline}}</a> | <i class="fas fa-mobile"></i> <a href="tel:{{$data->mobile}}">{{$data->mobile}}</a></h5>
          <h5 class="viewModalText"></h5>
          <h5 class="viewModalText"><i class="fas fa-map-marker"></i> &nbsp;<a href="javascript:void(0)">{{$data->shop_no}}, {{$data->building_floor}}, {{empty($data->zone) ? '-' : $data->zone->name}}, {{empty($data->state) ? '-' : $data->state->name}}, {{empty($data->country) ? '-' : $data->country->name}}.</h5>
        </div>
      </div>
      <div class="col-md-5">
        <div class="contact_person">
          <label>Contact Person</label>
          <h5 class="viewModalText">{{$data->contact_person}}</h5>
          <h5 class="viewModalText"><i class="fas fa-mobile"></i> <a href="tel:{{$data->contact_person_mobile}}">{{$data->contact_person_mobile}}</a></h5>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary card-outline card-tabs">
          <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#inquiries-tab" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Inquiries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#orders-tab" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Orders</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="">
              <div class="tab-pane fade show active" id="inquiries-tab" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta consectetur.
              </div>
              <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                 Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
