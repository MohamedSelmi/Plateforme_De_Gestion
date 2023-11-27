<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
       return 5;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Experience' => 'required',
        //     'Competences' => 'required',
        //     'Formation ' => 'required',
        //     'user_id ' => 'required'
        // ]);

        $profile = new Profile;

        $profile->Experience = $request->input('Experience');
        $profile->Competences = $request->input('Competences');
        $profile->Formation = $request->input('Formation');
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
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
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
