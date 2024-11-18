<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get data from table profiles
        /*$profile = Profile::latest()->get();
        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Profile List',
            'data' => $profile
        ], 200);*/
        $profiles = Profile::all(); // Retrieve all profiles
        return view('profiles', compact('profiles'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'display_name' => 'string|max:50',
            'profilePhoto' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();

        if ($request->filled('display_name')) {
            $user->profile->update([
                'display_name' => $request->display_name,
            ]);
        }

        if ($request->hasFile('profilePhoto')) {
            $path = $request->file('profilePhoto')->store('uploads/avatar', 'public');

            if ($user->profile?->profile_photo) {
                Storage::disk('public')->delete($user->profile->profile_photo);
            }

            $user->profile->update([
                'profile_photo' => $path,
            ]);
        }

        return back()->with('success', 'Profile updated successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //set validation
        $validator = Validator::make($request->all(), [
            'display_name' => 'required',
            'profile_photo' => 'nullable|image|mimes:jpeg,jpg,png|max:5120'
        ]);
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $file = $request->file('profile_photo');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        //save to database
        $profile = Profile::create([
            'display_name' => $request->display_name,
            'profile_photo' => $filePath
        ]);
        //success save to database
        if($profile) {
            return response()->json([
                'success' => true,
                'message' => 'Profile Created',
                'data' => $profile
            ], 201);
        }
        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Profile Failed to Save',
        ], 409);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //find profile by ID
        $profile = Profile::findOrfail($id);
        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Profile Details',
            'data' => $profile
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        //set validation
        $validator = Validator::make($request->all(), [
            'display_name' => 'required',
            'profile_photo' => 'nullable'
        ]);
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //find post by ID
        $profile = Profile::findOrFail($id);
        if($profile) {
            $encodedImage = null;
            if ($request->profile_photo) {
                $imageData = file_get_contents($request->profile_photo->getPathname());
                $encodedImage = base64_encode($imageData);
            }
            $profile->update([
                'display_name' => $request->display_name,
                'profile_photo' => $encodedImage
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Profile Updated',
                'data' => $profile
            ], 200);
        }
        //data profile not found
        return response()->json([
            'success' => false,
            'message' => 'Profile Not Found',
        ], 404);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //find post by ID
        $profile = Profile::findOrfail($id);
        if($profile) {
            //delete post
            $profile->delete();
            return response()->json([
                'success' => true,
                'message' => 'Profile Deleted',
            ], 200);
        }
        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Profile Not Found',
        ], 404);
    }
}
