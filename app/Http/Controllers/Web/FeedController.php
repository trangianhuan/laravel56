<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Feed;

class FeedController extends Controller
{
    const FEED = 'FEED';

    function getFeed(Request $request)
    {
        //$feed = Feeds::make('https://toidicodedao.com/feed');
        //$feed = Feeds::make('https://quan-cam.com/rss');
        $feed = Feed::all();
        $data = [];
        if ($feed) {
            $data = $feed->groupBy('site');
        }
        return response()->json($data);
    }

}
