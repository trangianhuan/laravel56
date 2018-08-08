<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Feeds;
use App\Models\Information;

class FeedController extends Controller
{
    const FEED = 'FEED';

    function getFeed(Request $request)
    {
        //$feed = Feeds::make('https://toidicodedao.com/feed');
        //$feed = Feeds::make('https://quan-cam.com/rss');
        $feed = Information::where('type', FEED)->first();
        $data = [];
        if($feed){
            $data = $feed->content;
        }
        return response()->json($data);
    }

    function saveFeed(Request $request)
    {
        $data = $request->all();
        $data['type'] = FEED;
        $feed = Information::create($data);

        return response()->json($feed);
    }
}
