{!! Form::open([
    'action' => 'GradePlayerController@search',
    'method' => 'get',
    'class' => 'navbar-form navbar-right'
]) !!}

<div class="input-group">
    {!! Form::text('q', null, ['class' => 'form-control','placeholder' => 'Search Player List']) !!}
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Search</button>
    </span>
</div>

{!! Form::close() !!}