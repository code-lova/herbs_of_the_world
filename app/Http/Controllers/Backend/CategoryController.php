<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['title'] = 'All Herbs Caregories';
        return view('backend.category.index', $data);
    }

    public function create(){
        $data['title'] = 'Create New Category';
        return view('backend.category.create', $data);
    }
}
