@extends('layouts.template')

@section('content')
<div class="col-md-12 lg-bg">
    <div class="col-sm-12 reg-space"></div>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"></div>
                    <!--
                <div class="panel-body w3-panel w3-border w3-round-xlarge w3-border-indigo frm  w3-topbar w3-bottombar w3-rightbar w3-leftbar w3-hover-border-sand">-->
                <div class="frm w3-panel formbg">    
                    <h3 class="text-center boldm">Become a Driver</h3>
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
                    <form class="form-horizontal" method="POST" action="{{ url('/driver/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}">
                            <label for="f_name" class="col-md-12 control-label boldm">First Name</label>

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
                            <label for="l_name" class="col-md-12 control-label boldm">Last Name</label>

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
                            <label for="phone_no" class="col-md-12 control-label boldm">Phone Number</label>

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
                            <label for="email" class="col-md-12 control-label boldm">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-12 control-label boldm">Address</label>

                            <div class="col-md-12">
                                <input id="address" type="address" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('d_o_b') ? ' has-error' : '' }}">
                            <label for="d_o_b" class="col-md-12 control-label boldm"> D.O.B</label>

                            <div class="col-md-12">
                                <input id="d_o_b" type="date" class="form-control" name="d_o_b" value="{{ old('d_o_b') }}" required>

                                @if ($errors->has('d_o_b'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('d_o_b') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary w3-button w3-blue w3-border w3-border-white w3-round-large">
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
