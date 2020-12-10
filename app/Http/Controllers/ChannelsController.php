<?php

namespace App\Http\Controllers;

use App\Models\channel;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChannelsController extends Controller
{
    //
    public function index()
    {
        $channels = Channel::all();

        return view('channels.index',['channels'=>$channels]);
    }
    public function create()
    {
        $channel = channel::create([
            'c_name'=>'陳彥達',
            'category'=>123,
            'fans'=>123,
            'views'=>'123',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);
        return view('channels.create', $channel->toArray());
    }

    public function show($id)
    {
        $temp = Channel::findOrFail($id);

        $channel = $temp->toArray();
        return view('channels.show', $channel);
       /* $temp = channel::find($id);
        if($temp == null)
            return"NO record";

        $channel = $temp->toArray();*/
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
      /*  return view('channels.show',$channel);*/

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

    public function store(Request $request)
    {
        $c_name = $request->input('c_name');
        $category = $request->input('category');
        $fans = $request->input('fans');
        $views = $request->input('views');

        Channel::create([
            'name' => $c_name,
            'city' => $category,
            'fans' => $fans,
            'views' => $views,
            'created' => Carbon::now()
        ]);

        return redirect('channels');
    }
}
