<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AadharApplication;
use App\Http\Requests;
use App\Aadhar;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class AadharController extends Controller
{
    public function index()
    {  

        $aadhars = Aadhar::paginate(2);
        // dd($aadhars);
        return view('super_admin.aadharApplication',compact('aadhars'));
    }

    public function create()
    {
        return view('aadhar.registration');
    }

    public function store(AadharApplication $request)
    {
        $application = $request->all();

        if ($request->hasFile('image')){
            $destinationPath = 'images/application'; // upload path
            $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111, 99999) . '.' . $extension;
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
            $application['image'] = $fileName;
        }
         // dd($application);
        Aadhar::create($application);
        Session::flash('message', "Application submitted succesfully!");
        return redirect()->back();
    }

    public function edit($id)
    {

        dd("edit");
    }


    public function update(Request $request, $id)
    {
		dd("update");
    }

    public function updateStatus($id)
    {

    }
}
