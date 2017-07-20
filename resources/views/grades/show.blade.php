@extends('layouts.master')

@section('title', $grade->grade)

@section('content')
    <div class="page-header">
        <a href="{{ action('GradesController@edit', $grade->id) }}" class="btn btn-info pull-right">Edit</a>
        <h2>Sydney Grade: <?php echo $grade->grade;?></h2>
    </div>
    <p>Briars Description: <?php echo $grade->comments;?></p>

    <h2>Coach</h2>
    @foreach($grade->coaches as $coaches)
        <p>{{ $coaches->name }} [ {{ $coaches->email }} | {{ $coaches->phone }}  ]</p>
        <div><small>{{ $coaches->year }}</small></div>
        <!-- diffForHumans -> returns time since date in DB -->
    @endforeach

    @include('grades.players.partials.display')

@endsection
