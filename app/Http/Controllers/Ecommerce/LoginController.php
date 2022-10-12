<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm()
    {   
        if (auth()->guard('member')->check()) return redirect(route('member.dashboard'));
        return view('ecommerce.login');
    }
    
    public function registerForm()
    {
        return view('ecommerce.register');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:members,email',
            'password' => 'required|string'
        ]);

        $auth = $request->only('email', 'password');
        $auth['status'] = 1;

        if (auth()->guard('member')->attempt($auth)) {
            return redirect()->intended(route('member.dashboard'));
        }
        return redirect()->back()->with(['error' => 'Email / Password Salah']);
    }

    public function dashboard()
    {   
        $member = Member::where('id', 1)->first();
        return view('ecommerce.dashboard', compact('member'));
    }

    public function logout()
    {
        auth()->guard('member')->logout();
        return redirect(route('member.login'));
    }
    
}
