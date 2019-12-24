<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class TagController extends Controller
{
    //Index
    public function index($id) {

        $factory = (new Factory())
            ->withServiceAccount(__DIR__.'/FBKey.json')
            ->withDatabaseUri('https://laravel-a72e8.firebaseio.com/');
        
        $database = $factory->createDatabase();

        $reference = $database->getReference("Tags");

        $data = $reference->orderByChild("ParentLinkID")->equalTo($id)->getValue();

        $all_tags = array();

        foreach($data as $tag) {
            array_push($all_tags, $tag);
        }

        return view('pages.tags', compact('all_tags'));
    }

    //Save Function
    public function addTag(Request $request, $id) {
        $factory = (new Factory())
            ->withServiceAccount(__DIR__.'/FBKey.json')
            ->withDatabaseUri('https://laravel-a72e8.firebaseio.com/');

        $database = $factory->createDatabase();

        $reference = $database->getReference("Tags");

        $ewLink = $database
            ->getReference('Tags')
            ->push([
                'TagName' => $request->tag_name,
                'Description' => $request->description,
                'ParentLinkID' => $id
            ]);
            
        $data = $reference->orderByChild("ParentLinkID")->equalTo($id)->getValue();
        
        return back();
    }
}
