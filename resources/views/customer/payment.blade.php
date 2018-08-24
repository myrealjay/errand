@extends('layouts.backend')

@section('content')
<div class="container">
    
    <h1>PAYMENT INFO</h1>
    <P>From : {{$total->from_location}}</P>
    <P>To : {{$total->to_location}}</P>
    <p>Description : {{$total->description}}</P>
    <p>Price : &#x20a6; {{$total->price}}</p>
    <button class="btn btn-success">PAY</button>
    
</div>
@endsection
