<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;


class AadharApplication extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'full_name' => 'required|max:255',
                'dob' => 'required',
                'mobile_no' => 'required|unique:aadhar_applications',
                'email' => 'required|email|max:255|unique:aadhar_applications',
                'address' => 'required',
                'locality' => 'required',
                'district' => 'required',
                'panchayath' => 'required',
                'state' => 'required',
                'pan_card_no' => 'unique:aadhar_applications',
                'passport_no' => 'unique:aadhar_applications',
                'voter_id' => 'unique:aadhar_applications',
                'country' => 'required|not_in:0',
                'blood_group' => 'required|not_in:0'

            ];
    }
}
