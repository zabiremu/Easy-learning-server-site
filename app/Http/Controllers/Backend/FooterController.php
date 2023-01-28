<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $result = Footer::latest()->get();
        return $result;
    }

    public function edit()
    {
        $result = Footer::latest()->first();
        return view('backend.footer.edit',compact('result'));
    }

    public function update(Request $request,$id)
    {
        $result = Footer::find($id);
        $request->validate([
            'footer_credit' => 'required',
            'twitter' => 'required',
            'youtube' => 'required',
            'facebook' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $result->address = $request->address;   
        $result->email = $request->email;   
        $result->phone = $request->phone;   
        $result->facebook = $request->facebook;   
        $result->youtube = $request->youtube;   
        $result->twitter = $request->twitter;   
        $result->footer_credit = $request->footer_credit;   
        $result->save();
        $notification = [
            'message' => 'Footer Data Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('footer.edit')
            ->with($notification);
    }
}
