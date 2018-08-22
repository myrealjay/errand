@extends('layouts.backend')

@section('content')
<div class="container">
    
    <h1>PAYMENT INFO</h1>
    <P>From : {{$total->from_location}}</P>
    <P>To : {{$total->to_location}}</P>
    <P>To(Optional) : {{$total->to_location2}}</P>
    <p>Description : {{$total->description}}</P>
    <p>Price : {{$total->price}}</p>
    
</div>
@endsection
