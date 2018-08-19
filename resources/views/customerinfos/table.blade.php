<table class="table table-responsive" id="customerinfos-table">
    <thead>
        <tr>
            <th>F Name</th>
        <th>L Name</th>
        <th>Phone No</th>
        <th>Email</th>
        <!-- <th>Password</th> -->
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customerinfos as $customerinfo)
        <tr>
            <td>{!! $customerinfo->f_name !!}</td>
            <td>{!! $customerinfo->l_name !!}</td>
            <td>{!! $customerinfo->phone_no !!}</td>
            <td>{!! $customerinfo->email !!}</td>
            <!-- <td>{!! $customerinfo->password !!}</td> -->
            <td>
                {!! Form::open(['route' => ['customerinfos.destroy', $customerinfo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customerinfos.show', [$customerinfo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('customerinfos.edit', [$customerinfo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>