<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    //Mass Assignment
    protected $fillable = ['name', 'category_id'];

    //Relation one to many inverse
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relation one to many
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}