<?php

namespace App\Http\Controllers;

use App\OnsiteTeam;
use App\Disaster;

use App\Quotation;
use Illuminate\Http\Request;
use \DateTime;
use DB;

use Storage;
class FileController extends Controller
{
   
    public function StoreJson(Request $request)
    {   
        // $str = file_get_contents('C:\xampp\htdocs\goonjbackend\public\Order.json');
        // $str = json_decode($str,true);
        // $finalJson=json_encode($str);

        // return $finalJson;
        $response = $request['response'];
        // $response="
        //           {\"wheat\":20  ,\"oranges\":50  ,\"Coke\":9}  
        //           ";
        $date=\Carbon\Carbon::now();
        $m1=$date->month;
        
        $d1=$date->day;
        $y1=$date->year;
        $h1=$date->hour;
        $mi1=$date->minute;
        $count=Quotation::orderBy('quotation_id','desc')->first()->quotation_id;
        $count+=1;

        $final=$d1."_".$m1."_".$y1."_".$count;
        // return $final;
        $date=$date->toDateTimeString();
        // return $date;
        //Qu_teamid_disasterid_date_month_year_lastcount
        $fileName="Qu_".$request['team_id']."_".$request['disaster_id']."_".$final;
      
        // $fileName="Qu_"."1"."_"."2"."_".$final;
        
        // return $fileName;
        
        $finalJson=json_decode($response,true);
        $finalJson=json_encode($finalJson);
        Storage::disk('Quotations')->put($fileName.".json",$finalJson);
        
        // $finalJson=json_decode($response,true);
        // $fp = fopen($fileName.".json", 'w');
        // fwrite($fp, json_encode($finalJson));
        // fclose($fp);

        // $this->SaveOrders($request,$fileName);
        $team_id=$request['team_id'];
        $disaster_id=$request['disaster_id'];
        // $date=(string)time();
        // $date=$date->format("U=M,d,Y h:i:s");
       
        // return "MY LYF IS SED";
        $newQuotation=new Quotation;
        
        $newQuotation->team_id=(int)$team_id;
        $newQuotation->disaster_id=(int)$disaster_id;
        $newQuotation->time_stamp=$date;
        $newQuotation->updated_at=$date;
        $newQuotation->submitted_by="1-2--1000";
        $newQuotation->quotation_details=$fileName.".json";
        $newQuotation->save();
        return "SAVED";
        
    }
    public function SaveOrders(Request $request, $fileName)
    {
        
    }

    public function getAllQuotations(Request $request)
    {
        $str = file_get_contents('/var/www/html/GoonjBackend/public/Quotation_1_2.json');
        $str = json_decode($str,true);
        // return $str;
        $team_id=$request["team_id"];
        $query = DB::select("select d.disaster_id,s.disaster_type,s.city,s.state,d.quotation_details
                             from quotation as d join disaster as s where s.disaster_id=d.disaster_id and s.team_id='$team_id'");
        return $query;
        $arr=array();            
        foreach($query as $q)
        {   array_push($arr,$q['disaster_id']);
            // $str=file_get_contents('/var/www/html/GoonjBackend/public/Quotation_1_2.json');
            // $str=json_decode($str,true);
            // $q['requirements']=5;
        }
        // QR code scanning
        // MAchine Learning
        // Blockchaining for encryption
        return $arr;
        return $query;
        $arr=array();

    }
}
