<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CartController extends Controller
{
    public function index(): View
    {
        return view('cart', [
            'items' => [
                [
                    'name' => 'キャンディー',
                    'price' => 100,
                ],
                [
                    'name' => 'プリン',
                    'price' => 300,
                ],
            ],
        ]);
    }
}
