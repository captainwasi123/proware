@foreach($data as $key => $val)

<tr>
    <td>{{++$key}}</td>
    <td>{{$val->name}}</td>
    <td>{{$val->eid}}</td>
    <td>{{date('d-m-Y', strtotime($val->dob))}}</td>
    <td>{{$val->gender}}</td>
    <td><a href="mailto:{{$val->email}}">{{$val->email}}</a></td>
    <td><a href="tel:{{$val->mobile}}">{{$val->mobile}}</a></td>
    <td>
      <div class="form-group">
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" {{$val->is_active == '1' ? 'checked' : ''}} id="is_active{{$val->id}}">
          <label class="custom-control-label" for="is_active{{$val->id}}"></label>
        </div>
      </div>
    </td>
    <td class="text-right">
      <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
      <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
      <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
    </td>
</tr>

@endforeach