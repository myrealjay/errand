@extends('layouts.driverboard')

@section('content')
<div class="container">
  <p>YOUR PROFILE</p>
	<div class="row">
   <div class="col-sm-6">
     <img src="{{$user->picture}}" width="500">
   </div>
   <div class="col-sm-6">
    <p><b>First Name: {{$user->f_name}} </b></p>
    <p><b>Last Name : {{$user->l_name}} </b></p>
    <p><b>Phone Number: {{$user->phone_no}} </b></p>
    <p><b>Email : {{$user->email}} </b></p>
    <p><b>Bank Name : {{$user->bank_name}} </b></p>
    <p><b>Bank Account : {{$user->bank_account}} </b></p>
    <p><b>State : {{$user->state}} </b></p>
    <p><b>D.O.B : {{$user->d_o_b}} </b></p>
    <p><b>Nationality : {{$user->nationality}} </b></p>
    @if($user->status == 0)
    <p><b>Status : </b><b style="color:blue">Available for Service</b> </p>
    @else
    <p><b>Status : </b><b style="color:red">Unavailable for Service</b></p>
    @endif
  </div>   
</div>
@endsection
