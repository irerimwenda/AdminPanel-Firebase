<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class LinkController extends Controller
{
    //Index
    public function index() {
        $factory = (new Factory())
            ->withServiceAccount(__DIR__.'/FBKey.json')
            ->withDatabaseUri('https://laravel-a72e8.firebaseio.com/');
        
        $database = $factory->createDatabase();

        $reference = $database->getReference("Links");

        $links = $reference->getValue();

        $all_links = array();

        foreach($links as $link) {
            array_push($all_links, $link);
        }

        return view('pages.links', compact('all_links'));
    }
}
