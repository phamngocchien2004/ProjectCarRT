<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Tests\Laravel\App;

class HomeController extends Controller
{
    public function home(){
        $products = Car::orderBy("created_at","desc")->paginate(12);
        return view("user.pages.home",compact("products"));
    }
}
