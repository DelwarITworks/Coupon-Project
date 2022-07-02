<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Coupon;
use App\Models\Admin\Coupon\Cagetory;
use App\Models\Admin\Coupon\Website;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }
}
