<?php

namespace App\Http\Controllers\Lite\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardLiteController extends Controller
{
    public function index()
    {
        return view('lite.dashboard.index');
    }
}
