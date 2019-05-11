<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Appointment;
use App\Message;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(30);
        $appointments = Appointment::orderBy('id', 'desc')->paginate(30);
        return view('home', compact('appointments', 'messages'));
    }
}
