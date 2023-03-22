<?php

namespace App\Http\Controllers;

use App\Http\Resources\StorieResource;
use App\Models\Storie;
use Illuminate\Http\Request;

class StorieController extends Controller
{
    public function index(){
        $storie = Storie::all();
        return StorieResource::collection($storie);
        // return response()->json($storie);
    }   
}
