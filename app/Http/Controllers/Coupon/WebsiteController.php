<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Coupon;
use App\Models\Admin\Coupon\Cagetory;
use App\Models\Admin\Coupon\Website;
use Str;

class WebsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $websites = website::latest()->get();
        $count = 1;
        return view('admin.coupon.coupon_website',compact('websites','count'));
    }

    public function create(Request $request)
    {
        $this->validateRequest();
        $website = website::create([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name).'-'.time(),
            'link'=> $request->link,
            'image'=> $request->image,
        ]);
        $this->storeImage($website);
        return redirect()->back()->with('success','website Stored Successfully.');
    }

    public function update(website $website ,Request $request)
    {
        $request->validate([
                'name'=>'required',
                'link'=>'required',
                'image'=>'',
        ]);
        if($request->has('image')){
            if($request->old_image){
                    unlink('storage/app/public/'.$request->old_image);
            }
            $website->update([
                    'image' => $request->image->store('admin/website','public'),
            ]);
            // $resize = Image::make('storage/app/public/'.$website->image)->resize(300,300);
            // $resize->save();
        }
        $website->update([
                'name' => $request->name,
                'link' => $request->link,
                'slug'=>Str::slug($request->name).'-'.time(),
        ]);

        return redirect()->back()->with('success','website Updated Successfully');

    }

    public function delete(website $website)
    {
        if($website->image){
        unlink('storage/app/public/'.$website->image);
        }
        $website->delete();
          return redirect()->back()->with('deletesuccess','Deleted Successful');
    }



    //private methods
    private function validateRequest()
    {
        return request()->validate([
            'name'=>'required',
            'link'=> 'required',
            // 'image'=>'required',
        ]);
    }

    private function storeImage($website)
    {
        if(request()->hasFile('image')){
            $website->update([
                'image' => request()->image->store('admin/website','public'),
            ]);

            // $resize = Image::make('storage/app/public/'.$website->image)->resize(300,300);
            // $resize->save();
        }
    }
}
