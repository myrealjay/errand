@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2 w3-sand">
            <div class="panel panel-primary">
                <div class="panel-heading"><h5>Request An Errand</h5></div>

                <div class="panel-body row">
                    <div class="col-md-6">
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        @if(count($errors) > 0)
                        <div class="alert alert-warning">
                            <ul>
                                @foreach($errors->all() as $error)
                                {{ $error }}<br>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ url('/customer/request') }}">
                            {{ csrf_field() }}
                            <input id="customerid" type="hidden" class="form-control" name="customerid" value="{{\App\Customerinfo::find(Session::get('loggedin'))->id}}" required autofocus>

                            <div class="form-group{{ $errors->has('from_location') ? ' has-error' : '' }}">
                                <label for="from_location" class="col-md-4 control-label">From</label>

                                <div class="col-md-12">
                                    <input id="from_location" type="text" class="form-control" placeholder="Enter the address..." name="from_location" value="{{ old('from_location') }}" required autofocus>

                                    @if ($errors->has('from_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('from_location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('to_location') ? ' has-error' : '' }}">
                                <label for="to_location" class="col-md-4 control-label">To</label>

                                <div class="col-md-12">
                                    <input id="to_location" type="text" class="form-control" name="to_location" placeholder="Enter the address..." value="{{ old('to_location') }}" required autofocus>

                                    @if ($errors->has('to_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to_location') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contact_person') ? ' has-error' : '' }}">
                                <label for="contact_person" class="col-md-4 control-label"> Contact Person</label>

                                <div class="col-md-12">
                                    <input id="contact_person" type="text" class="form-control" name="contact_person" placeholder="The Contact Person..." value="{{ old('contact_person') }}" required autofocus>

                                    @if ($errors->has('contact_person'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_person') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
                                <label for="contact_phone" class="col-md-4 control-label"> Contact Phone</label>

                                <div class="col-md-12">
                                    <input id="contact_phone" type="text" class="form-control" name="contact_phone" placeholder="The Contact Phone..." value="{{ old('contact_phone') }}" required autofocus>

                                    @if ($errors->has('contact_phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-12">
                                    <textarea id="description" type="text" rows="5" class="form-control" placeholder="Describe the errand in details, including the contact ID of whom to meet at each location(If applicable)." name="description" required></textarea>

                                    @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('trip_type') ? ' has-error' : '' }}">
                                <label for="trip_type" class="col-md-4 control-label">Trip Type</label>

                                <div class="col-md-12">

                                    <select id="trip_type" class="form-control" name="trip_type" required>
                                       <option value="1">One-way</option>
                                       <option value="2">Two-way</option>
                                   </select>
                                   @if ($errors->has('trip_type'))
                                   <span class="help-block">
                                    <strong>{{ $errors->first('trip_type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    GET PRICE
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <!-- <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253682.45932704344!2d3.143871932504559!3d6.548376809545975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos!5e0!3m2!1sen!2sng!4v1535366635432" height="550" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                    <div id="map" style="height: 100%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
