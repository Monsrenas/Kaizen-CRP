<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;


class KaizenController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/kaizen-arp-firebase-adminsdk-cupjq-84a59cfffa.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://kaizen-arp.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $newPost = $database
        ->getReference('blog/posts')
        ->update([
        'title' => 'La casita de bernalda alba' ,
        'category' => 'Libro'
        ]);
        echo '<pre>';
        print_r($newPost->getvalue());
    }
}
