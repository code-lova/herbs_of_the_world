<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['title'] = 'Welcome to herbs of the world';
        return view('frontend.index', $data);
    }
}
