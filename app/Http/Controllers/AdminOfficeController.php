<?php

namespace App\Http\Controllers;

use DB;
use App\AwaitedUser;
use App\Users;
use App\StorageCentre;
use App\ReliefCentre;
use App\Disaster;
use Illuminate\Http\Request;

class AdminOfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function home()
    {
        return view('admin.home');
    }

    public function approve()
    {   

        $awaited_users = AwaitedUser::where('status', 0)->paginate(10);        
        return view('admin.approve')->with('awaited_users', $awaited_users);
    }

    public function show($id)
    {
        $awaited_user = AwaitedUser::find($id);
        
        return view('admin.show')->with('awaited_user',$awaited_user);
    }


    public function accept(Request $request)
    {
            $id = $request->waiting_list_no;
            $awaited_user = AwaitedUser::find($id);
            // return $awaited_user;

            $user = new Users;
            $num_str = sprintf("%06d", mt_rand(1, 999999));

            $user->user_id = 'U'.$num_str;
            $user->role_id = $awaited_user->type_of_role;
            $user->first_name = $awaited_user->first_name;
            $user->middle_name = $awaited_user->middle_name;
            $user->last_name = $awaited_user->last_name;
            $user->contact_no = $awaited_user->contact_no;
            $user->alternative_contact_no = $awaited_user->alternative_contact_no;
            $user->email = $awaited_user->email;
            $user->password = $awaited_user->password;
            $user->address_line_1 = $awaited_user->address_line_1;
            $user->address_line_2 = $awaited_user->address_line_2;
            $user->address_line_3 = $awaited_user->address_line_3;
            $user->city = $awaited_user->city;
            $user->state = $awaited_user->state;
            $user->country = $awaited_user->country;
            $user->postal_code = $awaited_user->postal_code;
            $user->save();
            $awaited_user->delete();
            return redirect('/admin/approve')->with('success', 'User Approved ');

    }

    public function reject(Request $request)
    {
        $id = $request->waiting_list_no;
        $awaited_user = AwaitedUser::find($id);
        // return $awaited_user;
        $awaited_user->delete();
        return redirect('/admin/approve')->with('success', 'User Rejected');
    }
    

    public function onsite()
    {
        return view('admin.onsite');
    }

     //=============================================Rey================================
     public function viewQuotation(){
        $contents = Storage::disk('quotation')->get('qutation1.json');
        $data = json_decode($contents,true); 
        $objects = $data[0]['material'];
        
        // return $id_data['id'];
        
        return view('Storage.editStorage')->with('data',$objects);
    }

    

    //=============================================/Rey================================

    public function storagecentre()
    {
        $storage_centre = DB::table('storage_centre')->paginate(10);
        return view('admin.storagecentre')->with('storage_centre', $storage_centre);
    }

    public function addStorageCentre()
    {
        return view('admin.addStorageCentre');
    }

    public function storeStorageCentre(Request $request)
    {
        $this->validate($request, [
            
            'postal_code' => 'required|numeric|digits:6',
            'country'=>'required|alpha',
            'state'=>'required|alpha',
            'city'=>'required|alpha',
            'address_line_3'=>'required',
            'address_line_2'=>'required',
            'address_line_1'=>'required',
            'email_id'=>'required|email|unique:storage_centre,email_id',
            'alternative_contact_no' => 'required|numeric|digits:10|unique:storage_centre,alternative_contact_no',
            'contact_no' => 'required|numeric|digits:10|unique:storage_centre,contact_no',
            'poc' => 'required|alpha',
            'storage_centre_id' => 'required|numeric|unique:storage_centre',                        
        ]);

        $storage_centre = new StorageCentre;

        $storage_centre->storage_centre_id = $request->input('storage_centre_id');
        $storage_centre->poc = $request->input('poc');
        $storage_centre->contact_no = $request->input('contact_no');
        $storage_centre->alternative_contact_no = $request->input('alternative_contact_no');
        $storage_centre->email_id = $request->input('email_id');
        $storage_centre->address_line_1 = $request->input('address_line_1');
        $storage_centre->address_line_2 = $request->input('address_line_2');
        $storage_centre->address_line_3 = $request->input('address_line_3');
        $storage_centre->city = $request->input('city');
        $storage_centre->state = $request->input('state');
        $storage_centre->country = $request->input('country');
        $storage_centre->postal_code = $request->input('postal_code');

        $storage_centre->save();
        return redirect('/admin/storagecentre')->with('success', 'StorageCentre Added');

    } 

    public function ReliefCentre()
    {
        $relief_centre = DB::table('relief_centre')->paginate(10); 
        return view('admin.ReliefCentre')->with('relief_centre', $relief_centre);
    }
    
    public function addReliefCentre()
    {
        return view('admin.addReliefCentre');
    }

    public function storeReliefCentre(Request $request)
    {
        $this->validate($request, [
            
            'postal_code' => 'required|numeric|digits:6',
            'country'=>'required|alpha',
            'state'=>'required|alpha',
            'city'=>'required|alpha',
            'address_line_3'=>'required',
            'address_line_2'=>'required',
            'address_line_1'=>'required',
            'email_id'=>'required|email|unique:relief_centre,email_id',
            'alternative_contact_no' => 'required|numeric|digits:10|unique:relief_centre,alternative_contact_no',
            'contact_no' => 'required|numeric|digits:10|unique:relief_centre,contact_no',
            'poc' => 'required|alpha',
            'relief_centre_id' => 'required|numeric|unique:relief_centre',                        
        ]);

        $relief_centre = new ReliefCentre;

        $relief_centre->relief_centre_id = $request->input('relief_centre_id');
        $relief_centre->poc = $request->input('poc');
        $relief_centre->contact_no = $request->input('contact_no');
        $relief_centre->alternative_contact_no = $request->input('alternative_contact_no');
        $relief_centre->email_id = $request->input('email_id');
        $relief_centre->address_line_1 = $request->input('address_line_1');
        $relief_centre->address_line_2 = $request->input('address_line_2');
        $relief_centre->address_line_3 = $request->input('address_line_3');
        $relief_centre->city = $request->input('city');
        $relief_centre->state = $request->input('state');
        $relief_centre->country = $request->input('country');
        $relief_centre->postal_code = $request->input('postal_code');

        $relief_centre->save();
        return redirect('/admin/ReliefCentre')->with('success', 'ReliefCentre Added');
    }

    public function show2($id)
    {
        $storage_centre = StorageCentre::find($id);
        return view('admin.show2')->with('storage_centre',$storage_centre);
    }

    public function show3($id)
    {
        $relief_centre = ReliefCentre::find($id);
        return view('admin.show3')->with('relief_centre',$relief_centre);
    }

    public function disaster()
    {
        $disaster = DB::table('disaster')->paginate(10); 
        return view('admin.disaster')->with('disaster', $disaster);
    }

    public function addDisaster()
    {
        return view('admin.addDisaster');
    }

    public function storeDisaster(Request $request)
    {
        $this->validate($request, [
            
            'description' => 'required',
            'country'=>'required|alpha',
            'state'=>'required|alpha',
            'city' => 'required|alpha',
            'disaster_type' => 'required|alpha',
            'disaster_id' => 'required|numeric|unique:disaster',                        
        ]);

        $disaster = new Disaster;

        $disaster->disaster_id = $request->input('disaster_id');
        $disaster->disaster_type = $request->input('disaster_type');
        $disaster->city = $request->input('city');
        $disaster->state = $request->input('state');
        $disaster->country = $request->input('country');
        $disaster->description = $request->input('description');

        $disaster->save();
        return redirect('/admin/disaster')->with('success', 'Disaster Uploaded');

    }

}
 