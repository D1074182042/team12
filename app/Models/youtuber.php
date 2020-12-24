<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class youtuber extends Model
{
    use HasFactory;
    protected $fillable = [
        'yt_name',
        'c_ID',
        'year',
        'education',
        'country',
        'created_at',
        'updated_at'];

    public function channel()
    {
        return $this->belongsTo('App\Models\channel', 'c_ID', 'id');
    }

    public function scopeSenior($query)
    {
        $query->where('year', '>', 10)
            ->orderBy('year');
    }

    public function scopeAllYears($query)
    {
        $query->select('year')->groupBy('year');
    }

    public function scopeYear($query, $yea)
    {
        $query->where('year', '=', $yea)
            ->orderBy('year');
    }
}
