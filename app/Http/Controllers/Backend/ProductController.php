<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(){
        $data['title'] = 'Create New Product';
        return view('backend.products.create-product', $data);
    }
}
