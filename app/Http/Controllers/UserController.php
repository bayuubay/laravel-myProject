<?php

namespace App\Http\Controllers;

use App\Lib\Helper;
use App\Models\User;
use App\Traits\ResponseApi;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ResponseApi;
    //
    public function userDetails(Request $request)
    {
        $user_id = $request->user_id;

        $user = User::find($user_id);
        $response = [
            'code' => 200,
            'message' => 'User details',
            'result' => $user
        ];

        return response()->json($response);
    }

    public function users(Request $request){
        $users=User::all();
        $response=[
            "code"=>200,
            "message"=>"user details",
            "result"=>$users
        ];
        return response()->json($response);
    }

    public function userName(Request $request)
    {
        $id=$request->id;
        $result = Helper::getUserName($id);
        if(!$result){
            return $this->error('username not found');
        }
        return $this->success('user name',$result,200);
    }
}
