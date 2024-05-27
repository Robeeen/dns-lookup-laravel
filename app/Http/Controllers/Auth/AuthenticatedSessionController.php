<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
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

        $request->session()->regenerate();

        //return redirect()->intended(route('dashboard', absolute: false)); //Original code with laravel.

        //Start - Added 26.05.2023 - shams        
        if(Auth::user()->isAdmin()){
            return redirect()->intended(route('dashboard'));
        }elseif(Auth::user()->isSubscriber()){
            return redirect()->intended(route('subscriber'));
        }else{
            return redirect()->intended(route('/editor/dashboard'));
        }
        //Ends - Added 26.05.2023 - shams   
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
