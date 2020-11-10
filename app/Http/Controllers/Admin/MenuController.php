<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Menu\StoreRequest;
use App\Http\Requests\Admin\Menu\UpdateRequest;
use App\Models\Menu;
use App\Services\WebConfig;
use App\Traits\ReturnTrait;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    use ReturnTrait;

    public function index()
    {
        $menus = Menu::orderBy('order', 'asc')
            ->paginate(config('admin.menu.limit'));
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $parents = Menu::onlyParent()->get();
        return view('admin.menu.create', compact('parents'));
    }

    public function store(StoreRequest $request, WebConfig $config)
    {
        $menu = Menu::create($request->validated());
        $config->updateMenu();
        return redirect()->route('menus.show', $menu->id)
            ->with('success', __('New menu has been added'));
    }

    public function show(Menu $menu)
    {
        return view('admin.menu.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        $parents = Menu::onlyParent()->get();
        return view('admin.menu.edit', compact('menu', 'parents'));
    }

    public function update(UpdateRequest $request, WebConfig $config, Menu $menu)
    {
        $menu->update($request->validated());
        $config->updateMenu();
        return redirect()->route('menus.show', $menu->id)
            ->with('success', __('New menu has been updated'));
    }

    public function destroy(Request $request, WebConfig $config, Menu $menu)
    {
        $menu->delete();
        $config->updateMenu();
        if ($request->expectsJson()) {
            return $this->returnExpectJson(
                ['status' => 'ok'],
                ['success' => __('Menu has been deleted')]
            );
        }
        return redirect()->route('menus.index')
            ->with('success', __('Menu has been deleted'));
    }
}
