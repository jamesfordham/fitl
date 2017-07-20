<hr>

<h2>Delete this Player?</h2>

{!! Form::open(['action'=>['Admin\UserController@destroy', $user->id],'method'=>'delete', 'class'=>'delete-object']) !!}

<button type="submit" class="btn btn-danger">Delete Player?</button>

{!! Form::close() !!}