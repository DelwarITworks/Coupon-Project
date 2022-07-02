<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Coupon\Website;
use App\Models\Admin\Coupon\Category;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function Website()
    {
        return $this->belongsTo(Website::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

}
