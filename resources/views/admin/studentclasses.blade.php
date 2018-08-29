@extends('layouts.dashboard')

@section('content')

    <nav aria-label="breadcrumb " class="bg-white">
        <ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Subjects</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col col-lg-6">

            <table id="mydatatable" class="table table-borderless table-responsive table-data2">
                <thead>
                <tr>
                    <th>SI No</th>
                    <th>Class Name</th>
                    <th>Level</th>
                    <th>No of Students</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($classes as $class)
                    <tr>
                        <td>{{$class->class_id}}</td>
                        <td>{{$class->class_name}}</td>
                        <td>{{$class->level}}</td>
                        <td>{{$class->n_o_s}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{--<div class="col col-lg-1"></div>--}}

        <div class="col col-lg-6">

            <p style="padding-top: 12px;padding-left: 20px;color: black;">Classes</p>
            <br>
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Add Clases</h3>
                    </div>
                    <hr>
                    <form action="" method="post" novalidate="novalidate">
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Class Name</label>
                            <input id="cc-pament" name="subject_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                        </div>
                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">Level</label>
                            <input id="cc-name" name="level" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>

                        <div class="form-group has-success">
                            <label for="cc-name" class="control-label mb-1">No of Students</label>
                            <input id="cc-name" name="level" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                        </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-plus fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Add Subject</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection