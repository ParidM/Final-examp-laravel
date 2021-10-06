<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product()
    {
        // return $this->belongsTo('App\Products','products_id','id');
        return $this->belongsTo(Products::class);
    }
    public function Orderlist()
    {
        return $this->belongsTo('App\Orderlist','orderlist_id','id');
    }
}
