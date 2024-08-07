<?php
// app/Helpers/MenuHelper.php
namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class MenuHelper
{
    public static function isActive($route)
    {
        return Route::currentRouteName() === $route;
    }

    public static function isParentActive($menu)
    {
        foreach ($menu->children as $child) {
            if (self::isActive($child->route) || self::isParentActive($child)) {
                return true;
            }
        }
        return false;
    }
}
