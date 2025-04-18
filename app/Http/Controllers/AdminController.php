<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class AdminController extends Controller
{

    use HasApiTokens;

    public function AdminDashboard()
    {
        return view('admin.index');
    } // End method

    /**
     * Destroy an authenticated session.
     */
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin()
    {

        return view('admin.admin_login');
    } // End Method

    public function AdminProfile()
    {

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.admin_profile_view', compact('profileData'));
    }


    public function newToken(Request $request)
    {

        $user = User::where('user_id', 2);
        $token = $user->createToken('api-token');

        return ['token' => $token->plainTextToken];
    }
}
