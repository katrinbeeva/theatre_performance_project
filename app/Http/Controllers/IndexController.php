<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
//Get data from DB in here and pass it to the view

return view('index.index', [
'title' => 'Laravel Project about us',
'text' => '<p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
            </p>',
'imgURL' => 'assets/images/about/about-part.jpg',
]);
}

public function index1() {
    $performances = DB::table('performances')->select('name_of_performance', 'performance_date', 'image', 'venue_id')->get();

    $last_3 = DB::table('7')->orderBy("venue_id", 'performance_id',)->select('name_of_theatre')->take(3)->get();


    return view('index1', ['performance' => $performances,
        'last_3' => $last_3]);
}
public function venues()
{
    $venues = DB::table('venues')->select('name_of_theatre', 'location', 'city')->get();
    return (
    view('index1', ['venues' => $venues]));
    }
}
