<?php
/**
 * Created by PhpStorm.
 * User: its27eo1
 * Date: 01.08.2017
 * Time: 16:50
 */

namespace App\Http\Controllers;


class test2Controller
{
    public function test2()
    {
        $test2 = "test2";


        $data['test2'] = $test2;

        return view('test2', $data);
    }
}