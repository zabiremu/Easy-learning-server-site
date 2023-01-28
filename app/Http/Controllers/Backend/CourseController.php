<?php

namespace App\Http\Controllers\Backend;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function allCourse()
    {
        $result = Course::latest()->get();
        return $result;
    }
    public function homePage()
    {
        $result = Course::limit(4)
            ->latest()
            ->get();
        return $result;
    }
    public function courseDetails($courseID)
    {
        $id = $courseID;
        $result = Course::where('id', $id)->first();
        return $result;
    }

    public function index()
    {
        $result = Course::select('id', 'short_title', 'short_description', 'short_img')
            ->latest()
            ->get();
        return view('backend.courses.allLists', compact('result'));
    }

    public function create()
    {
        return view('backend.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'short_title' => 'required|max:255',
                'short_description' => 'required',
                'long_title' => 'required',
                'long_description' => 'required',
                'total_student' => 'required',
                'total_lecture' => 'required',
                'total_duration' => 'required',
                'category' => 'required',
                'tags' => 'required',
                'image_one' => 'required',
            ],
            [
                'short_title.required' => 'Course Name field is required...',
                'long_title.required' => 'Course Title field is required...',
                'short_description.required' => 'Course short description field is required...',
                'long_description.required' => 'Course long description field is required...',
            ],
        );
        $saveData = $this->saveImage($request);

        $storeData = new Course();
        $storeData->short_title = $request->short_title;
        $storeData->short_description = $request->short_description;
        $storeData->long_title = $request->long_title;
        $storeData->long_description = $request->long_description;
        $storeData->total_student = $request->total_student;
        $storeData->total_lecture = $request->total_lecture;
        $storeData->total_duration = $request->total_duration;
        $storeData->category = $request->category;
        $storeData->tags = $request->tags;
        $storeData->short_img = $saveData;
        $storeData->author = Auth::user()->name;
        $storeData->save();

        $notification = [
            'message' => 'Course Data Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.courses')
            ->with($notification);
    }

    public function edit($id)
    {
        $result = Course::find($id);
        return view('backend.courses.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'short_title' => 'required|max:255',
                'short_description' => 'required',
                'long_title' => 'required',
                'long_description' => 'required',
                'total_student' => 'required',
                'total_lecture' => 'required',
                'total_duration' => 'required',
                'category' => 'required',
                'tags' => 'required',
            ],
            [
                'short_title.required' => 'Course Name field is required...',
                'long_title.required' => 'Course Title field is required...',
                'short_description.required' => 'Course short description field is required...',
                'long_description.required' => 'Course long description field is required...',
            ],
        );

        if ($request->hasFile('image_one')) {

            $saveData = $this->saveImage($request);
            $storeData = Course::find($id);
            $imgName = explode('/', $storeData->short_img);
            $end = end($imgName);
            $path = public_path('uploads/course/' . $end);
            if ($path != null) {
                $delete = unlink($path);
            }
            $storeData->short_title = $request->short_title;
            $storeData->short_description = $request->short_description;
            $storeData->long_title = $request->long_title;
            $storeData->long_description = $request->long_description;
            $storeData->total_student = $request->total_student;
            $storeData->total_lecture = $request->total_lecture;
            $storeData->total_duration = $request->total_duration;
            $storeData->category = $request->category;
            $storeData->tags = $request->tags;

            $storeData->short_img = $saveData;

            $storeData->author = Auth::user()->name;
            $storeData->save();

            $notification = [
                'message' => 'Course Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.courses')
                ->with($notification);
        }else{
            $storeData = Course::find($id);         
            $storeData->short_title = $request->short_title;
            $storeData->short_description = $request->short_description;
            $storeData->long_title = $request->long_title;
            $storeData->long_description = $request->long_description;
            $storeData->total_student = $request->total_student;
            $storeData->total_lecture = $request->total_lecture;
            $storeData->total_duration = $request->total_duration;
            $storeData->category = $request->category;
            $storeData->tags = $request->tags;
            $storeData->author = Auth::user()->name;
            $storeData->save();

            $notification = [
                'message' => 'Course Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.courses')
                ->with($notification);
        }
    }

   

    public function delete(Request $request, $id)
    {
        $deleteData = Course::find($id);

        $imgName = explode('/', $deleteData->short_img);
        $end = end($imgName);
        $path = public_path('uploads/course/' . $end);
        if ($path != null) {
            $delete = unlink($path);
        }

        $deleteData->delete();
        $notification = [
            'message' => 'Course Data Successfully Delete',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.courses')
            ->with($notification);
    }
    public function saveImage($request)
    {
        $ext = $request->image_one->extension();
        $Name = 'Project-name-' . uniqid() . '.' . $ext;
        $ImageSave = $request->image_one->move(public_path('uploads/course'), $Name);
        $save = env('APP_URL') . 'uploads/course/' . $Name;
        return $save;
    }
}
