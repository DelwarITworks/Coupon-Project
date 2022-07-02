<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Coupon;
use App\Models\Admin\Coupon\Category;
use App\Models\Admin\Coupon\Website;
use Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::latest()->get();
        $count = 1;
        return view('admin.coupon.coupon_category',compact('categories','count'));
    }

    public function create(Request $request)
    {
        $this->validateRequest();
        $category = Category::create([
            'name'=> $request->name,
            'slug'=> Str::slug($request->name).'-'.time(),
            'image'=> $request->image,
        ]);
        $this->storeImage($category);
        return redirect()->back()->with('success','category Stored Successfully.');
    }

    public function update(Category $category ,Request $request)
    {
        $request->validate([
                'name'=>'required',
                'image'=>'',
        ]);
        if($request->has('image')){
            if($request->old_image){
                    unlink('storage/app/public/'.$request->old_image);
            }
            $category->update([
                    'image' => $request->image->store('admin/category','public'),
            ]);
            // $resize = Image::make('storage/app/public/'.$category->image)->resize(300,300);
            // $resize->save();
        }
        $category->update([
                'name' => $request->name,
                'slug'=>Str::slug($request->name).'-'.time(),
        ]);

        return redirect()->back()->with('success','category Updated Successfully');

    }

    public function delete(Category $category)
    {
        if($category->image){
        unlink('storage/app/public/'.$category->image);
        }
        $category->delete();
          return redirect()->back()->with('deletesuccess','Deleted Successful');
    }



    //private methods
    private function validateRequest()
    {
        return request()->validate([
            'name'=>'required',
            // 'image'=>'required',
        ]);
    }

    private function storeImage($category)
    {
        if(request()->hasFile('image')){
            $category->update([
                'image' => request()->image->store('admin/category','public'),
            ]);

            // $resize = Image::make('storage/app/public/'.$category->image)->resize(300,300);
            // $resize->save();
        }
    }
}
