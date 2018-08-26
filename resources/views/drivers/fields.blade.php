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

<!-- Password Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Status -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <select name="status" class="form-control">
     <option value="" disabled selected >Select Status</option>
     <option value="1">Active</option>
     <option value="0">Inactive</option>
    </select>
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('picture', 'Picture:') !!}
    <!-- {!! Form::file('picture', null, ['class' => 'form-control']) !!} -->
    <input type="file" name="picture" class="form-control inline">
</div>

<!-- Next Of Kin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_of_kin', 'Next Of Kin:') !!}
    {!! Form::text('next_of_kin', null, ['class' => 'form-control']) !!}
</div>

<!-- Next Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_address', 'Next Address:') !!}
    {!! Form::text('next_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account', 'Bank Account:') !!}
    {!! Form::text('bank_account', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- D O B Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d_o_b', 'D O B:') !!}
    {!! Form::date('d_o_b', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Lga Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lga', 'Lga:') !!}
    {!! Form::text('lga', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('drivers.index') !!}" class="btn btn-default">Cancel</a>
</div>
