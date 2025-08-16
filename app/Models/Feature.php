<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    //Mass Assignment
    protected $fillable = ['value', 'description','option_id'];

    //Relation one to many inverse
    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    //Relation many to many
    public function variants(){
        return $this->belongsToMany(Variant::class)->withTimestamps();
    }
}