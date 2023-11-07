<form id="editProductForm" action="{{route('products.update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="product_id" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Product</h4>
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
</form>