@extends('layouts.backend')
@section('content')
<div class="container">
	<p style="text-align:center"> TRACK YOUR ERRANDS </p>
	@if($tracker->count() > 0)      
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>OrderID</th>
        <th>Status</th>
        <th>Driver's Phone</th>
        <th>Driver's Name</th>
        <th>Driver's Image</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tracker as $log)
      <tr>
        <td>.</td>
        <td>{{$log->orderID}}</td>
        <td><p style="color:green">Ongoing ...</p></td>
        <td>{{\App\Models\Driver::find($log->driverID)->phone_no}}</td>
        <td>{{\App\Models\Driver::find($log->driverID)->f_name}}</td>
        <td><img src="{{\App\Models\Driver::find($log->driverID)->picture}}" width="100"></td>
        <td>{{$log->created_at->diffForHumans()}}</td>
       </tr>
      @endforeach
    
       
    </tbody>
  </table>
  
  @else
    <p style="text-align:center">You currently have no errand...</p>
    <div class="idlediv">
      <img src="{{asset ('/images/sand-timer.png') }}" width="100%" height="width" class="daps-rotate" >
    </div>
  @endif
</div>
@endsection
