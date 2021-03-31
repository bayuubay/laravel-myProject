<?php

namespace App\Lib;

use App\Models\User;

class Helper{
    //
    public static function getUserName($id)
    {
        $user=User::find($id);

        if ($user==null || empty($user)) {
            # code...
            return false;
        }
        return $user->name;
    }
}

