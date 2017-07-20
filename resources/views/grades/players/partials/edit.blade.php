{!! Form::model($players,['route' => ['grades.players.update', $grade->id, $players->id], 'method' => 'put', 'class' => 'hide edit-object-form' ]) !!}

@include('grades.players.partials.player_form')

<button type="submit" class="btn btn-info">Update Player</button>

{!! Form::close() !!}

