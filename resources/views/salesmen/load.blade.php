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
          <input type="checkbox" class="custom-control-input statusSalesman" data-id="{{base64_encode($val->id)}}" {{$val->is_active == '1' ? 'checked' : ''}} id="is_active{{$val->id}}">
          <label class="custom-control-label" for="is_active{{$val->id}}"></label>
        </div>
      </div>
    </td>
    <td class="text-right">
      <a href="javascript:void(0)" class="btn btn-sm btn-info editSalesman" data-id="{{base64_encode($val->id)}}"><i class="fas fa-edit"></i></a>
      <a href="javascript:void(0)" class="btn btn-sm btn-danger deleteSalesman" data-id="{{base64_encode($val->id)}}"><i class="fas fa-trash"></i></a>
    </td>
</tr>

@endforeach

@if(count($data) == 0)
	<tr><td colspan="9" class="text-center">No Record Found.</td></tr>
@endif