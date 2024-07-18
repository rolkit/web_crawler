<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use DOMDocument;
// use DOMXPath;

class Crawler extends BaseController
{
    public function index()
    {
        // IMDb movie URL
        $url = 'https://www.imdb.com/title/tt15398776/';

        // Get the HTML content of the page
        $html = file_get_contents($url);

        // Create a DOMDocument object
        $dom = new DOMDocument();

        // Load the HTML content into the DOMDocument
        @$dom->loadHTML($html);

        // Create a DOMXPath object
        $xpath = new DOMXPath($dom);

        // Parse the title
        $title = $xpath->query('//title')->item(0)->nodeValue;

        // Parse the cover image
        $coverImage = $xpath->query('//meta[@property="og:image"]')->item(0)->getAttribute('content');

        // Output the results
        echo '<h1>' . $title . '</h1>';
        echo '<img width="20%" src="' . $coverImage . '"></img><br><br>';
        echo 'Source: ' . $url;
    }
}
