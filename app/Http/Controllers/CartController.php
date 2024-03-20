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

    public function update()
    {
        $itemId = request()->get('item_id');
        $count = request()->get('count', 1);

        // 商品のカート追加処理実装

        return response('', 200)
            ->withHeaders([
                'X-Response-Status' => 'success',
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
