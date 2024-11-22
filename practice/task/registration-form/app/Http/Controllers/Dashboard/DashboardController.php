<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\User;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    
    public function showDashboard()
    {
      
        return view('dashboard.index');
       
        
    }
    public function showUserRole()
    {
        $users =User::with('role')->get();
       
        return view('dashboard.users',compact('users'));
        
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
