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
        return $firebase->getDatabase();


    }

    public function Guardar(Request $request) 
    {   
        $atm=$this->GeneraModeloPersona($request);
        
        $database=$this->index();
        $newPost = $database->getReference('Persona')
        ->set($atm);
    }

    public function Actualizar() 
    {
        $newPost = $database
        ->getReference('blog/posts')
        ->update([
        'title' => 'La casita de bernalda alba' ,
        'category' => 'Libro'
        ]);
        echo '<pre>';
        print_r($newPost->getvalue());


    }

    public function GeneraModeloPersona($request)
    {
        $atm = array('Cliente' => $request->cliente);
        return $atm;
    }
}
