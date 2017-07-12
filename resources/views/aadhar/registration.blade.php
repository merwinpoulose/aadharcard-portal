@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Aadhar Registration Form</div>
                @if (Session::has('message'))
                <div class="panel-body">
                       <div class="alert alert-info">{{ Session::get('message') }}</div>
                </div>
               @endif

                <div class="panel-body">
                 <div>Please fill all the mandatory fileds (*)</div><br>
                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/aadhar') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                            <label for="image" class="col-md-4 control-label">Upload your Image *</label>

                            <div class="col-md-6">
                                <input id="image" required="required" type="file" class="form-control" name="image">

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                            @if(Session::has('error'))
                                                <p>{!! Session::get('error') !!}</p>
                                            @endif
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                            <label for="full_name" class="col-md-4 control-label">Full Name *</label>

                            <div class="col-md-6">
                                <input id="full_name" required="required" type="text" class="form-control" name="full_name">

                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                        <label for="dob" class="col-md-4 control-label">Date of Birth *</label>

                        <div class="col-md-6">
                        <input id="dob" required="required" type="date" class="form-control" name="dob">
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address *</label>

                            <div class="col-md-6">
                                <input id="email" required="required" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_no') ? ' has-error' : '' }}">
                            <label for="phone_no" class="col-md-4 control-label">Landline Number</label>

                            <div class="col-md-6">
                            <input id="phone_no" type="text" class="form-control" name="phone_no">

                                @if ($errors->has('phone_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                        <label for="phone_no" class="col-md-4 control-label">Mobile Number *</label>

                        <div class="col-md-6">
                        <input id="mobile_no" required="required" type="text" class="form-control" name="mobile_no">
                                @if ($errors->has('mobile_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="phone_no" class="col-md-4 control-label">Address *</label>

                        <div class="col-md-6">
                        <input id="address" type="text" required="required" class="form-control" name="address">
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('locality') ? ' has-error' : '' }}">
                        <label for="locality" class="col-md-4 control-label">Locality *</label>

                        <div class="col-md-6">
                        <input id="locality" required="required" type="text" class="form-control" name="locality">
                                @if ($errors->has('locality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('locality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('panchayath') ? ' has-error' : '' }}">
                        <label for="panchayath" class="col-md-4 control-label">Panchayath *</label>

                        <div class="col-md-6">
                        <input id="panchayath" required="required" type="text" class="form-control" name="panchayath">
                                @if ($errors->has('panchayath'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('panchayath') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('district') ? ' has-error' : '' }}">
                        <label for="district" class="col-md-4 control-label">District *</label>

                        <div class="col-md-6">
                        <input id="district" type="text" class="form-control" name="district">
                                @if ($errors->has('district'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="state" class="col-md-4 control-label">State *</label>

                        <div class="col-md-6">
                        <input id="state" type="text" required="required" class="form-control" name="state">
                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pincode') ? ' has-error' : '' }}">
                        <label for="pincode" class="col-md-4 control-label">Pincode *</label>

                        <div class="col-md-6">
                        <input id="pincode" required="required" type="text" class="form-control" name="pincode">
                                @if ($errors->has('pincode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pincode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country *</label>
                            <div class="col-md-6">
                                <select name="country"  class="form-control">
                                    <option value="0"> Select Country</option>
                                    <option value="India">India</option>
                                </select>
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                            <label for="blood_group" class="col-md-4 control-label">Blood Group *</label>
                            <div class="col-md-6">
                                <select name="blood_group" class="form-control">
                                    <option value="0"> Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                @if ($errors->has('blood_group'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pan_card_no') ? ' has-error' : '' }}">
                        <label for="pan_card_no" class="col-md-4 control-label">Pancard No.</label>

                        <div class="col-md-6">
                        <input id="pan_card_no" type="text" class="form-control" name="pan_card_no">
                                @if ($errors->has('pan_card_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pan_card_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('voter_id') ? ' has-error' : '' }}">
                        <label for="voter_id" class="col-md-4 control-label">Voters ID</label>

                        <div class="col-md-6">
                        <input id="voter_id" type="text" class="form-control" name="voter_id">
                                @if ($errors->has('voter_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voter_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('passport_no') ? ' has-error' : '' }}">
                        <label for="passport_no" class="col-md-4 control-label">Passport No.</label>

                        <div class="col-md-6">
                        <input id="passport_no" type="text" class="form-control" name="passport_no">
                                @if ($errors->has('passport_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('passport_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
