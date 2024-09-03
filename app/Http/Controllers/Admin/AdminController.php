<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthAdminRequest;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class AdminController extends Controller
{
    /**
     * Display today, yesterday, this month this year orders
     */
    public function index()
    {
        // Get today's orders
        $todayOrders = Order::whereDay('created_at', Carbon::today())->get();
        $yesterdayOrders = Order::whereDay('created_at', Carbon::yesterday())->get();
        $monthOrders = Order::whereMonth('created_at', Carbon::now()->month)->get();
        $yearOrders = Order::whereYear('created_at', Carbon::now()->year)->get();
        return view(
            'admin.index',
            compact(
                'todayOrders',
                'yesterdayOrders',
                'monthOrders',
                'yearOrders'
            )
        );
    }

    /**
     * Display login form
     */
    public function login()
    {
        if (!Auth::guard('admin')->check()) {
            return view('admin.login');
        }
        return redirect()->route('admin.index');
    }

    /**
     * Auth the admin
     */
    public function auth(AuthAdminRequest $request)
    {
        if ($request->validated()) {
            if (
                Auth::guard('admin')->attempt([
                    'email' => $request->email,
                    'password' => $request->password
                ])
            ) {
                $request->session()->regenerate();
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('admin.login')->with('error', 'The credentials do not much our credential');
            }
        }
        return view('admin.dashboard');
    }

    /**
     * Lougout the admin
     */
    public function logout()
    {
        Auth::guard()->logout();
        return redirect()->route('admin.index');
    }

}
