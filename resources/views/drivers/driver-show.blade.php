@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Driver Details
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <!-- Id Field -->
                    <div class="form-group">
                        {!! Form::label('id', 'Id:') !!}
                        <p>{!! $driver->id !!}</p>
                    </div>

                    <!-- F Name Field -->
                    <div class="form-group">
                        {!! Form::label('f_name', 'F Name:') !!}
                        <p>{!! $driver->f_name !!}</p>
                    </div>

                    <!-- L Name Field -->
                    <div class="form-group">
                        {!! Form::label('l_name', 'L Name:') !!}
                        <p>{!! $driver->l_name !!}</p>
                    </div>

                    <!-- Phone No Field -->
                    <div class="form-group">
                        {!! Form::label('phone_no', 'Phone No:') !!}
                        <p>{!! $driver->phone_no !!}</p>
                    </div>

                    <!-- Email Field -->
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        <p>{!! $driver->email !!}</p>
                    </div>

                    <!-- Address Field -->
                    <div class="form-group">
                        {!! Form::label('address', 'Address:') !!}
                        <p>{!! $driver->address !!}</p>
                    </div>

                    <!-- D O B Field -->
                    <div class="form-group">
                        {!! Form::label('d_o_b', 'D O B:') !!}
                        <p>{!! $driver->d_o_b !!}</p>
                    </div>

                    <!-- Created At Field -->
                    <div class="form-group">
                        {!! Form::label('created_at', 'Created At:') !!}
                        <p>{!! $driver->created_at !!}</p>
                    </div>

                    <!-- Updated At Field -->
                    <div class="form-group">
                        {!! Form::label('updated_at', 'Updated At:') !!}
                        <p>{!! $driver->updated_at !!}</p>
                    </div>


                    <a href="/driver-request" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
