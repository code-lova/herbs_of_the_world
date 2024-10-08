<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data['title'] = 'Welcome to herbs of the world - Admin';
        return view('backend.index', $data);
    }
}
