@extends('layouts.driverboard')

@section('content')
<div class="container">
	<p style="text-align:center"> CURRENT TASK </p>
  @if($tracker->count() > 0)      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>OrderID</th>
        <th>Status</th>
        <th>Contact's Phone</th>
        <th>Contact's Name</th>
        <th>From Location</th>
        <th>To Location</th>
        <th>Complete Trip</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tracker as $log)
      <tr>
        <td>.</td>
        <td>{{$log->orderID}}</td>
        <td><p style="color:green">Ongoing ...</p></td>
        @foreach(\App\CustomerRecord::where('orderID',$log->orderID)->get() as $contact)
        <td>{{$contact->contact_phone}}</td>
        <td>{{$contact->contact_person}}</td>
        <td>{{$contact->from_location}}</td>
        <td>{{$contact->to_location}}</td>
        @endforeach
        <td><a href="/complete/{{$log->orderID}}" class="btn btn-info">Click to complete</a></td>
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
