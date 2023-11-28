<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProfileRequest $request)
    {
        // $request->validate([
        //     'experiences' => 'required',
        //     'competences' => 'required',
        //     'formations' => 'required',
        //     'user_id' => 'required| new OneToOneValidationRule'
        // ]);

        $profile = new Profile;

        $profile->experiences = $request->input('experiences');
        $profile->competences = $request->input('competences');
        $profile->formations = $request->input('formations');
        $profile->user_id = $request->input('user_id');

        $profile->save();

        return  $profile;
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
