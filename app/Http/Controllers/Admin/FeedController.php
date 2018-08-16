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
        $feed = Information::where('type', self::FEED)->first();
        $data = [];
        if ($feed) {
            $data = $feed;
        }
        return response()->json($data);
    }

    function saveFeed(Request $request)
    {
        $data = $request->all();
        $data['type'] = self::FEED;
        $feed = Information::updateOrCreate(
            ['type' => self::FEED],
            ['content' => $data['content']]
        );
        return response()->json($feed);
    }

    function getLog()
    {
        $path = base_path() . '/bash_log/feed.log';
        return file_get_contents($path);
    }
}
