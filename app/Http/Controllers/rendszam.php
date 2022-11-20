<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\DB;

class rendszam extends Controller
{
    public function auto(){
        $auto = DB::select("SELECT * FROM autok");
        return view("rendszam",[ "autok" => $autok]);
    }
}
