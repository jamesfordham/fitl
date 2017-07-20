<h3>Add a Player</h3>
{!! Form::open(['route'=> ['grades.players.store',$grade->id]]) !!}

@include('grades.players.partials.player_form')

<button type = "submit" class="btn btn-success">Add Player</button>

{!! Form::close() !!}