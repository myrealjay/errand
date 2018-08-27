@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 w3-sand col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h5>Update Your Profile</h5></div>
                <div class="col-md-12 row">
                    <div class="col-md-6">
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
                            <form class="form-horizontal" method="POST" action="{{ url('/customer/update') }}" autocomplete="off">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('f_name') ? ' has-error' : '' }}">
                                    <label for="f_name" class="col-md-4 control-label">First Name</label>

                                    <div class="col-md-12">
                                        <input id="f_name" type="text" class="form-control" name="f_name" value="{{ $user->f_name }}" required autofocus>

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
                                        <input id="l_name" type="text" class="form-control" name="l_name" value="{{ $user->l_name }}" required autofocus>

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
                                        <input id="phone_no" type="text" class="form-control" name="phone_no" value="{{ $user->phone_no }}" required autofocus>

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
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

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
                                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                        <input type="password" class="form-control"  name="password">

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                        <!-- <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 req"></div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
