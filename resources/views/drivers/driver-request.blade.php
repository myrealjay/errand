@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Drivers Request</h1>
        <!-- <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('drivers.create') !!}">Add New</a>
        </h1> -->
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-responsive" id="drivers-table">
    <thead>
        <tr>
        <th>F Name</th>
        <th>L Name</th>
        <th>Phone No</th>
        <th>Email</th>
        <th>D.O.B</th>
        <th>Address</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach(\App\DriversForm::all() as $driver)
        <tr>
            <td>{!! $driver->f_name !!}</td>
            <td>{!! $driver->l_name !!}</td>
            <td>{!! $driver->phone_no !!}</td>
            <td>{!! $driver->email !!}</td>
            <td>{!! $driver->d_o_b !!}</td>
            <td>{!! $driver->address !!}</td>
            <!-- <td>{!! $driver->status !!}</td> -->
            <td>
                @if($driver->status == 0)
                <p style="color:red">Pending <a href="driver-update/{{$driver->id}}" class='btn btn-primary'>Click 2 update</a></p>
                @elseif($driver->status == 1)
                <p style="color:green">Approved</p>
                @else
                <p style="color:brown">Rejected</p>
                @endif
            </td>
            <!-- <td>{!! $driver->password !!}</td> -->
            <td>
                {!! Form::open(['url' => ['driver-delete/'.$driver->id], 'method' => 'post']) !!}
                <div class='btn-group'>
                    <a href="driver-show/{{$driver->id}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="driver-update/{{$driver->id}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

