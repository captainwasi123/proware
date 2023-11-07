@foreach($data as $key => $val)
	<tr>
        <td>{{++$key}}</td>
        <td><img src="{{URL::to('/public/storage/products/'.$val->image)}}" height="30px">&nbsp; <strong>{{$val->name}}</strong></td>
        <td>{{empty($val->brand) ? '-' : $val->brand->name}}</td>
        <td>{{empty($val->category) ? '-' : $val->category->name}}</td>
        <td>{{number_format($val->price)}} AED</td>
        <td>{{number_format($val->discount)}}%</td>
        <td>0</td>
        <td>
        	@switch($val->status)
        		@case('1')
        			<label class="badge badge-success">Available</label>
        			@break

        		@case('2')
        			<label class="badge badge-danger">Unavailable</label>
        			@break
        	@endswitch
        </td>
        <td class="text-right">
          <a href="javascript:void(0)" class="btn btn-sm btn-info editProduct" data-id="{{base64_encode($val->id)}}"><i class="fas fa-edit"></i></a>
          <a href="javascript:void(0)" class="btn btn-sm btn-danger deleteProduct" data-id="{{base64_encode($val->id)}}"><i class="fas fa-trash"></i></a>
        </td>
     </tr>
@endforeach