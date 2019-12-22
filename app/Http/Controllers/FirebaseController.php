<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    //Index
    public function index() {

        $factory = (new Factory())
            ->withServiceAccount(__DIR__.'/FBKey.json');
        
        $database = $factory->createDatabase();

        $reference = $database->getReference('Links');

        $key = $reference->push()->getKey();

        $reference->getChild($key)->set([
            'LinkName' => 'Linkedin',
            'Link' => 'www.linkedin.com/in/brian-1234'
        ]);

        return $key;

    }
}
