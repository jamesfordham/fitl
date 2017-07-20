{!! Form::open([
    'route' => ['grades.players.destroy', $grade->id, $players->id],
    'method' => 'delete',
    'class' => 'pull-left delete-object'
    ]) !!}
&nbsp;&nbsp;<button type="submit" class="btn btn-danger btn-xs">X</button>

{!! Form::close() !!}