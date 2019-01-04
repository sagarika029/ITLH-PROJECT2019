<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCart extends Model
{
    protected $fillable = [
    	'user_id','name','quantity','size','price','total_amount'];


    protected $table = "carts";

    public $timestamps = false;

}
