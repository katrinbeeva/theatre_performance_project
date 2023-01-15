<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PerformanceViewController extends Controller
{
    public function venues()
    {
        $venues = DB::table('venues')->select('name_of_performance')->get();
        return (
        view('venues_view', ['venues' => $venues]));
    }


    public function performance()
    {
        $performances = DB::table('performance')->select('name_of_performance', 'performance_date','image')->get();
        $venues = DB::table('venues')->select('name_of_theatre','location','city')->get();

        return (
        view('performance_view', ['performances' => $performances, 'venues' => $venues]));
    }
}
