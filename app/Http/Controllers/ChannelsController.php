<?php

namespace App\Http\Controllers;

use App\Models\channel;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Carbon\Carbon;

class ChannelsController extends Controller
{
    //
    public function index()
    {
        $channel = Channel::all();

        return view('channels.index',['channels'=>$channel]);
    }
    public function create()
    {
        return view('channels.create');
    }

    public function show($id)
    {
        $temp = channel::find($id);
        if($temp == null)
            return"NO record";

        $channel = $temp->toArray();
        /*$data = [];
        if ($id == 5)
        {
            $data['name'] = "123";
            $data['guys'] = "123";
            $data['views'] = "123";
        } else {
            $data['name'] = "123";
            $data['guys'] = "123";
            $data['views'] = "123";
        }
        return view('channels.show', $data);*/
        return view('channels.show',$channel);

    }
    public function edit($id)
    {
        if ($id == 5)
        {
        $c_name = "123";
        $category = "123";
        $fans = "123";
        $views = "123";

        } else {
            $c_name = "123";
            $category = "123";
            $fans = "123";
            $views = "123";
        }
    return view('channels.edit')->with(['c_name' => $c_name, 'category' => $category, 'fans' => $fans, 'views' => $views]);
    }
}
