<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReliefCentre;
use Storage;

class StorageController extends Controller
{

    public function displayStorage(){
        $contents = Storage::disk('reliefCentre')->get('centre1.json');
        // return var_dump($contents);
        $data = json_decode($contents,true); 
        // return var_dump($json);

        // $contents = Storage::get('reliefCentre/centre1.json');
        // return $json[0]['material'];
        // return $data[0]['material'][0]['name'];
        return view('Storage.displayStorage')->with('data',$data);
    }

    public function addStorage(){
        $contents = Storage::disk('reliefCentre')->get('centre1.json');
        $data = json_decode($contents,true); 
        return view('Storage.addStorage')->with('data',$data);
    }

    public function add(Request $request){
        $contents = Storage::disk('reliefCentre')->get('centre1.json');
        $data = json_decode($contents,true); 
        $objects = $data[0]['material'];
        // return $objects;
        $count = count($objects);       
        $last_index = $count-1;
        $object = ['id'=>$objects[$last_index]['id']+1, 'name'=>$request->name, 'quantity'=>$request->quantity, 'measure'=>$request->measure];          //last object         
        $data[0]['material'][$count]=$object;        //append last object to the array
        $json=json_encode($data,true);       //convert array to json
        Storage::disk('reliefCentre')->put('centre1.json', $json);      //store json(write original file)
        return redirect('/addStorage')->with('data',$data)->with('success', 'Material added Successfully');
    }

    public function editStorage($id){
        $contents = Storage::disk('reliefCentre')->get('centre1.json');
        $data = json_decode($contents,true); 
        $objects = $data[0]['material'];
        for($i=0;$i<count($objects);$i++){
            if($objects[$i]['id']==$id){
                $id_data=$objects[$i];
            }
        }
        // return $id_data['id'];
        return view('Storage.editStorage')->with('data',$data)->with('id_data', $id_data);
    }
    public function edit($id, Request $request){
        $contents = Storage::disk('reliefCentre')->get('centre1.json');
        $data = json_decode($contents,true); 
        $objects = $data[0]['material'];
        for($i=0;$i<count($objects);$i++){
            if($objects[$i]['id']==$id){
                $id_data=$objects[$i];
                break;
            }
        }
        $id_data['name']=$request->name;
        $id_data['quantity']=$request->quantity;
        $id_data['measure']=$request->measure;
        $objects[$i]=$id_data;
        $data[0]['material']=$objects;

        $json=json_encode($data,true);       //convert array to json
        Storage::disk('reliefCentre')->put('centre1.json', $json);      //store json(write original file)

        // return $id_data;
        return view('Storage.editStorage')->with('data',$data)->with('id_data', $id_data)->with('success', 'Material edited Successfully');
        // return view('Storage.displayStorage');
    }
}
