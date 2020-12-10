<?php

namespace App\Http\Controllers;

use App\Models\youtuber;
use App\Models\channel;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YoutubersController extends Controller
{
    //
    public function index()
    {
        $youtubers = DB::table('youtubers')
            ->join('channels', 'youtubers.c_ID', '=', 'channels.id')
            ->orderBy('youtubers.id')
            ->select(
                'youtubers.id',
                'youtubers.name as yt_name',
                'channels.name as c_ID',
                'youtubers.year',
                'youtubers.education',
                'youtubers.country',

            )->get();
        return view('youtubers.index', ['youtubers' => $youtubers]);
    }
    public function create()
    {

        return view('youtubers.create');
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

    public function store(Request $request)
    {
        $yt_name = $request->input('yt_name');
        $c_id = $request->input('c_id');
        $year = $request->input('year');
        $education = $request->input('education');
        $country = $request->input('country');


        $player = youtuber::create([
            'yt_name'=>$yt_name,
            'c_id'=>$c_id,
            'year'=>$year,
            'education'=>$education,
            'country'=>$country,]);

        return redirect('youtubers');
    }

    public function update($id, Request $request)
    {
        $youtuber = youtuber::findOrFail($id);

        $youtuber->yt_name = $request->input('yt_name');
        $youtuber->c_id = $request->input('c_id');
        $youtuber->year = $request->input('year');
        $youtuber->education = $request->input('education');
        $youtuber->country = $request->input('country');
        $youtuber->save();

        return redirect('youtubers');
    }

    public function destroy($id)
    {
        $youtuber = youtuber::findOrFail($id);
        $youtuber->delete();
        return redirect('youtubers');
    }
}
