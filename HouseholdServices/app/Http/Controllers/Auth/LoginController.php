<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
// use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::HOME;

    // redirect users based on their role
    public function redirectTo() {
        $role = \Auth::user()->role->roleName;
        switch ($role) {
            case 'Admin':
                return '/dashboard';
                break;
            case 'Customer':
                return '/services/services-category';
                break;
            default:
                return '/not-found';
            break;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        flash('Incorrect email and password')->error()->important();
        return redirect('/');
    }
}
