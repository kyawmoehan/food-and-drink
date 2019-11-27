<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Message;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $booking = Customer::all();
        $messages = Message::all();
        return view('layouts.pages.dashboard',compact('booking','messages'));
    }
}
