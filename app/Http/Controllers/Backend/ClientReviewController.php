<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    public function index()
    {
        $result = ClientReview::latest()->get();
        return $result;
    }

    public function allLists()
    {
        $result = ClientReview::latest()->get();
        return view('backend.review.allReview', compact('result'));
    }
    public function create()
    {
        return view('backend.review.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|max:255',
            'client_description' => 'required',
            'client_img' => 'required',
        ]);

        $image = $this->saveImage($request);

        $result = new ClientReview();
        $result->client_name = $request->client_name;
        $result->client_description = $request->client_description;
        $result->client_img = $image;
        $result->save();
        $notification = [
            'message' => 'Client Data Successfully Uploaded',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.review')
            ->with($notification);
    }

    public function edit($id)
    {
        $result = ClientReview::find($id);
        return view('backend.review.edit', compact('result'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'client_name' => 'required|max:255',
            'client_description' => 'required',
        ]);
        $result = ClientReview::find($id);

        if ($request->hasFile('client_img')) {
            $explode = explode('/', $result->client_img);
            $end = end($explode);
            $path = public_path('uploads/clients/' . $end);
            if ($end != null) {
                unlink($path);
            }
            $image = $this->saveImage($request);
            $result->client_name = $request->client_name;
            $result->client_description = $request->client_description;
            $result->client_img = $image;
            $result->save();
            $notification = [
                'message' => 'Client Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.review')
                ->with($notification);
        } else {
            $result->client_name = $request->client_name;
            $result->client_description = $request->client_description;
            $result->save();
            $notification = [
                'message' => 'Client Data Successfully Updated',
                'alert-type' => 'success',
            ];
            return redirect()
                ->route('all.review')
                ->with($notification);
        }
    }

    public function delete($id)
    {
        $result = ClientReview::find($id);
        $explode = explode('/', $result->client_img);
        $end = end($explode);
        $path = public_path('uploads/clients/' . $end);
        if ($end != null) {
            unlink($path);
        }
        $result->delete();
        $notification = [
            'message' => 'Client Data Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.review')
            ->with($notification);
    }

    public function saveImage($request)
    {
        $ext = $request->client_img->extension();
        $Name = 'Client-name-' . uniqid() . '.' . $ext;
        $ImageSave = $request->client_img->move(public_path('uploads/clients'), $Name);
        $save = env('APP_URL') . 'uploads/clients/' . $Name;
        return $save;
    }
}
