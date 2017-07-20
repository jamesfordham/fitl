<div class="form-group">

    {!!  Form::label('name', 'Name') !!}
    {!!  Form::text('name',null, ['class' => 'form-control']) !!}

    {!!  Form::label('email', 'Email') !!}
    {!!  Form::text('email',null, ['class' => 'form-control']) !!}

    {!!  Form::label('phone', 'Phone') !!}
    {!!  Form::text('phone',null, ['class' => 'form-control']) !!}

    {!!  Form::label('position', 'Position (GK, Defender, Mid, Striker)') !!}
    {!!  Form::text('position',null, ['class' => 'form-control']) !!}

    {!!  Form::label('nswreg', 'Nsw Rego') !!}
    {!!  Form::text('nswreg',null, ['class' => 'form-control']) !!}

    {!!  Form::label('briarsReg', 'Briars Rego') !!}
    {!!  Form::text('briarsreg',null, ['class' => 'form-control']) !!}

    {!!  Form::label('year', 'Year') !!}
    {!!  Form::date('year',null, ['class' => 'form-control']) !!}

    {!!  Form::label('gamesp', 'Games Played this season') !!}
    {!!  Form::text('gamesp',null, ['class' => 'form-control']) !!}

    {!!  Form::label('goals', 'Goals scored this season') !!}
    {!!  Form::text('goals',null, ['class' => 'form-control']) !!}

    {!!  Form::label('cardsy', 'Yellow Cards this season') !!}
    {!!  Form::text('cardsy',null, ['class' => 'form-control']) !!}

    {!!  Form::label('cardsr', 'Red Cards this season') !!}
    {!!  Form::text('cardsr',null, ['class' => 'form-control']) !!}

    {!!  Form::label('notav1', 'Unavaliable Start') !!}
    {!!  Form::date('notav1',null, ['class' => 'form-control']) !!}

    {!!  Form::label('notav2', 'Unavaliable End') !!}
    {!!  Form::date('notav2',null, ['class' => 'form-control']) !!}

</div>