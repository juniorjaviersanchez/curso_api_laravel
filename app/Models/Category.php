<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "state"];

    public function getCourses()
    {
        return $this->hasMany(Course::class, 'category_id','id')
        ->where('state','ACTIVE');
    }
}
