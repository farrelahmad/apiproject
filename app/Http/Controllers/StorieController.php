<?php

namespace App\Http\Controllers;

use App\Models\Storie;
use Illuminate\Http\Request;

class StorieController extends Controller
{
    public function index(){
        $storie = Storie::all();
        return response()->json($storie);
    }   
}
