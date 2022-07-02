<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Coupon\Website;
use App\Models\Admin\Coupon\Category;
use App\Models\Admin\Coupon;


class PublicController extends Controller
{
    public function websiteCoupons($slug)
    {
        $website = Website::where('slug',$slug)->where('status',1)->first();
        $coupons = $website->Coupon()->paginate(20);
        $categories = Category::where('status',1)->get();
        return view('user.coupon.website_coupon',compact('coupons','website','categories'));
    }
}
