<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::query()->where('active', true)->get();

        return view('items', [
            'items' => $items,
        ]);
    }
}
