<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestroController extends Controller
{
    //

    function start()
    {

        return view("Home");
    }
    function showForm()
    {
        return view("AddRestaurant");
    }

    function addRestaurant(Request $req)
    {



        return $req->input();
    }

    function restaurantInfo()
    {
        return view("RestaurantInformation");
    }
}
