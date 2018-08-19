@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Driver
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($driver, ['route' => ['drivers.update', $driver->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('drivers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection