<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
    use HasFactory;
    protected $fillable=[
        'c_name',
        'category',
        'fans',
        'views',
        'created_at'];

    public function scopeCategory($query, $category)
    {
        $query->where('category', '=', $category);
    }
    public function youtubers()
    {
        return $this->hasMany('App\Models\youtuber', 'c_ID');
    }
}
