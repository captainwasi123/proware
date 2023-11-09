<form id="editSalesmanForm" action="{{route('salesmen.update')}}">
  @csrf
  <input type="hidden" name="salesman_id" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Salesman </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-7">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" value="{{$data->name}}" autocomplete="off" disabled>
        </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <label>Emirates ID</label>
          <input type="text" class="form-control"  value="{{$data->eid}}" autocomplete="off" disabled>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label>D.O.B</label>
          <input type="date" class="form-control"  value="{{$data->dob}}" autocomplete="off" disabled>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Gender</label>
          <select class="form-control" autocomplete="off" disabled>
            <option {{$data->gender == 'Male' ? 'selected' : ''}}>Male</option>
            <option {{$data->gender == 'Female' ? 'selected' : ''}}>Female</option>
          </select>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>Mobile#</label>
          <input type="text" class="form-control" name="mobile" value="{{$data->mobile}}" autocomplete="off" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="{{$data->email}}" autocomplete="off" required>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" autocomplete="off">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" autocomplete="off">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Working Zone</label>
          <select class="select2 working_zone_select" multiple="multiple" name="zone_id[]" data-placeholder="Select Zones" style="width: 100%;">
            @foreach($zones as $val)
              <option value="{{$val->id}}"
                @foreach($data->zones as $zval)
                  {{$zval->zone_id == $val->id ? 'selected' : ''}}
                @endforeach
              >{{$val->name}}</option>
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