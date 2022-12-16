<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListingController extends Controller
{
    //Show all job listings
   public function index() {
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }
    //Show single job listings 
    public function show(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}
