<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'points',
        'category_id',
        'imgurl',
        'QuantityType'
    ];
    public function category()
{
    return $this->belongsTo(Category::class);
}
}
