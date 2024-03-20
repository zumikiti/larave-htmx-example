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
                    'id' => 1,
                    'name' => 'キャンディー',
                    'price' => 100,
                ],
                [
                    'id' => 2,
                    'name' => 'プリン',
                    'price' => 300,
                ],
            ],
        ]);
    }

    public function destroy()
    {
        // 削除処理をここに書く

        // 成功時はヘッダーにサクセスいれる
        return response('', 204)
            ->withHeaders([
                'X-Response-Status' => 'success',
            ]);
    }
}
