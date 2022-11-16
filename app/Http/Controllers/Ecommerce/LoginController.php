<?php

namespace App\Http\Controllers\Ecommerce;

use App\Models\Event;
use App\Models\Member;
use App\Models\ArsipEvent;
use Illuminate\Http\Request;
use App\Models\ProfileMember;
use App\Http\Controllers\Controller;

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
        $arsip = ArsipEvent::with(['profil', 'data'])->first();
        // dd($arsip->profil[0]->email);
        // dd(auth()->guard('member')->user()->email);
        $member = Member::where('email', auth()->guard('member')->user()->email)->first();
        $profil = ProfileMember::where('email', auth()->guard('member')->user()->email)->get();
        
        $data = $arsip->profil[0]->where('email', auth()->guard('member')->user()->email)->first();
        return view('ecommerce.dashboard', compact('member', 'profil', 'data'));
    }

    public function logout()
    {
        auth()->guard('member')->logout();
        return redirect(route('member.login'));
    }
    
}
