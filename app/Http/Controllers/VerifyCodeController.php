<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VerifyCode;
class VerifyCodeController extends Controller
{
    public function AuthenticateCode(Request $request)
    {
        $data=VerifyCode::where('checkpoint_no','=','1')->get();
        if($data['verify_code']=="KYN001")
        {
            return "AUTHENTICATED";
        }
        return "UNAUTHENTICATED";
    }
}
