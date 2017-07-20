@extends('layouts.master')

@section('title', 'Briars Grades create New Grade')

@section('content')

<div class="page-header">
    <h1>What Briars Grade needs to be added?</h1>
</div>
{!! Form::model($grade, ['action' => 'GradesController@store']) !!}

@include('grades.partials.object_form')

<button class="btn btn-success" type="submit">Add Grade</button>

{!! Form::close() !!}
@endsection