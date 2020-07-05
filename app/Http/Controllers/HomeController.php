<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('auth.logincustome');
    }

    public function demo()
    {
        return view('home');
    }

    public function book()
    {
        $data = [
            'collection' => [
                '1' => [
                   'name' => 'tuananh'
                ],
                '2' => [
                    'name'=> 'linh'
                ],
                '3' => [
                    'name'=> 'linh'
                ],
                '4' => [
                    'name'=> 'linh'
                ],
                '5' => [
                    'name'=> 'linh'
                ],
                '6' => [
                    'name'=> 'linh'
                ],
                '7' => [
                    'name'=> 'linh'
                ]

            ]
        ];
        return view('dashboard.helodashboard',$data);
    }
}
