<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    public function yourMethod()
    {
        // Your logic for the protected route
        return response()->json(['message' => 'This is a protected route!']);
    }
}