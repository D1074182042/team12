<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class youtuber extends Model
{
    use HasFactory;
    protected $fillable=[
        'yt_name',
        'c_ID',
        'year',
        'education',
        'country',
        'created_at',
        'updated_at'];

public function scopeAllData($query)
{
    $query->join('channels', 'youtubers.c_ID', '=', 'channels.id')
        ->orderBy('players.id')
        ->select(
            'youtubers.id',
            'youtubers.name as yt_name',
            'channels.name as c_name',
            'youtubers.year',
            'youtubers.education',
            'youtubers.country');
}
    public function scopeSenior($query)
    {
        $query->join('channels', 'youtubers.c_ID', '=', 'channels.id')
            ->where('year', '>', 10)
            ->orderBy('year')
            ->select(
                'youtubers.id',
                'youtubers.name as yt_name',
                'channels.name as c_name',
                'youtubers.year',
                'youtubers.education',
                'youtubers.country');
    }
    public function scopeAllPositions($query)
    {
        $query->select('position')->groupBy('position');
    }
    public function scopePosition($query, $pos)
    {
        $query->join('channels', 'youtubers.c_ID', '=', 'channels.id')
            ->where('position', '=', $pos)
            ->orderBy('year')
            ->select(
                'youtubers.id',
                'youtubers.name as yt_name',
                'channels.name as c_name',
                'youtubers.year',
                'youtubers.education',
                'youtubers.country');
    }
}

