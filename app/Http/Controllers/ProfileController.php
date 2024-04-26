<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Show the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = auth()->user();
        $profile = $user->profile;

        if (!$profile) {
            // Create profile for the user if it doesn't exist
            $profile = new Profile();
            // Populate profile fields with default values or prompt user to fill them out
            // Save profile
            $user->profile()->save($profile);
        }

        return view('profile.show', compact('user', 'profile'));
    }

    /**
     * Show the form for editing the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = auth()->user();
        $profile = $user->profile;

        if ($profile) {
            return view('profile.edit', compact('user', 'profile'));
        } else {
            return redirect()->route('profile.show')->with('warning', 'Please complete your profile.');
        }
    }

    /**
     * Update the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // dd($request->all());

        // Get the authenticated user
    $user = Auth::user();
    
    // Get the profile associated with the user
    $profile = $user->profile;
    
        // Validate the request data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::id())],
           // 'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'telephone' => 'required|string|max:255',
            'location' => 'required|string|max:255', 
            'username' => ['string', 'max:255', Rule::unique('users')->ignore(Auth::id())],
        ]);


 // Update the profile with the validated data
 if ($user->profile) {
     $user->profile->update($validatedData);
 } else {
     // If the user does not have a profile, create a new one and associate it with the user
     $user->profile()->create($validatedData);
 }

 // Update the username if the first name has changed
 if ($user->fname !== $validatedData['fname']) {
     // Generate a new username based on the updated first name
     $newUsername = strtolower($validatedData['fname'] . '_' . Str::random(4));

     // Update the user's username
     $user->update(['username' => $newUsername]);
 }

         // Update the profile with the validated data
    //if ($profile) {
     //   $profile->update($validatedData);
    //} else {
        // If the user does not have a profile, create a new one and associate it with the user
       // $user->profile()->create($validatedData);
   // }

        // Redirect back to the profile page with a success message
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }

}