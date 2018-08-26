@extends('layouts.backend')

@section('content')
<div class="container">
    
    <!-- <h1>PAYMENT INFO</h1>
    <P>From : {{$total->from_location}}</P>
    <P>To : {{$total->to_location}}</P>
    <p>Description : {{$total->description}}</P>
    <p>Price : &#x20a6; {{$total->price}}</p>
    <button class="btn btn-success">PAY</button> -->
    @php ($x = \App\Customerinfo::find(Session::get('loggedin'))->authorization_code)
   
@if($x == NULL)
    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    <h1> PAYMENT INFO </h1>
				    <P>From : {{$total->from_location}}</P>
				    <P>To : {{$total->to_location}}</P>
				    <p>Description : {{$total->description}}</P>
                    <p>Price : &#x20a6; {{$total->price}}</p>
                    <p>Order ID : {{$total->orderID}}</p>
                </div>
            </p>
            <input type="hidden" name="email" value="{{\App\Customerinfo::find(Session::get('loggedin'))->email}}">

            <input type="hidden" name="orderID" value="{{$total->orderID}}">
            <input type="hidden" name="amount" value="{{$total->price_kobo}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="0">
            <input type="hidden" value="{{$total->orderID}}" name="orderID">
            <input type="hidden" name="metadata" value="{{ json_encode($total) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> 

            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> 

            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
              </button>
            </p>
          </div>
        </div>
    </form>
@else
    <form method="POST" action="{{ route('paycode') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    <h1> PAYMENT INFO </h1>
                    <P>From : {{$total->from_location}}</P>
                    <P>To : {{$total->to_location}}</P>
                    <p>Description : {{$total->description}}</P>
                    <p>Price : &#x20a6; {{$total->price}}</p>
                    <p>Order ID : {{$total->orderID}}</p>
                </div>
            </p>
            <input type="hidden" name="email" value="{{\App\Customerinfo::find(Session::get('loggedin'))->email}}">
            <input type="hidden" name="from_location" value="{{$total->from_location}}">
            <input type="hidden" name="to_location" value="{{$total->to_location}}">
            <input type="hidden" name="contact_person" value="{{$total->contact_person}}">
            <input type="hidden" name="contact_phone" value="{{$total->contact_phone}}">
            <input type="hidden" name="description" value="{{$total->description}}">
            <input type="hidden" name="trip_type" value="{{$total->trip_type}}">
            <input type="hidden" name="price" value="{{$total->price}}">
            <input type="hidden" name="orderID" value="{{$total->orderID}}">
            <input type="hidden" name="amount" value="{{$total->price_kobo}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="0">
            <input type="hidden" value="{{$total->orderID}}" name="orderID">
            <input type="hidden" name="metadata" value="{{ json_encode($total) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> 

            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> 

            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!!
              </button>
            </p>
          </div>
        </div>
    </form>
@endif
</div>
@endsection
