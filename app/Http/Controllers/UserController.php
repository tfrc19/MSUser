<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index($user){
        //
        $user = User::findOrFail($user);
        
         return response()->json($user, 200)->header('Content-Type','application/json');
        }
        public function login(Request $request)
        {
    
        }
    //
}
