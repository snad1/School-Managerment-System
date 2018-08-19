@extends('layouts.dashboard')

@section('stylesheets')
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

@endsection

@section('page_content')
    <!--For the admin of the website for the index page-->
    @if(Auth::user()->is_admin())
        @include('admin.home')
    @endif



@endsection

@section('scripts')
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

    <script src="vendors/Chart.js/dist/Chart.min.js"></script>

@endsection
