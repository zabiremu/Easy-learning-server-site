<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $result = Service::latest()->get();
        return $result;
    }

    public function allService()
    {
        $result = Service::latest()->get();
        return view('backend.services.allServices', compact('result'));
    }
    public function createService()
    {
        return view('backend.services.create_service');
    }
    public function storeService(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'Image' => 'required',
            'service_desc' => 'required',
        ]);

        $ext = $request->Image->extension();
        $imgName = 'Service-' . uniqid() . '.' . $ext;
        $save = $request->Image->move(public_path('uploads/service'), $imgName);
        $saveUrl = env('APP_URL') . 'uploads/service/' . $imgName;

        $data = new Service();
        $data->service_name = $request->title;
        $data->service_description = $request->service_desc;
        $data->service_img = $saveUrl;
        $data->save();
        $notification = [
            'message' => 'Service Data Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.service')
            ->with($notification);
    }
    public function updateService(Request $request, $id)
    {
        $data = Service::find($id);
        $request->validate([
            'title' => 'required|max:255',
            'service_desc' => 'required',
        ]);

        if ($request->file('Image')) {
            $imgName = explode('/', $data->service_img);
            $end = end($imgName);
            $path = public_path('uploads/service/' . $end);
            if ($path != null) {
                $delete = unlink($path);
            }

            $ext = $request->Image->extension();
            $imgName = 'Service-' . uniqid() . '.' . $ext;
            $save = $request->Image->move(public_path('uploads/service'), $imgName);
            $saveUrl = env('APP_URL') . 'uploads/service/' . $imgName;

            $data->service_name = $request->title;
            $data->service_description = $request->service_desc;
            $data->service_img = $saveUrl;
            $data->save();
            $notification = [
                'message' => 'Service Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.service')
                ->with($notification);
        } else {
            $data->service_name = $request->title;
            $data->service_description = $request->service_desc;
            $data->save();
            $notification = [
                'message' => 'Service Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.service')
                ->with($notification);
        }
    }
    public function editService($id)
    {
        $result = Service::find($id);
        return view('backend.services.editService', compact('result'));
    }

    public function deleteService($id)
    {
        $result = Service::find($id);
        $imgName = explode('/', $result->service_img);
        $end = end($imgName);
        $path = public_path('uploads/service/' . $end);
        if ($path != null) {
            $delete = unlink($path);
        }
        $result->delete();
        $notification = [
            'message' => 'Service Data Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.service')
            ->with($notification);
    }
}
