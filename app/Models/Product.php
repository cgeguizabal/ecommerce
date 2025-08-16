<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    //Mass Assignment
    protected $fillable = ['sku', 'name', 'description', 'image_path', 'price', 'subcategory_id'];

    //Relation one to many inverse
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Relation one to many
    public function variants(){
        return $this->hasMany(Variant::class);
    }

    //Relation many to many
    public function options(){
        return $this->belongsToMany(Option::class)
            ->withPivot('value')
            ->withTimestamps();
    }
}