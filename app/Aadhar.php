<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aadhar extends Model
{
    protected $table = "aadhar_applications";

    protected $fillable = [
        'full_name', 'image', 'dob', 'mobile_no', 'email', 'address', 'locality', 'district', 'panchayath', 'state', 'country', 'blood_group', 'alt_email', 'phone_no', 'pan_card_no', 'passport_no', 'voter_id'
    ];

}
