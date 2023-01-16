<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TicketViewController extends Controller
{
    public function tickets()
    {
        $tickets = DB::table('tickets')->select('price','type_of_ticket')->get();
        return (
        view('tickets_view', ['tickets' => $tickets]));
    }
}
