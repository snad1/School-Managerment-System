@extends('layouts.dashboard')

@section('content')

    <nav aria-label="breadcrumb " class="bg-white">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Student</li>
        </ol>
    </nav>


    <div class="row">
        <div id="admin" class="col s12">
            <table id="mytable" class="table table-striped table-borderless  table-hover table-data2">
                <thead>
                <tr>
                    <td>SI No</td>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>Age</td>
                    <td>Class</td>
                    <td>Contact</td>
                    <td>Manage</td>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->first_name}} {{$student->last_name}} {{$student->other_name}}</td>
                    <td>@if($student->gender==1)
                            Male
                        @else
                        Female
                        @endif
                    </td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->class_id}}</td>
                    <td>{{$student->phone}}</td>
                    <td></td>
                </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>


@endsection