<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\System\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Dashboard',
                'icon' => 'fa-solid fa-gauge',
                'route' => 'dashboard.index',
                'parent_id' => null,
                'order' => 1,
            ],
            [
                'name' => 'Users',
                'icon' => 'fa-solid fa-users',
                'route' => null,
                'parent_id' => null,
                'order' => 2,
            ],
            [
                'name' => 'User List',
                'icon' => null,
                'route' => 'users.index',
                'parent_id' => 2,
                'order' => 1,
            ],
            [
                'name' => 'User Create',
                'icon' => null,
                'route' => 'users.create',
                'parent_id' => 2,
                'order' => 2,
            ],
            [
                'name' => 'Settings',
                'icon' => 'fa-solid fa-cog',
                'route' => null,
                'parent_id' => null,
                'order' => 3,
            ],
            [
                'name' => 'Profile Settings',
                'icon' => null,
                'route' => 'settings.profile',
                'parent_id' => 5,
                'order' => 1,
            ],
            [
                'name' => 'Account Settings',
                'icon' => null,
                'route' => 'settings.account',
                'parent_id' => 5,
                'order' => 2,
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
