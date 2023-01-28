<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $result = Information::latest()->get();
        return $result;
    }

    public function edit()
    {
        $result = Information::latest()->first();
        return view('backend.About-privacy-terms-refund.update',compact('result'));
    }

    public function updateData(Request $request, $id)
    {   
        $request->validate([
            'about_desc' => 'required',
            'privacy_desc' => 'required',
            'refund_desc' => 'required',
            'terms_desc' => 'required',
        ]);
        $result = Information::find($id);
        $result->about = $request->about_desc;
        $result->privacy = $request->privacy_desc;
        $result->refund = $request->refund_desc;
        $result->terms = $request->terms_desc;
        $result->save();
        $notification = [
            'message' => 'Information Data Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('update.info')
            ->with($notification);
    }
}
