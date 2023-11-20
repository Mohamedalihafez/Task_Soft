<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard', [
            'tenants' => Auth::user()->role_id == 3 ? Auth::user()->tenants : [],
        ]);
    }
}
