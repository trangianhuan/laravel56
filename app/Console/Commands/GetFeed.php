<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;
use App\Models\Feed;
use App\Models\Information;
use Feeds;

class GetFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'feed:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get feed all from website';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $feedSite = Information::where('type', 'FEED')->first();
        //$feedSite = $feedSite->feeds;
        $feedSite = ['https://quan-cam.com/rss', 'https://toidicodedao.com/feed/'];
Log::debug($feedSite);
        foreach ($feedSite as $key => $site) {
            $feed    = Feeds::make($site);

            if ($feed) {
                $newFeed = Feed::where('site', $site)->orderBy('publish_date', 'desc')->first();

                if(!$newFeed) {
                    $newFeed = new Feed();
                    $newFeed->publish_date = '2000-01-01';
                    $newFeed->url = 'null';
                }

                foreach($feed->get_items() as $item){
                    Log::debug($item->get_id());
                    Log::debug($item->get_date('Y-m-d H:i:s'));

                    if ($newFeed->url == $item->get_id()
                        && $newFeed->publish_date == $item->get_date('Y-m-d H:i:s')){
                        break;
                    }

                    $data = array(
                      'site'     => $site,
                      'url' => $item->get_id(),
                      'title'     => $item->get_title(),
                      'content'     => $item->get_content(),
                      'description' => $item->get_description(),
                      'publish_date'     => $item->get_date('Y-m-d H:i:s'),
                    );

                    Feed::create($data);
                }
            }

        }
    }
}
