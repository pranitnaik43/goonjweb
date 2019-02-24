<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReliefCentre;
use Storage;

class StorageController extends Controller
{
    public function selectCentre(){
        return view('Storage.selectCentre');
    }

    public function displayStore(){
        $contents = Storage::disk('reliefCentre')->get('centre1.json');
        // return var_dump($contents);
        $data = json_decode($contents,true); 
        // return var_dump($json);

        // $contents = Storage::get('reliefCentre/centre1.json');
        // return $json[0]['material'];
        // return $data[0]['material'][0]['name'];
        return view('Storage.displayStorage')->with('data',$data);
    }
}
