<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Feeds;
class FeedController extends Controller
{
    function getFeed(Request $request)
    {
        //$feed = Feeds::make('https://toidicodedao.com/feed');
        $feed = Feeds::make('https://quan-cam.com/rss');
        
        $data = array(
          'title'     => $feed->get_title(),
          'permalink' => $feed->get_permalink(),
          'items'     => $feed->get_items(),
        );
        
        foreach($feed->get_items() as $item){
            dd($item->get_content(), $item->get_date('Y-m-d'), $item->get_id(),
                $item->get_title(), $item->get_description());
            //var_dump($item->get_permalink(), $item->get_title(), $item->get_description(), $item->get_date('j F Y | g:i a'));
        }
dd('2');
       
        return $data;
    }
}
