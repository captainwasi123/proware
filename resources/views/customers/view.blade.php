
  <div class="modal-header">
    <h5 class="modal-title">Customer Details</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <label>Name</label>
          <h5 class="viewModalText">{{$data->name}}</h5>
        </div>
      </div>
      <div class="col-md-7">
        <div class="form-group">
          <label>Email</label>
          <h5 class="viewModalText">{{$data->email}}</h5>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Landline#</label>
          <h5 class="viewModalText">{{$data->landline}}</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Mobile#</label>
          <h5 class="viewModalText">{{$data->mobile}}</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Customer Type</label>
          <h5 class="viewModalText">{{empty($data->type) ? '-' : $data->type->name}}</h5>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Contact Person</label>
          <h5 class="viewModalText">{{$data->contact_person}}</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Contact Person Mobile#</label>
          <h5 class="viewModalText">{{$data->contact_person_mobile}}</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Status</label><br>
          @switch($data->status)
            @case('1')
              <label class="badge badge-success">Active</label>
              @break

            @case('0')
              <label class="badge badge-danger">In-Active</label>
              @break
          @endswitch
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
          <h5 class="viewModalText">{{$data->shop_no}}</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Building/Floor</label>
          <h5 class="viewModalText">{{$data->building_floor}}</h5>
        </div>
      </div>
      <div class="col-md-4"></div>


      <div class="col-md-4">
        <div class="form-group">
          <label>Country</label>
          <h5 class="viewModalText">{{empty($data->country) ? '-' : $data->country->name}}</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>State</label>
          <h5 class="viewModalText">{{empty($data->state) ? '-' : $data->state->name}}</h5>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Zone</label>
          <h5 class="viewModalText">{{empty($data->zone) ? '-' : $data->zone->name}}</h5>
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
          <p class="viewModalText">{{$data->description}}</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Special Remarks</label>
          <p class="viewModalText">{{$data->special_remarks}}</p>
        </div>
      </div>
    </div>
  </div>