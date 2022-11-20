<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\DB;

class tulajdonos extends Controller
{
    public function tulajdonos_tabla(){

      $tulajdonosok = DB::select("SELECT * FROM tulajdonosok WHERE 1");
        return view("tulajdonos",[ "tulajdonos" => $tulajdonosok]);
        
    }
}
