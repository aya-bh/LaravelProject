<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function store(Request $request)
{
    if ($request->user()->can('create-tasks')) {
        //Code goes here
    }
}

public function destroy(Request $request, $id)
{   
    if ($request->user()->can('delete-tasks')) {
      //Code goes here
    }

}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
