@extends('layouts.master')

@section('title', 'Briars Grades EDIT existing Grade')

@section('content')

    <div class="page-header">
        <h1>What info are you editing?</h1>
    </div>
    {!! Form::model($grades, ['action' => ['GradesController@update', $grades->id], 'method' => 'put']) !!}

    @include('grades.partials.object_form')

    <button class="btn btn-success" type="submit">Update the Grade</button>

    {!! Form::close() !!}

    @include('grades.partials.delete_object')

@endsection