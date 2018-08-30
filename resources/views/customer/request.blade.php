@extends('layouts.backend')

@section('content')
<div class="col-sm-12 row bgground">
    <div class="col-sm-4 "></div>
    <div class="col-sm-4">
        <div class="container" style="padding-top: 50px;">
            <h5 style="text-align: center">Type of Trip</h5>
            <div class="row">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @elseif(session()->has('notice'))
                <div class="alert alert-info">
                    {{ session()->get('notice') }}
                </div>
                @else
                <select class="form-control bground" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                    <option value="">Select Trip Type</option>
                    <option value="/singleway">One-way/Two-way Trip</option>
                    <option value="/multiway">Multi-way Trip</option>
                </select>
                @endif
                
            </div>
        </div>
    </div>
    <div class="col-sm-12 req-spa"></div>
</div>
@endsection
