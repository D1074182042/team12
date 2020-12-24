<?php

namespace App\Http\Controllers;

use App\Models\channel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\CreateChannelRequest;

class ChannelsController extends Controller
{
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName()
    {
        $c_name = $this->generateRandomString(rand(2, 15));
        $c_name = strtolower($c_name);
        $c_name = ucfirst($c_name);
        return $c_name;
    }
    //
    public function index()
    {
        $channels = Channel::all();

        return view('channels.index',['channels'=>$channels]);
    }

    public function life()
    {
        $channels = Channel::category('生活類')->get();
        return view('channels.index', ['channels'=>$channels]);
    }

    public function funny ()
    {
        $channels = Channel::category('娛樂類')->get();
        return view('channels.index', ['channels'=>$channels]);
    }

    public function create()
    {
        return view('channels.create');
    }

    public function show($id)
    {
        $channel = Channel::findOrFail($id);
        $youtubers = $channel-> youtubers;
        return view('channels.show', ['channel'=>$channel,'youtubers'=>$youtubers]);

    }
    public function edit($id)
    {
      $channel = Channel::findOrFail($id);
    return view('channels.edit',['channel'=>$channel]);
    }

    public function store(CreateChannelRequest $request)
    {
        $c_name = $request->input('c_name');
        $category = $request->input('category');
        $fans = $request->input('fans');
        $views = $request->input('views');

        Channel::create([
            'c_name' => $c_name,
            'category' => $category,
            'fans' => $fans,
            'views' => $views,
            'created' => Carbon::now()
        ]);

        return redirect('channels');
    }
    public function update($id, CreateChannelRequest $request)
    {
        $channel = channel::findOrFail($id);

        $channel->c_name = $request->input('c_name');
        $channel->category = $request->input('category');
        $channel->fans = $request->input('fans');
        $channel->views = $request->input('views');
        $channel->save();

        return redirect('channels');
    }
    public function destroy($id)
    {
        $channel = Channel::findOrFail($id);
        $channel->delete();
        return redirect('channels');
    }
}
