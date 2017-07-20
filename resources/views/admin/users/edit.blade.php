@extends('layouts.admin')

@section('title', 'Briars Grades EDIT existing Player')

@section('content')

    <div class="page-header">
        <h1>Edit Player Information</h1>
    </div>
    {!! Form::model($user, ['action' => ['Admin\UserController@update', $user->id], 'method' => 'put']) !!}

    @include('admin.users.partials.object_form')

    <button class="btn btn-success" type="submit">Update the Player</button>

    {!! Form::close() !!}

    @include('admin.users.partials.delete_object')

@endsection