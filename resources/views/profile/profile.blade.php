@extends('layouts.master')

@section('title','Profile')

@section('content')
    <div class="page-header">
        <h1>My Profile</h1>
    </div>

    @if ( Auth::user()->isAdmin() )
        <div class="alert alert-success">Logged in User is an Admin</div>
    @endif

    @if ( Auth::user()->hasRole('Coach') )
        <div class="alert alert-info">Logged in User is a Coach</div>
    @endif

    @if ( Auth::user()->hasRole('Player') )
        <div class="alert alert-danger">Logged in User is a Player</div>
    @endif


    <h2>Roles - testing Only JF</h2>
    <ul>
        @foreach (Auth::user()->roles as $role)
        <li>{{ $role->name }}</li>
        @endforeach
    </ul>
@endsection