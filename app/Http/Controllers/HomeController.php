<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Coupon;
use App\Models\Admin\Coupon\Category;
use App\Models\Admin\Coupon\Website;
use Str;
use Image;


class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth' ,'verified']);
    // }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coupons = Coupon::where('status',1)->get();
        $websites = Website::where('status',1)->get();
        $categories = Category::where('status',1)->get();
        return view('user.home',compact('coupons','websites','categories'));
    }
    public function index2()
    {
        $coupons = Coupon::where('status',1)->get();
        $websites = Website::where('status',1)->get();
        $categories = Category::where('status',1)->get();
        return view('user.home',compact('coupons','websites','categories'));
    }

}
