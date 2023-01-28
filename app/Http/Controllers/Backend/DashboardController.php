<?php

namespace App\Http\Controllers\Backend;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function index()
    {   
        $project = Project::all();
        $countProject = count($project);
        $course = Course::all();
        $countCourse = count($project);
        $client = ClientReview::all();
        $countClient = count($client);
        return view('backend.dashboard',compact('countProject','countCourse','countClient'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
