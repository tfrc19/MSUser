<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\ApiResponser;

class UserController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

        public function index(){
        //
            $user = User::all();
            return $this->successResponse($user);
        }
        public function show($user)
        {
            $user = User::findOrFail($user);
            return $this->successResponse($user);
        }
        public function login(Request $request)
        {
    
        }
    //
}
