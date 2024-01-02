<?php

namespace App\Http\Controllers\Backends;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
        $users = User::get();
        return view('Backend.users.index', [
            'users' => $users
        ]);
    }

    public function create(){
        return view('Backend.users.create');
    }

    public function store(Request $request){
       User::create($request->all());
       return redirect(route('user.index'));
    }

}
