<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = ['title','excerpt','body'];

    public function category()
    {
        //hasone, hasmany, belongsto
        return $this->belongsTo(Category::class);
    }
}
