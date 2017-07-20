@extends('layouts.master')

@section('title', 'Briars Grades')

@section('content')
<div class="page-header">
    <h1>Briars Playing Grades</h1>
    <a href="{{ url('grades/create') }}" class="btn btn-success pull right">+ Grade</a>
</div>

<div class="list-group">
@foreach  ($grade as $grades)
    <a href="{{ url('grades', [$grades->id]) }}" class="list-group-item">
    <h2 class="list-group-item-heading">{{ $grades->grade }}</h2>
    </a>
@endforeach
</div>

@include('grades.players.partials.players')
@endsection