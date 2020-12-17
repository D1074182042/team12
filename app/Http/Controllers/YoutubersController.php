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
        $youtubers = youtuber::allData()->get();

        $positions = youtuber::allPositions()->get();
        $data = [];
        foreach ($positions as $position)
        {
            $data["$position->position"] = $position->position;
        }
        return view('youtubers.index', ['youtubers' => $youtubers, 'positions'=>$data]);
    }
    public function senior()
    {
        $youtubers = youtuber::senior()->get();
        $positions = youtuber::Positions()->get();
        $data = [];
        foreach ($positions as $position)
        {
            $data["$position->position"] = $position->position;
        }
        return view('youtubers.index', ['youtubers' => $youtubers, 'positions'=>$data]);
    }


    public function position(Request $request)
    {
        $youtubers = youtuber::position($request->input('pos'))->get();

        $positions = youtuber::Positions()->get();
        $data = [];
        foreach ($positions as $position)
        {
            $data["$position->position"] = $position->position;
        }
        return view('youtubers.index', ['youtubers' => $youtubers, 'positions'=>$data]);
    }
    public function create()
    {

        $channels = DB::table('channels')
            ->select('channels.id', 'channels.name')
            ->orderBy('channels.id', 'asc')
            ->get();

        $data = [];
        foreach ($channels as $channel)
        {
            $data[$channel->id] = $channel->name;
        }
        return view('youtubers.create', ['channels' =>$data]);
    }
    public function show($id)
    {
        $youtuber = youtuber::findOrFail($id)->toArray();
        $channel= channel::findOrFail($youtuber->c_ID);
        return view('youtubers.show', $youtuber);
    }
    public function edit($id)
    {
        $channels = DB::table('channels')
            ->select('channels.id', 'channels.name')
            ->orderBy('channels.id', 'asc')
            ->get();

        $data = [];
        foreach ($channels as $channel)
        {
            $data[$channel->id] = $channel->name;
        }

        $youtuber = youtuber::findOrFail($id);

        return view('youtubers.edit', ['youtuber' =>$youtuber, 'channels' => $data]);
    }

    public function store(Request $request)
    {
        $yt_name = $request->input('yt_name');
        $c_ID = $request->input('c_ID');
        $year = $request->input('year');
        $education = $request->input('education');
        $country = $request->input('country');


        $youtuber = youtuber::create([
            'yt_name'=>$yt_name,
            'c_ID'=>$c_ID,
            'year'=>$year,
            'education'=>$education,
            'country'=>$country,]);

        return redirect('youtubers');
    }

    public function update($id, Request $request)
    {
        $youtuber = youtuber::findOrFail($id);

        $youtuber->yt_name = $request->input('yt_name');
        $youtuber->c_ID = $request->input('c_ID');
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
