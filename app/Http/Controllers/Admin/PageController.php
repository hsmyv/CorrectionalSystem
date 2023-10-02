<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function get($type)
    {
        try {
            $page = Page::whereType($type)->with('media')->first();
            if (!$page) {
                $page = Page::create(['type' => $type, 'name' => '', 'description' => '', 'content' => '', 'author_id' => 1]);
            }
            return response()->json(new PageResource($page), 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



    public function post(PageRequest $request, Page $page)
    {
        try {
            $page->update(array_merge($request->validated()));
            if ($request->has('meta')) {
                foreach ($request->input('meta') as $meta_key => $meta_value) {
                    $page->setMeta($meta_key, $meta_value);
                }
            }
            // if ($request->hasFile('image')) {
            //     $page->addMediaFromRequest('image')->toMediaCollection('image');
            // }
            return response()->json(['success' => 'OK'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
