@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Request An Errand</div>

                <div class="panel-body">
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

                            <div class="col-md-6">
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

                            <div class="col-md-6">
                                <input id="to_location" type="text" class="form-control" name="to_location" placeholder="Enter the address..." value="{{ old('to_location') }}" required autofocus>

                                @if ($errors->has('to_location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to_location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('to_location2') ? ' has-error' : '' }}">
                            <label for="to_location2" class="col-md-4 control-label">To (Optional)</label>

                            <div class="col-md-6">
                                <input id="to_location2" type="text" class="form-control" name="to_location2" placeholder="Enter the address..." value="{{ old('to_location2') }}" required autofocus>

                                @if ($errors->has('to_location2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('to_location2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
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

                            <div class="col-md-6">
                                
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
            </div>
        </div>
    </div>
</div>
@endsection
