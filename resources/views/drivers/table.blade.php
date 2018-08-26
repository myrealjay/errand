<table class="table table-responsive" id="drivers-table">
    <thead>
        <tr>
            <th>F Name</th>
        <th>L Name</th>
        <th>Phone No</th>
        <th>Email</th>
       <!--  <th>Password</th> -->
        <th>Address</th>
        <th>Status</th>
        <th>Driver's Image</th>
        <!-- <th>Next Of Kin</th>
        <th>Next Address</th>
        <th>Bank Name</th>
        <th>Bank Account</th>
        <th>State</th>
        <th>D O B</th>
        <th>Nationality</th>
        <th>Lga</th> -->
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($drivers as $driver)
        <tr>
            <td>{!! $driver->f_name !!}</td>
            <td>{!! $driver->l_name !!}</td>
            <td>{!! $driver->phone_no !!}</td>
            <td>{!! $driver->email !!}</td>
            <!-- <td>{!! $driver->password !!}</td> -->
            <td>{!! $driver->address !!}</td>
            @if($driver->status == 0)
            <td><p style="color:red">Inactive</p></td>
            @else
            <td><p style="color:blue">Active</p></td>
            @endif
            <td><img src="{!! $driver->picture !!}" width="100"></td>
            <!-- <td>{!! $driver->next_of_kin !!}</td>
            <td>{!! $driver->next_address !!}</td>
            <td>{!! $driver->bank_name !!}</td>
            <td>{!! $driver->bank_account !!}</td>
            <td>{!! $driver->state !!}</td>
            <td>{!! $driver->d_o_b !!}</td>
            <td>{!! $driver->nationality !!}</td>
            <td>{!! $driver->lga !!}</td> -->
            <td>
                {!! Form::open(['route' => ['drivers.destroy', $driver->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('drivers.show', [$driver->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('drivers.edit', [$driver->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>