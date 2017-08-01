<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Redirect;

class BlogController
{
    public function index()
    {
        $blog = DB::table('posts')->get();



        $data['blog'] = $blog;
        return view('blog', $data);
    }

    public function insert()
    {
        DB::table('posts')->insert(request()->all());

        return Redirect::back();

    }


}