@foreach($data as $val)
<tr>
  <td>{{$val->id}}</td>
  <td>{{date('d-M-Y', strtotime($val->created_at))}}</td>
  <td>Aster Pharmacy</td>
  <td>Khalidya</td>
  <td>xyz</td>
  <td>8</td>
  <td class="text-right">
    <a href="javascript:void(0)" class="btn btn-sm btn-default"><i class="fas fa-eye"></i></a>
    <a href="javascript:void(0)" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
    <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
  </td>
</tr>
@endforeach