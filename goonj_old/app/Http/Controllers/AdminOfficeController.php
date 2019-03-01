<?php

namespace App\Http\Controllers;

use App\AwaitedUser;
use App\Users;
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
            $user->user_id = $awaited_user->waiting_list_no;
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
        return view('admin.storagecentre');
    }

    public function setUpReliefCentre()
    {
        return view('admin.setUpReliefCentre');
    }
    public function disaster()
    {
       return view('admin.disaster');
    }

}
 