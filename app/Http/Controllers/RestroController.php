<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
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


        $req->validate([
            "name"=>'required',
            "email"=>'required',
            "address"=>'required'
        ]);

        $restaurant=new Restaurant();
        $restaurant->name=$req->name;
        $restaurant->email=$req->email;
        $restaurant->address=$req->address;

        $restaurant->save();
        return redirect('add');
    }

    function restaurantInfo()
    {
        return view("RestaurantInformation");
    }
}
