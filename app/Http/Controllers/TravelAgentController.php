<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class TravelAgentController extends Controller
{
    public function travelAgentController(){
        $user = User::get();

        return view('travel-agent',compact('user'));
    }
}
