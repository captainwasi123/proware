@foreach($data as $key => $val)
	<tr>
		<td>{{++$key}}</td>
		<td>{{$val->name}}</td>
		<td>0</td>
		<td class="text-right">
          <a href="javascript:void(0)" class="btn btn-sm btn-info editBrand" data-id="{{base64_encode($val->id)}}">
          	<i class="fas fa-edit"></i>
          </a>
          <a href="javascript:void(0)" class="btn btn-sm btn-danger deleteBrand" data-id="{{base64_encode($val->id)}}">
          	<i class="fas fa-trash"></i>
          </a>
		</td>
	</tr>
@endforeach