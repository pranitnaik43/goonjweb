<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\StorageDetails;
use DB;

class AutomationController extends Controller
{
    public function coords($src,$des)
    {
    $miles=[];
    foreach($src as $st)
    {

        // $theta = $lon1[$i] - $lon2[$i];
        $theta = $des->longitude - $st->longitude;
        // $dist = sin(deg2rad($lat1[$i])) * sin(deg2rad($lat2[$i])) +  cos(deg2rad($lat1[$i])) * cos(deg2rad($lat2[$i])) * cos(deg2rad($theta));
        $dist = sin(deg2rad($des->latitude)) * sin(deg2rad($st->latitude)) +  cos(deg2rad($des->latitude)) * cos(deg2rad($st->latitude)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        //  array_push($miles,array( 'id'=> $st->sid, 'lat'=>$st->latitude, 'long'=>$st->latitude,'dist'=>($dist * 60 * 1.1515)));
        array_push($miles,array( 'sid'=> $st->sid,'did'=>$des->rid, 'dist'=>($dist * 60 * 1.1515)));
    }
    return $miles;
    }

    public function sort($miles){
        for($i=0;$i<count($miles)-1;$i++){
            $min=$i;
            for($j=$i+1;$j<count($miles);$j++){
                if($miles[$j]['dist']<$miles[$min]['dist']){
                    $temp=$miles[$i];
                    $miles[$i]=$miles[$j];
                    $miles[$j]=$temp;
                }
            }
        }
        return $miles;
    }
    public function checkNull($req){
        $f=0;
        for($i=0;$i<count($req);$i++){
            if($req[$i]['quantity']!=0){
                $f=1;
                break;
            }
        }
    }
    public function distance() 
    {
    $cities = DB::table('relief_lat_lon')->first();
    $storage = DB::table('storage_lat_lon')->get();

    $miles=automationController::coords($storage,$cities);
    print_r(json_encode($miles));
    $sortedMiles = automationController::sort($miles);
    echo "<br><br>";
    print_r(json_encode($sortedMiles));
    echo "<br><br>";

    // // return $miles;
    // $approvedQuotation = Storage::disk('approvedQuotations')->get('ApprovedQuotation1.json');
    // $req = json_decode($approvedQuotation,true);
    // // return $req[0];
    //     // while(true)
    //     // {
    //         $centres = StorageDetails::all();
    //         for($i=0;$i<count($centres);$i++){
    //             $storage = Storage::disk('reliefCentre')->get($centres[$i]->details);
    //             $storageData = json_decode($storage,true);
    //             // return $storageData[0];
    //             $take = array(array('material' => null));
    //             // return $take;
    //             for($j=0;$j<count($req);$i++){
    //                 foreach($storageData[0]['material'] as $st){
    //                    if($req[$j]['name'] == $st['name']){
    //                        if($req[$j]['quantity'] >= $st['quantity']){
    //                         $req[$j]['quantity'] -= $st['quantity'];
    //                         $take[0]['material'][0]=array('name'=>$st['name'], 'quantity'=>$st['quantity'], 'measure'=>$st['measure']);
    //                        }
    //                        else{
    //                         $take[0]['material'][0]=array('name'=>$st['name'], 'quantity'=>$req[$j]['quantity'], 'measure'=>$st['measure']);
    //                         $req[$j]['quantity']=0;
    //                        }
    //                    }
    //                 }
    //             }
    //             return($take);
    //             echo "<br>";

    //         }
        // }


        $reqd=180;
        $a=array();
    
            foreach($sortedMiles as $sm){
                if($reqd<=0)
                    break;
                else{
                    $storage=DB::table('storage_lat_lon')->where('sid',$sm['sid'])->first();
                    if($reqd > $storage->material_avl){
                        $reqd = $reqd - $storage->material_avl;
                        array_push($a,array('sid'=>$sm['sid'], 'did'=>$sm['did'],'quantity'=>$storage->material_avl));
                    }
                    else{
                        array_push($a,array('sid'=>$sm['sid'], 'did'=>$sm['did'],'quantity'=>$reqd));
                        $reqd=0;
                        break;
                    }
                    
                }
                // $pid=$sorted[$i]['id'];
                // $i=$i+1;
        
            if ($reqd<=0)
                break;            
        }
        print_r(json_encode($a));
}
}