<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Coupon;
use App\Models\Admin\Coupon\Category;
use App\Models\Admin\Coupon\Website;
use Str;
use Image;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $coupons = Coupon::latest()->get();
        $count = 1;
        return view('admin.coupon.index_coupon',compact('coupons','count'));
    }

    public function create()
    {
        $coupons = Coupon::latest()->get();
        $websites = Website::latest()->get();
        $categories = Category::latest()->get();
        $count = 1;
        return view('admin.coupon.create_coupon',compact('coupons','websites','categories','count'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

            'user_id'=>'required|max:11',
            'website_id'=>'required|max:11',
            'category_id'=>'max:11',
            'title'=>'required|max:191',
            'slug'=>'required|max:191|unique:coupons',
            'discount'=>'required|max:11',
            'promo_code'=>'required|max:191',
            'description'=>'',
            'best_offer'=>'max:11',
            'new_offer'=>'max:11',
            'image'=>'max:191',
            'meta_tag'=>'',
            'meta_description'=>'',

        ]);

        $coupon = Coupon::create($data);
        $this->storeImage($coupon);

        if($coupon){
            return redirect()->back()->with('success', 'Successfully');
        }else{
            return redirect()->back()->with('wrong', 'Something went wrong!!');
        }
        // if($coupon){
        //     $notification = array(
        //         'messege' =>'blog added successfull',
        //         'alert-type' =>'success'
        //     );
        //     return redirect()->back()->with($notification);
        // }else{
        //     $notification = array(
        //         'messege' =>'Ups!!something went wrong!',
        //         'alert-type' =>'error'
        //     );
        //     return redirect()->back()->with($notification);
        // }

    }


    public function edit(Coupon $coupon)
    {

        $websites = Website::latest()->get();
        $categories = Category::latest()->get();
        return view('admin.coupon.edit_coupon',compact('coupon','websites','categories'));
    }


    public function update(Coupon $coupon ,Request $request)
    {
        if($request->has('image')){
            if($request->old_image){
                unlink('storage/app/public/'.$request->old_image);
            }
            $coupon->update([
                'image' => $request->image->store('admin/coupon','public'),
            ]);
            $resize = Image::make('storage/app/public/'.$coupon->image)->resize(706, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $resize->save();
        }

        $data = $request->validate([
            'user_id'=>'required|max:11',
            'website_id'=>'required|max:11',
            'category_id'=>'max:11',
            'title'=>'required|max:191',
            'discount'=>'required|max:11',
            'promo_code'=>'required|max:191',
            'description'=>'',
            'best_offer'=>'max:11',
            'new_offer'=>'max:11',
            'image'=>'max:191',
            'meta_tag'=>'',
            'meta_description'=>'',
        ]);

        $coupon->update($data);
        if($coupon){
            return redirect()->back()->with('success', 'Successfully');
        }else{
            return redirect()->back()->with('wrong', 'Something went wrong!!');
        }
    }

    
    public function delete(Coupon $coupon)
    {
        if($coupon->image){
        unlink('storage/app/public/'.$coupon->image);
        }
        if($coupon->image2){
        unlink('storage/app/public/'.$coupon->image2);
        }
        if($coupon->image3){
        unlink('storage/app/public/'.$coupon->image3);
        }
      
        $coupon->delete();
        return redirect()->back()->with('success',"Delete Successfully");
     
    }

    
    public function active(Coupon $coupon)
    {
        $coupon->update(['status' => 1]);
        if($coupon){
            $notification = array(
                'messege' =>'coupon activate successfull',
                'alert-type' =>'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' =>'Ups!!something went wrong!',
                'alert-type' =>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    
    public function deactive(Coupon $coupon)
    {
        $coupon->update(['status' => 0]);
        if($coupon){
            $notification = array(
                'messege' =>'coupon deactivate successfull',
                'alert-type' =>'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' =>'Ups!!something went wrong!',
                'alert-type' =>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    //private methods
    // private function validateRequest()
    // {
    //     return 
    // }

    private function storeImage($coupon)
    {
        if(request()->hasFile('image')){
            $coupon->update([
                'image' => request()->image->store('admin/coupon','public'),
            ]);
        $resize = Image::make('storage/app/public/'.$coupon->image)->resize(706, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        $resize->save();
        }

        if(request()->hasFile('image2')){
            $coupon->update([
                'image2' => request()->image2->store('admin/coupon','public'),
            ]);
        $resize = Image::make('storage/app/public/'.$coupon->image2)->resize(403, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        $resize->save();
        }

        if(request()->hasFile('image3')){
            $coupon->update([
                'image3' => request()->image3->store('admin/coupon','public'),
            ]);
        $resize = Image::make('storage/app/public/'.$coupon->image3)->resize(507, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        $resize->save();
        }
    }


    // public function fetchDist($id){
    //     $district = District::where('division_id',$id)->get();
    //     return json_encode($district);
    // }
}
