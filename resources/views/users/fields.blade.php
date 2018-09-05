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

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_no', 'Phone No:') !!}
    {!! Form::text('phone_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::text('role', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    <select name="role" class="form-control">
     <option value="" disabled selected >User Role</option>
     <option value="0">Driver</option>
     <option value="1">Super Admin</option>
     <option value="2">Customer</option>
    </select>
    <!-- {!! Form::text('role', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
