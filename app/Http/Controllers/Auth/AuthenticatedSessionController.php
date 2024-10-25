<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Sanctum\HasApiTokens;

class AuthenticatedSessionController extends Controller
{

    use HasApiTokens;

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

        $url = '';
        if ($request->user()->role === 'admin') {
            $url = '/admin/dashboard';
        } elseif ($request->user()->role === 'user') {
            $url = '/dashboard';
        }

        return redirect()->intended($url);
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

    public function createNewToken(Request $request)
    {
        $this->newToken($request);
    }

    public function viewToken(Request $request)
    {
        $user = Auth::user();

        $user = User::find($user->id);

        $token = $user->api_token;

        if (is_null($token)) {
            $this->newToken($request);
        } else {
            return view('admin.view.token', compact('token'));
        }
    }
}
