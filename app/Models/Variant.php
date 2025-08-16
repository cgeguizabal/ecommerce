<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{

    use HasFactory;
    
    //Mass Assignment
    protected $fillable = ['sku', 'image_path', 'product_id'];

    //Relation one to many inverse
    public function product(){
        return $this->belongsTo(Product::class);
    }

    //Relation many to many inverse
    public function features(){
        return $this->belongsToMany(Feature::class)->withTimestamps();
    }
}