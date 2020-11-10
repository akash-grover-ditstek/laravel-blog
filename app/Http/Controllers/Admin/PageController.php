<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\StoreRequest;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;
use App\Traits\ReturnTrait;
use Illuminate\Http\Request;

class PageController extends Controller
{
    use ReturnTrait;

    public function index()
    {
        $pages = Page::paginate(config('admin.page.limit'));
        return view('admin.page.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(StoreRequest $request)
    {
        $page = Page::create($request->validated());
        return redirect()->route('pages.show', $page->id)
            ->with('success', __('New page has been created'));
    }

    public function show(Page $page)
    {
        return view('admin.page.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    public function update(UpdateRequest $request, Page $page)
    {
        $page->update($request->validated());
        return redirect()->route('pages.show', $page->id)
            ->with('success', __('Page has been updated'));
    }

    public function destroy(Request $request, Page $page)
    {
        $page->delete();
        if ($request->expectsJson()) {
            return $this->returnExpectJson(
                ['status' => 'ok'],
                ['success' => __('Page has been deleted')]
            );
        }
        return redirect()->route('page.index')
            ->with('success', __('Page has been deleted'));
    }

}
