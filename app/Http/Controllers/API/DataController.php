<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wifi;
use App\Http\Resources\DataResource;

class DataController extends Controller
{
    // public function index()
    // {
    //      $data = Wifi::latest()->get();
    //     return response()->json([DataResource::collection($data), 'Programs fetched.']);
    // }
}
