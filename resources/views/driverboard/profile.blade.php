@extends('layouts.driverboard')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="container w3-light-grey w3-padding-16">
  <p><h5>YOUR PROFILE</h5></p>
  <div class="row">
   <div class="col-sm-6">
    @if(session()->has('update'))
    <div class="alert alert-success">
      {{ session()->get('update') }}
    </div>
    @endif
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
    @if($user->status == 0)
    <p><b>Status : </b><b style="color:blue">Available for Service</b> </p>
    @else
    <p><b>Status : </b><b style="color:red">Unavailable for Service</b></p>
    @endif
  </div>
  <div class="col-sm-6">
    <p style="color:green"> Change Availability ?</p>
    <form method="post" action="/driver/update">
      {{csrf_field()}}
      <select class="form-control" name="status">
        <option value="0">Available For Hire</option>
        <option value="1">Not Available for Hire</option>
      </select>
      <p></p>
      <input type="submit" value="submit" class="btn btn-success">
    </form>

  </div> 
</div>
<br/> 
<br/>
@endsection
