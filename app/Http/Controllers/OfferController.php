<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOfferRequest;
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
        return Offer::select('id', 'title', 'description', 'deadline')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOfferRequest $request)
    {

        $offer = new Offer();

        $offer->title = $request->input('title');
        $offer->description = $request->input('description');
        $offer->deadline = $request->input('deadline');
        $offer->user_id = $request->input('user_id');

        $offer->save();

        return  $offer;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function submitOffer(Request $request)
    {
        $request->validate([
            'offer_id' => 'required',
        ]);

        $offer = new OfferUser();

        $offer->offer_id = $request->input('offer_id');
        $offer->user_id = $request->user()->id;

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
