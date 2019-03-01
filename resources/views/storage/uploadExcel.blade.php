@extends('layouts.storageLayout')

@section('content')
{!! Form::open(['action' => ['Controller@method', $user->id]]) !!}
        {!!Form::file('image');!!}
{!! Form::close() !!}
@endsection