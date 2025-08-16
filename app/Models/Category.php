<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    //Mass Assignment
    protected $fillable = ['name', 'family_id'];

    // Relation one to many inverse
    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    // Relation one to many
    public function products()
    {
        return $this->hasMany(Subcategory::class);
    }
    
}