<table class="table table-responsive" id="users-table">
    <thead>
        <tr>
            <th>F Name</th>
        <th>L Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <!-- <th>Password</th> -->
        <th>Role</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->f_name !!}</td>
            <td>{!! $user->l_name !!}</td>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->phone_no !!}</td>
            <!-- <td>{!! $user->password !!}</td> -->
            <td>@if($user->role == 1)
            <p> Admin</p>
            @elseif($user->role == 2)
            <p>Customer</p>
            @else
            <p>Driver</p>
            @endif</td>
            <!-- <td>{!! $user->role !!}</td> -->
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>