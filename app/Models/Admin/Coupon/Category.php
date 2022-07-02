<?php

namespace App\Models\Admin\Coupon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Coupon;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function Coupon()
    {
        return $this->hasMany(Coupon::class);
    }
}
