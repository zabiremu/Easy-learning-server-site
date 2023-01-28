<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homeTitle()
    {
        $result = HomePage::select('home_title','home_sub_title')->get();
        return $result;
    }
    public function homeTech()
    {
        $result = HomePage::select('tech_description')->get();
        return $result;
    }
    public function homeSummary()
    {
        $result = HomePage::select('total_student','total_course','total_review')->get();
        return $result;
    }
    public function videoDesc()
    {
        $result = HomePage::select('video_description','video_url')->get();
        return $result;
    }

    public function index()
    {
        $result = HomePage::latest()->first();
        return view('backend.pages.homePage.update',compact('result'));
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subTitle' => 'required' ,
            'student' => 'required' ,
            'course' => 'required',
            'review' => 'required',
            'tech_desc' => 'required' ,
            'video' => 'required',
            'url'=> 'required',
        ]);

        $data = HomePage::find($id);
        $data->home_title = $request->title;
        $data->home_sub_title = $request->subTitle;
        $data->total_student = $request->student;
        $data->total_course = $request->course;
        $data->video_review = $request->review;
        $data->tech_description = $request->tech_desc;
        $data->video_description = $request->video;
        $data->video_url = $request->url;
        $data->save();
        $notification = array(
            'message' => "Home Page Data Successfully Updated",
            'alert-type' => 'success',
        );
        return redirect()->route('update.home')->with($notification);
    }

}
