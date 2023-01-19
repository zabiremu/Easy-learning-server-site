<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function allCourse()
    {
        $result = Course::latest()->get();
        return $result;
    }
    public function homePage()
    {
        $result = Course::limit(4)->latest()->get();
        return $result;
    }
    public function courseDetails($courseID)
    {
        $id = $courseID;
        $result = Course::where('id',$id)->first();
        return $result;
    }
}