<?php

namespace App\Http\Controllers;

use App\Models\Bakery;
use App\Models\Slide;
use Illuminate\Http\Request;

class BakeryController extends Controller
{
    public function showHomepage()
    {
        $newBakeryList = Bakery::where('is_new', true)->get();
        $oldBakeryList = Bakery::where('is_new', false)->get();
        $slides = Slide::get();
        return view('pages.homePage', compact('newBakeryList', 'oldBakeryList', 'slides'));
        
    }
    public function showDetail()
    {
        return view('pages.detail');
    }
}
