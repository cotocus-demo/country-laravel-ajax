<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\State;
use App\City;

class MainController extends Controller
{
    public function index(){
    	$countries = Country::all()->pluck('country_name','id');
    	return view('welcome',compact('countries'));
    }
    public function getStates($id){
    	$states= State::where('country_id',$id)->pluck('state_name','id');
        return json_encode($states);
    }
     public function getCities($id){
    	$cities= City::where('state_id',$id)->pluck('city_name','id');
        return json_encode($cities);
    }
}
