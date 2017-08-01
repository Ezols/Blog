<?php
/**
 * Created by PhpStorm.
 * User: its27eo1
 * Date: 01.08.2017
 * Time: 16:40
 */

namespace App\Http\Controllers;
use DB;


class testController
{
    public function test()
    {
        echo phpinfo();
        die();
        $result = DB::table("TREXech")
            ->first();

        dd($result);
    }
}