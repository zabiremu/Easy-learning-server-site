<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function allProjects()
    {
        $result = Project::latest()->get();
        return $result;
    }
    public function homeProject()
    {
        $result = Project::limit(3)->latest()->get();
        return $result;
    }

    public function projectDetails($projectID)
    {
        $id = $projectID;
        $result = Project::where('id',$id)->first();
        return $result; 
    }
}
