<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Providers\RouteServiceProvider;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    // protected $redirectTo = RouteServiceProvider::HOME;

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
}
