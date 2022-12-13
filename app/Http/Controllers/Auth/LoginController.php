<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }


    public function index(Request $request){
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if(auth()->user()->is_admin == 1){
                return redirect()->route('dashboard.index');
            }else{
                return redirect('home');
            }
        }else{
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
        }
    }
}

