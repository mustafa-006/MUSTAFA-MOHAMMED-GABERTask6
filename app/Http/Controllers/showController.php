<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function show(Request $request)
    {
        if ($request->input('login_type') === 'individual') {
            return view('dashboard', ['message' => '    You will enter the competition individually 
            and will not have a partner with you']);
        } 
     
    }
}
