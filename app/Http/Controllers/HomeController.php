<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Validator;
use App\Subscriber;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    //about page
    public function about() {
        return view('about');
    }

    //subscribe
    public function subscribe(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|min:5|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = $request->email;
        $subscriber_check = Subscriber::where('email', $email)->first();

        if (!$subscriber_check) {
            $subscriber = Subscriber::create([
                'email' => $email
            ]);
        }

        return redirect()->back()->with('status', 'The great news will arrive at your door, prepare yourself!');
    }
}
