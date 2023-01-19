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
}
