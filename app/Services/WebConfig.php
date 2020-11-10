<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use App\Models\Menu;

class WebConfig
{
    public static function menu()
    {
        $menu = new self;
        return $menu->getMenu();
    }

    public function getMenu()
    {
        return Cache::get('menu') ?? $this->updateMenu();
    }

    public function updateMenu()
    {
        $menus = Menu::onlyParent()->with('childs')->orderBy('order', 'asc')->get()->toArray();
        Cache::put('menu', $menus, 180);
        return $menus;
    }
}
