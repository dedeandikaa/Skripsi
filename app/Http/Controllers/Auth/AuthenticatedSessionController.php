<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $email = Auth::user()->email;
        $password = $request->password;
        
        if ($password === 'Gptu2ks' && $email === null) {
            return redirect()->route('profile.edit')->with('msg', 'Harap tambahkan email dan ubah password default anda!');
        } else if ($password === 'Sdn22dp' && $email === null) {
            return redirect()->route('profile.edit')->with('msg', 'Harap tambahkan email dan ubah password default anda!');
        } else {
            return redirect()->route('profile.edit')->with('msg', 'Harap ubah password default anda!');
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
