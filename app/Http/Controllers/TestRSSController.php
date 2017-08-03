<?php

namespace App\Http\Controllers;

use Awjudd\FeedReader\FeedReader;
use Illuminate\Http\Request;
use Yaml;
use Carbon\Carbon;

class TestRSSController extends Controller
{
    //
    public function index(Request $request)
    {
        // Get list of feed providers
        $config_file = base_path() . '/rsslist.yml';
        $feed_providers = Yaml::parse(file_get_contents($config_file));

        // Feed reader
        $feed_reader = new FeedReader();

        // Total feeds
        $total_feeds = [];

        // Read feeds
        foreach ($feed_providers as $feed_provider) {
            // Run get feed if not empty
            if (!empty($feed_provider['feed'])) {
                $feed = $feed_reader->read($feed_provider['feed']);

                // Add them to total array for mashup
                foreach ($feed->get_items() as $item) {
                    foreach ($feed->get_items() as $item) {
                        $total_feeds[(string)$item->get_gmdate('U')] = $item;
                    }
                }

                // Sort by date
                krsort($total_feeds);
            }
        }

        // Display only 10 last feeds
        return view('testRssView')
            ->with('feeds', array_slice($total_feeds, 0, 10));
    }
}
