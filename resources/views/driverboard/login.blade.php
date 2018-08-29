@extends('layouts.template')

@section('content')
<div class="col-md-12 lg-bg">
    <div class="col-sm-12 login-space"></div>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"></div>
                    <!--
                <div class="panel-body frm w3-panel w3-border w3-round-xlarge w3-border-deep-purple w3-topbar w3-bottombar w3-rightbar w3-leftbar w3-hover-border-sand">-->
                <div class="frm w3-panel formbg"> 
                            <h3 class="text-center boldm">Driver's Login</h3>
                            <div class="text-center">
                                <!--::::::::::THE LOGIN BUTTON::::::::::::-->
                                <button class="frm w3-btn w3-border w3-border-white boldm" onclick="toggle('MAY')">Login with email</button>
                                <button class="frm w3-btn w3-border w3-border-white boldm" onclick="toggle('JUNE')">Login with phone</button>
                            </div>
                            <p>&nbsp;</p>
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
                            <div class="div-toggle" style="display:block;" id="MAY">
                                <form class="form-horizontal" method="POST" action="{{ url('/driver/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label boldm">E-Mail Address</label>

                                        <div class="col-md-12">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label boldm">Password</label>

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
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary w3-button w3-blue w3-border w3-border-white w3-round-large">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--:::::::::THE SECOND DIV::::::::-->
                            <div class="div-toggle" style="display:none;" id="JUNE"> 
                                <form class="form-horizontal" method="POST" action="{{ url('/driver/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Phone Number</label>

                                        <div class="col-md-12">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary w3-button w3-indigo w3-border w3-border-white w3-round-large">
                                                Login
                                            </button>

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--:::::::::THE SECOND DIV::::::::-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 login-space"></div>
        </div>
        <script type="text/javascript">
            var divs = document.getElementsByClassName('div-toggle');

            function toggle(id) {
                for (var i = 0; i < divs.length; i++) {
                  var div = divs[i];
                  if (div.id == id)
                    div.style.display = 'block';
                else
                    div.style.display = 'none';
            }
        }
    </script>
    @endsection
