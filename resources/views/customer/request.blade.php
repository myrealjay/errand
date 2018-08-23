@extends('layouts.backend')

@section('content')
<div class="container" style="padding-top: 50px;">
    <h5 style="text-align: center">Type of Trip</h5>
    <div class="row">
        <select class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option value="">Select Trip Type</option>
                <option value="/singleway">One-way/Two-way Trip</option>
                <option value="/multiway">Multi-way Trip</option>
        </select>
    </div>
</div>
@endsection
