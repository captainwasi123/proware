@foreach($data as $key => $val)

    <tr>
        <td>{{++$key}}</td>
        <td>{{$val->name}}</td>
        <td>{{empty($val->email) ? '-' : $val->email}}</td>
        <td>{{$val->mobile}}</td>
        <td>{{empty($val->zone) ? '-' : $val->zone->name}}</td>
        <td>0</td>
        <td>0</td>
        <td class="text-right">
          <a href="javascript:void(0)" class="btn btn-sm btn-default viewCustomer" data-id="{{base64_encode($val->id)}}"><i class="fas fa-eye"></i></a>
          <a href="javascript:void(0)" class="btn btn-sm btn-info editCustomer" data-id="{{base64_encode($val->id)}}"><i class="fas fa-edit"></i></a>
          <a href="javascript:void(0)" class="btn btn-sm btn-danger deleteCustomer" data-id="{{base64_encode($val->id)}}"><i class="fas fa-trash"></i></a>
        </td>
    </tr>

@endforeach