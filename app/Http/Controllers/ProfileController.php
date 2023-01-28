<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // custom coding

    public function index()
    {
        return view('backend.admin-profile.profile');
    }

    public function updateProifle(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'name' => 'required|max:250',
            'email' => 'required|max:250',
        ]);

        if ($request->file('image')) {
            $admin = User::find($id);
           
            if($admin->image != null){
                $img = explode('/',$admin->image);
                $imgName = end($img);
                $path = 'uploads/profile/'. $imgName;
                $delete = unlink(public_path($path));
            }
            $ext = $request->image->extension();
            $name = 'Profile-' . uniqid() . '.' . $ext;
            $imageSave = $request->image->move(public_path('uploads/profile'),$name);
            $saveUri = env('APP_URL') . 'uploads/profile/' . $name;

            $data = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $saveUri,
            ]);

            $notification = array(
                'message' => "Admin Successfully Updated Data",
                'alert-type' => 'success',
            );
            return redirect()->route('admin.profile')->with($notification);
        } else {
            $data = User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            $notification = array(
                'message' => "Admin Successfully Updated Data",
                'alert-type' => 'success',
            );
            return redirect()->route('admin.profile')->with($notification);
        }
    }

    public function changePassword()
    {
        return view('backend.admin-profile.change-password');
    }

    public function updatePassword(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        
        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword' => 'required|same:newPassword',
        ]);

        if(Hash::check($request->oldPassword, $data->password)){

          $data->password = bcrypt($request->newPassword);
          $data->save();

          $notification = array(
            'message' => "Admin Password Successfully Updated",
            'alert-type' => 'success',
        );
        return redirect()->route('change-password')->with($notification);

        }else{
            $notification = array(
                'message' => "Old Password Didn't Match",
                'alert-type' => 'error',
            );
            return redirect()->route('change-password')->with($notification);
        }

    } 
}
