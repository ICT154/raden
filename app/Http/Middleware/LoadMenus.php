<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\System\Menu;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoadMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('menus')) {
            $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();
            session(['menus' => $menus]);
        }

        view()->share('menus', session('menus'));

        return $next($request);
    }
}
