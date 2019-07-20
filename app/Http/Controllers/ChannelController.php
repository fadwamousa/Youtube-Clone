<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Http\Requests\Channels\UpdateChannelsRequest;
use Illuminate\Http\Request;

class ChannelController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only('update');
    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
        $channel = Channel::findOrFail($id);
        return view('channels.show',compact('channel'));
    }

    public function edit($id)
    {
        //
    }

    public function update(UpdateChannelsRequest $request, Channel $channel)
    {
        if($request->hasFile('image')){

            $channel->clearMediaCollection('images');
            //clear the old or remove old and get new One

            $channel->addMediaFromRequest('image')->toMediaCollection('images');

        }

        $channel->update([

            'name'  =>  $request->name ,
            'description'  => $request->description
        ]);




    }


    public function destroy($id)
    {
        //
    }
}
