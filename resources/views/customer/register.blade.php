@extends('layouts.template')

@section('content')
<div class="col-md-12 lg-bg">
    <div class="col-sm-12 reg-space"></div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"></div>

                <div class="panel-body w3-panel w3-border w3-round-xlarge w3-border-yellow w3-amber w3-topbar w3-bottombar w3-rightbar w3-leftbar w3-hover-border-sand">
                    <h3 class="text-center">Customer Registration</h3>
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
                    <form class="form-horizontal" method="POST" action="{{ url('/customer/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}">
                            <label for="f_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-12">
                                <input id="f_name" type="text" class="form-control" name="f_name" value="{{ old('f_name') }}" required autofocus>

                                @if ($errors->has('f_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('f_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('l_name') ? ' has-error' : '' }}">
                            <label for="l_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-12">
                                <input id="l_name" type="text" class="form-control" name="l_name" value="{{ old('l_name') }}" required autofocus>

                                @if ($errors->has('l_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('l_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
                            <label for="phone_no" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-12">
                                <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ old('phone_no') }}" required autofocus>

                                @if ($errors->has('phone_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary w3-button w3-yellow w3-border w3-border-white w3-round-large">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 reg-space"></div>
</div>
@endsection
