<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VenueViewController extends Controller
{
    public function venues()
    {
        $venues = DB::table('venues')->select('name_of_theatre', 'location','city')->get();
        return (
        view('venues_view', ['venues' => $venues]));
    }
}
