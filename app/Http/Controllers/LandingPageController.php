<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index() {
        $product = DataBarang::all();
        return view('pages.landingpage.index', compact('product'));
    }
}
