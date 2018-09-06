@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Driver Request Page {{$driver->id}}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($driver, ['url' => ['driver-update/'.$driver->id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                               <!-- F Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('f_name', 'F Name:') !!}
                {!! Form::text('f_name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- L Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('l_name', 'L Name:') !!}
                {!! Form::text('l_name', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Phone No Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('phone_no', 'Phone No:') !!}
                {!! Form::text('phone_no', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Email Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>



            <!-- Status -->
            <div class="form-group col-sm-6">
                {!! Form::label('status', 'Status:') !!}
                <select name="status" class="form-control">
                 <option value="" disabled selected >Select Status</option>
                 <option value="1">Approved</option>
                 <option value="2">Rejected</option>
                </select>
            </div>

            <!-- Address Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>

            <!-- D O B Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('d_o_b', 'D O B:') !!}
                {!! Form::date('d_o_b', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{!! route('drivers.index') !!}" class="btn btn-default">Cancel</a>
            </div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection