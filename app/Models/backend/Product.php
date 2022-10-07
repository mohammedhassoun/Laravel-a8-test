<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['name', 'detail', 'color_id', 'photo', 'price', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];

    public function color()
    {
       return $this->belongsTo(color::class);
    }
}
