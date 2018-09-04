@extends('layouts.driverboard')

@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container w3-light-grey w3-padding-16">
  <p><h5>YOUR PROFILE</h5></p>
  <div class="row">
   <div class="col-sm-6">
=======
<div class="container">
  <p>YOUR PROFILE</p>
	<div class="row filler">
   <div class="col-md-6">
>>>>>>> 6134022642d91bdb3229641bcf77900b5079c6fa
    @if(session()->has('update'))
    <div class="alert alert-success">
      {{ session()->get('update') }}
    </div>
    @endif
<<<<<<< HEAD
    <img src="{{$user->picture}}" width="500">
  </div>
  <div class="col-sm-6">
    <p><b>First Name: <i>{{$user->f_name}} </i></b></p>
    <p><b>Last Name : <i>{{$user->l_name}} </i></b></p>
    <p><b>Phone Number: <i>{{$user->phone_no}}</i> </b></p>
    <p><b>Email : <i>{{$user->email}} </i></b></p>
    <p><b>Bank Name : <i>{{$user->bank_name}} </i></b></p>
    <p><b>Bank Account : <i>{{$user->bank_account}} </i></b></p>
    <p><b>State : <i>{{$user->state}} </i></b></p>
    <p><b>D.O.B : <i>{{$user->d_o_b}} </i></b></p>
    <p><b>Nationality : <i>{{$user->nationality}} </i></b></p>
=======
      <div class="prof-div">
        <img src="{{$user->picture}}"  style="width:100%; border-radius:50%; border:2px solid #666;"/>
      </div><br/><br/>
   </div>
   <div class="col-md-5 dataset">
    <p><b>First Name: {{$user->f_name}} </b></p>
    <p><b>Last Name : {{$user->l_name}} </b></p>
    <p><b>Phone Number: {{$user->phone_no}} </b></p>
    <p><b>Email : {{$user->email}} </b></p>
    <p><b>Bank Name : {{$user->bank_name}} </b></p>
    <p><b>Bank Account : {{$user->bank_account}} </b></p>
    <p><b>State : {{$user->state}} </b></p>
    <p><b>D.O.B : {{$user->d_o_b}} </b></p>
    <p><b>Nationality : {{$user->nationality}} </b></p>
>>>>>>> 6134022642d91bdb3229641bcf77900b5079c6fa
    @if($user->status == 0)
    <p><b>Status : </b><b style="color:blue">Available for Service</b> </p>
    @else
    <p><b>Status : </b><b style="color:red">Unavailable for Service</b></p>
    @endif
  </div>
  <div class="col-md-6">
    <p style="color:green"> Change Availability ?</p>
    <form method="post" action="/driver/update">
      {{csrf_field()}}
      <select class="form-control" name="status">
        <option value="0">Available For Hire</option>
        <option value="1">Not Available for Hire</option>
      </select>
      <p></p><br>
      <input type="submit" value="submit" class="btn btn-success">
    </form>

  </div> 
</div>
</div>
<br/> 
<br/>
@endsection
