@foreach($data as $val)
<tr>
  <td>{{sprintf("%'.05d\n", $val->id)}}</td>
  <td>{{date('d-M-Y', strtotime($val->created_at))}}</td>
  <td>{{$val->customer->name}}</td>
  <td>{{$val->customer->zone->name}}</td>
  <td>{{$val->salesman->name}}</td>
  <td>{{count($val->products)}}</td>
  <td>
    @switch($val->status)
      @case('1')
        <label class="badge badge-primary">Pending</label>
        @break

      @case('2')
        <label class="badge badge-success">Delivered</label>
        @break

      @case('3')
        <label class="badge badge-warning">Cancelled</label>
        @break

      @case('4')
        <label class="badge badge-danger">Rejected</label>
        @break
      @endswitch
  </td>
  <td class="text-right">
    <a href="javascript:void(0)" class="btn btn-sm btn-default viewOrder" data-id="{{$val->id}}"><i class="fas fa-eye"></i></a>
    <a href="javascript:void(0)" class="btn btn-sm btn-info editOrder" data-id="{{$val->id}}"><i class="fas fa-edit"></i></a>
    <!-- <a href="javascript:void(0)" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a> -->
  </td>
</tr>
@endforeach
@if(count($data) == 0)
  <tr>
    <td colspan="7">No Result Found.</td>
  </tr>
@endif