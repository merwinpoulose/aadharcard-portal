@extends('layouts.app')

@section('content')
<style type="text/css">
.col-md-offset-1 {
    margin-left: 0.333333%;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Applications</div>

                <div class="panel-body">
                    <div class="row"><br>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>DOB</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Locality</th>
                            <th>District</th>
                            <th>Panchayath</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Blood Group</th>
                            <th>Application Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($aadhars as $aadhar)
                            <tr>
                                <td>#</td>
                                <td>{{$aadhar->full_name}}</td>
                                <td>{{$aadhar->dob}}</td>
                                <td>{{$aadhar->email}}</td>
                                <td>{{$aadhar->mobile_no}}</td>
                                <td>{{$aadhar->address}}</td>
                                <td>{{$aadhar->locality}}</td>
                                <td>{{$aadhar->district}}</td>
                                <td>{{$aadhar->panchayath}}</td>
                                <td>{{$aadhar->state}}</td>
                                <td>{{$aadhar->country}}</td>
                                <td>{{$aadhar->blood_group}}</td>
                                <td>{{$aadhar->status}}</td>
                            </tr>
                        @endforeach()
                        </tbody>

                    </table>
                    <div class="text-center">{!! $aadhars->render() !!}</div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
