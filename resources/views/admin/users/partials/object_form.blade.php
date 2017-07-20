<div class="form-group">
    {!! Form::label('name','Player Name') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Player Email') !!}
    {!! Form::email('email',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('role_id[]','Roles') !!}
    {!! Form::select('role_id[]', $roles, $user->roles->pluck('id')->all(), ['multiple' => true, 'class'=>'form-control'] ) !!}
</div>

