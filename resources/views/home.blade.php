@extends('layouts.dashboard')

@section('content')

@if(Auth::user()->is_admin())
    @include('admin.home')
@endif
@if(Auth::user()->is_teacher())
    i am teacher
@endif
@if(Auth::user()->is_parent())
    i am a parent
@endif

@endsection
