<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyOrder extends Model
{
     protected $fillable = [

        'user_id','name','address','city','number','state','pincode','quantity','price','total_amount'
    ];
}
 