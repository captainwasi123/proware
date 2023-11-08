<form id="editCustomerForm" action="{{route('customers.update')}}">
  @csrf
  <input type="hidden" name="customer_id" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Customer</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-5">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="{{$data->name}}" required>
        </div>
      </div>
      <div class="col-md-7">
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="{{$data->email}}">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Landline#</label>
          <input type="text" class="form-control" name="landline" value="{{$data->landline}}">
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Mobile#</label>
          <input type="text" class="form-control" name="mobile" value="{{$data->mobile}}" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Customer Type</label>
          <select class="form-control" name="customer_type" required>
            @foreach($customer_type as $val)
              <option value="{{$val->id}}" {{$data->customer_type == $val->id ? 'selected' : ''}}>{{$val->name}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>Contact Person</label>
          <input type="text" class="form-control" name="contact_person" value="{{$data->contact_person}}" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Contact Person Mobile#</label>
          <input type="text" class="form-control" name="contact_person_mobile" value="{{$data->contact_person_mobile}}" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" required>
            <option value="1" {{$data->status == '1' ? 'selected' : ''}}>Active</option>
            <option value="0" {{$data->status == '0' ? 'selected' : ''}}>In-Active</option>
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
          <input type="text" class="form-control" name="shop_no" value="{{$data->shop_no}}" required>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Building/Floor</label>
          <input type="text" class="form-control" name="building_floor" value="{{$data->building_floor}}" required>
        </div>
      </div>
      <div class="col-md-4"></div>


      <div class="col-md-4">
        <div class="form-group">
          <label>Country</label>
          <select class="form-control form-control-lg select2 countryField" name="country_id" required>
            @foreach($countries as $val)
              <option value="{{$val->id}}" {{$data->country_id == $val->id ? 'selected' : ''}}>{{$val->name}}</option>
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
              <option value="{{$val->id}}" {{$data->state_id == $val->id ? 'selected' : ''}}>{{$val->name}}</option>
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
              <option value="{{$val->id}}" {{$data->zone_id == $val->id ? 'selected' : ''}}>{{$val->name}}</option>
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
          <textarea class="form-control" rows="5" name="description">{{$data->description}}</textarea>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Special Remarks</label>
          <textarea class="form-control" rows="5" name="special_remarks">{{$data->special_remarks}}</textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
</form>