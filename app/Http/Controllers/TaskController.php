<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    
     public function __construct()
    {
      //  $this->middleware('auth:api');
    }

    public function allmembers()
    {
        return User::all();
    }

    // public function __construct()
    // {
    //   JWTAuth::parseToken()->authenticate();
    // }

  //   public function __construct()
		// {
		//     $this->middleware('jwt.auth');
		// }

    public function index()
    {
    	
    	return "It's Working";
    }

    public function getusername()
    {
    	$user = Auth::user();
		return $token = JWTAuth::fromUser($user);

  //   	$user = User::first();
  //   	return $user;
		// $token = JWTAuth::fromUser($user);
		// return $token;
    }
}
