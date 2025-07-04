<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $table = 'courses';
    protected $fillable = [
        'course_url',
        'title',
        'category',
        'pic',
        'org_price',
        'discount_price',
        'desc_text',
        'coupon',
        'expiry',
        'savedtime',
    ];

  public function users(){
    return $this->belongsToMany(User::class,'users_course');
  }
}
