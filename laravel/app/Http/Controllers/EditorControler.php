<?php
/**
 * Created by PhpStorm.
 * User: Тра-та-та
 * Date: 15.12.2018
 * Time: 17:34
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorControler extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('home');
        echo "Hello editor";
    }
}
