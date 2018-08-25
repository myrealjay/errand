@extends('layouts.backend')

@section('content')
<div class="container">
    
    <!-- <h1>PAYMENT INFO</h1>
    <P>From : {{$total->from_location}}</P>
    <P>To : {{$total->to_location}}</P>
    <p>Description : {{$total->description}}</P>
    <p>Price : &#x20a6; {{$total->price}}</p>
    <button class="btn btn-success">PAY</button> -->

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
            <input type="hidden" name="email" value="test@gmail.com">

            <input type="hidden" name="orderID" value="{{$total->orderID}}">
            <input type="hidden" name="amount" value="{{$total->price_kobo}}"> {{-- required in kobo --}}
            <input type="hidden" name="quantity" value="3">
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
    
</div>
@endsection
