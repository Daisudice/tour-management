<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    public function registerTravelAgentAcc(Request $request){
        $travelAgentRegister = User::create([
            'name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password'=> bcrypt('password'),
            'address' => $request->input('address'),
            'birth_date' => $request->input('birth-date'),
            'gender' => $request->input('gender'),
            'id_type' => $request->input('id-type'),
            'id_number' => $request->input('id-number'),
            'contact_no' => $request->input('contact-no'),
            'type' => 'Travel Agent'
        ]);

        return response()->json(['meesage' => 'success'], 200);

    }

 public function showUpdateformTravelAgent($id)
 {
    $userFound = User::where('id',$id)->first();

    return response()->json(['message' => 'success','data' => $userFound],200);
 }

}
