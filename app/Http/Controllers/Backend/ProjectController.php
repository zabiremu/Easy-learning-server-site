<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function allProjects()
    {
        $result = Project::select('id','project_name','project_description','image_one')->latest()->get();
        return $result;
    }
    public function homeProject()
    {
        $result = Project::limit(3)
            ->latest()
            ->get();
        return $result;
    }

    public function projectDetails($projectID)
    {
        $id = $projectID;
        $result = Project::where('id', $id)->first();
        return $result;
    }
    public function index()
    {
        $result = Project::select('id', 'image_one', 'image_two', 'project_name', 'project_description', 'project_features')
            ->latest()
            ->get();
        return view('backend.project.allProject', compact('result'));
    }
    public function create()
    {
        return view('backend.project.createProject');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'p_name' => 'required|max:255',
                'p_short_desc' => 'required',
                'p_long_desc' => 'required',
                'image_one' => 'required',
                'image_two' => 'required',
            ],
            [
                'p_name.required' => 'Project name field is required...',
                'p_short_desc.required' => 'Project short description field is required...',
                'p_long_desc.required' => 'Project long description field is required...',
            ],
        );
        $saveData = $this->saveImage($request);
        $saveDataTwo = $this->saveImageTwo($request);

        $storeData = new Project();
        $storeData->project_name = $request->p_name;
        $storeData->project_description = $request->p_short_desc;
        $storeData->project_features = $request->p_long_desc;
        $storeData->image_one = $saveData;
        $storeData->image_two = $saveDataTwo;
        $storeData->save();

        $notification = [
            'message' => 'Project Data Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.projects')
            ->with($notification);
    }

    public function editProject($id)
    {
        $result = Project::find($id);
        return view('backend.project.editProject', compact('result'));
    }

    public function updateProject(Request $request, $id)
    {
        $request->validate(
            [
                'p_name' => 'required|max:255',
                'p_short_desc' => 'required',
                'p_long_desc' => 'required',
            ],
            [
                'p_name.required' => 'Project name field is required...',
                'p_short_desc.required' => 'Project short description field is required...',
                'p_long_desc.required' => 'Project long description field is required...',
            ],
        );
        $storeData = Project::find($id);

        if ($request->hasFile('image_one')) {
            $imgName = explode('/', $storeData->image_one);
            $end = end($imgName);
            $path = public_path('uploads/projectName/' . $end);
            if ($path != null) {
                $delete = unlink($path);
            }

            $saveData = $this->saveImage($request);
            $storeData->project_name = $request->p_name;
            $storeData->project_description = $request->p_short_desc;
            $storeData->project_features = $request->p_long_desc;
            $storeData->image_one = $saveData;
            if ($request->hasFile('image_two')) {
                $imgName = explode('/', $storeData->image_two);
                $end = end($imgName);
                $path = public_path('uploads/projectName/' . $end);
                if ($path != null) {
                    $delete = unlink($path);
                }
                $saveDataTwo = $this->saveImageTwo($request);
                $storeData->image_two = $saveDataTwo;
            }
            $storeData->save();
            $notification = [
                'message' => 'Project Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.projects')
                ->with($notification);
        } elseif ($request->hasFile('image_two')) {
            $imgName = explode('/', $storeData->image_two);
            $end = end($imgName);
            $path = public_path('uploads/projectName/' . $end);
            if ($path != null) {
                $delete = unlink($path);
            }
            $storeData->project_name = $request->p_name;
            $storeData->project_description = $request->p_short_desc;
            $storeData->project_features = $request->p_long_desc;
            $saveDataTwo = $this->saveImageTwo($request);
            $storeData->image_two = $saveDataTwo;
            $storeData->save();
            $notification = [
                'message' => 'Project Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.projects')
                ->with($notification);
        } else {
            $storeData->project_name = $request->p_name;
            $storeData->project_description = $request->p_short_desc;
            $storeData->project_features = $request->p_long_desc;
            $storeData->save();
            $notification = [
                'message' => 'Project Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.projects')
                ->with($notification);
        }
    }

    public function deletProject(Request $request, $id)
    {
        $deleteData = Project::find($id);

        $imgName = explode('/', $deleteData->image_two);
        $end = end($imgName);
        $path = public_path('uploads/projectName/' . $end);
        if ($path != null) {
            $delete = unlink($path);
        }

        $imgName = explode('/', $deleteData->image_one);
        $end = end($imgName);
        $path = public_path('uploads/projectName/' . $end);
        if ($path != null) {
            $delete = unlink($path);
        }
        $deleteData->delete();
        $notification = [
            'message' => 'Project Data Successfully Delete',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.projects')
            ->with($notification);
    }

    public function saveImage($request)
    {
        $ext = $request->image_one->extension();
        $Name = 'Project-name-' . uniqid() . '.' . $ext;
        $ImageSave = $request->image_one->move(public_path('uploads/projectName'), $Name);
        $save = env('APP_URL') . 'uploads/projectName/' . $Name;
        return $save;
    }
    public function saveImageTwo($request)
    {
        $ext = $request->image_two->extension();
        $Name = 'Project-name-' . uniqid() . '.' . $ext;
        $ImageSave = $request->image_two->move(public_path('uploads/projectName'), $Name);
        $save = env('APP_URL') . 'uploads/projectName/' . $Name;
        return $save;
    }
}
