@extends('layouts.backend')

@section('content')
<div class="container">
	<p style="text-align:center"> <b>YOUR LOGS</b></p>
	<div class="table-responsive"> 
@if($logs->count() > 0)      
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>From</th>
        <th>To</th>
        <th>OrderID</th>
        <th>Date</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
      @foreach($logs as $log)
      <tr>
        <td>.</td>
        <td>{{$log->from_location}}</td>
        <td>{{$log->to_location}}</td>
        <td>{{$log->orderID}}</td>
        <td>{{$log->created_at->diffForHumans()}}</td>
        <td> &#x20a6; {{number_format($log->price)}}</td>
       </tr>
      @endforeach
    
       
    </tbody>
  </table>
    @else
  <p style="text-align:center">You have no logs yet</p>
    @endif
  </div>
</div>
@endsection

