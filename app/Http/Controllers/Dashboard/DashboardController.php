<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\System\Menu;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (session()->has('menus')) {
            $menus = session('menus');
        } else {
            $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();
            session(['menus' => $menus]);
        }

        return view('dashboard.index', compact('menus'));
    }
}
