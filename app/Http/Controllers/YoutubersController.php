<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\youtuber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class YoutubersController extends Controller
{
    //
    public function index()
    {

      return view('youtubers.index');

    }
    public function create()
    {
        $youtuber = youtuber::create([
            'yt_name'=>'陳彥達',
            'c_ID'=>3,
            'year'=>12,
            'education'=>'中鋒',
            'country'=>'台灣',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);
        return view('youtubers.create', $youtuber->toArray());
    }
    public function show($id)
    {
        $temp = youtuber::where('education', '國立臺灣藝術大學')->first();
        if ($temp == null)
            return "No record";

        $youtuber = $temp->toArray();

        return view('youtubers.show', $youtuber);
    }
    public function edit($id)
    {
        if ($id == 5)
        {
            $yt_name = "";
            $education = "";
            $country = "";
        } else {
            $yt_name = "";
            $education = "";
            $country = "";

        }
        $data = compact('yt_name', 'education', 'country');

        return view('youtubers.edit', $data);
    }



}
