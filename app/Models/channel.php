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
        'created_at',
        'updated_at'];
}
