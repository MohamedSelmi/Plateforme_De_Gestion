<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferUser;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Offer::select('id','Title','Description','Deadline')->get();
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
        //     'Title' => 'required',
        //     'Description' => 'required',
        //     'Deadline ' => 'required',
        //     'user_id ' => 'required'
        // ]);

        $offer = new Offer();

        $offer->Title = $request->input('Title');
        $offer->Description = $request->input('Description');
        $offer->Deadline = $request->input('Deadline');
        $offer->user_id = $request->input('user_id');

        $offer->save();

        return  $offer;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function submitOffer(Request $request)
    {
        // $request->validate([
        //     'offer_id ' => 'required',
        //     'user_id ' => 'required'
        // ]);

        $offer = new OfferUser();

        $offer->offer_id = $request->input('offer_id');
        $offer->user_id = $request->input('user_id');

        $offer->save();

        return  $offer;
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        $offerWithCandidates = Offer::with('candidates')->find($offer);
        return  $offerWithCandidates;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        //
    }
}
