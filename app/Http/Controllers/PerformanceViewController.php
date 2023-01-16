<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

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

    public function search(Request $request)
    {
        $performance = DB::table('performance')->select('name_of_performance','performance_date')->get();
       $venues = DB::table('venues')->select('name_of_theatre','location', 'city')->get();
        $tickets = DB::table('tickets')->select('type_of_ticket', 'price')->get();

        $searchStr = $request->get('s');
        $performance = Performance::orWhere('name_of_performance', 'LIKE', '%' . $searchStr . '%')
            ->orWhere('performance_date', 'LIKE', '%' . $searchStr . '%')
            ->orWhereHas('venues', function (Builder $query) use ($searchStr) {
                $query->where('name_of_theatre', 'like', '%' . $searchStr . '%');
            })->orWhereHas('venues', function (Builder $query) use ($searchStr) {
                $query->where('location', 'like', '%' . $searchStr . '%');
            })->orWhereHas('venues', function (Builder $query) use ($searchStr) {
                $query->where('city', 'like', '%' . $searchStr . '%');
            })->get();

        return view('performance_view', ['performance' => $performance,'venues' => $venues]);
    }
}
