<?php

namespace App\Http\Controllers;

use App\Models\Performance;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class PerformanceViewController extends Controller
{
    public function venues()
    {
        $venuess = DB::table('venues')->select('name_of_performance')->get();
        return (
        view('venues_view', ['venues' => $venuess]));
    }


    public function performance()
    {
        $performances = Performance::with('venues')->get();

        return (view('performance_view', [ 'performances' => $performances ]));
    }

    public function search(Request $request)
    {
       // $performances = DB::table('performance')->select('name_of_performance','performance_date')->get();
       $venues = DB::table('venues')->select('name_of_theatre','location', 'city')->get();
     //  $tickets = DB::table('tickets')->select('type_of_ticket', 'price')->get();

        $searchStr = $request->get('s');
        $performances = Performance::orWhere('name_of_performance', 'LIKE', '%' . $searchStr . '%')
            ->orWhere('performance_date', 'LIKE', '%' . $searchStr . '%')
            ->orWhereHas('venues', function (Builder $query) use ($searchStr) {
                $query->where('name_of_theatre', 'like', '%' . $searchStr . '%');
            })->orWhereHas('venues', function (Builder $query) use ($searchStr) {
                $query->where('location', 'like', '%' . $searchStr . '%');
            })->orWhereHas('venues', function (Builder $query) use ($searchStr) {
                $query->where('city', 'like', '%' . $searchStr . '%');
            })->get();

        return view('performance_view', ['performances' => $performances,'venues' => $venues]);
    }
}
