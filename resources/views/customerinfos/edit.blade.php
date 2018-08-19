@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Customerinfo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($customerinfo, ['route' => ['customerinfos.update', $customerinfo->id], 'method' => 'patch']) !!}

                        @include('customerinfos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection