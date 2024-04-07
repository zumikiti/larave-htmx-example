<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\View\View;

class CartController extends Controller
{
    private string $key = 'cart';

    public function index(): View
    {
        $data = session()->exists($this->key)
            ? session()->get($this->key, [])
            : [];

        return view('cart', [
            'items' => $data,
        ]);
    }

    public function update()
    {
        $itemId = request()->get('item_id');
        $count = request()->get('count', 1);
        $item = Item::find($itemId);

        $key = "{$this->key}.{$itemId}";

        if (session()->exists($key)) {
            $cartItem = session()->pull($key)[0];

            session()->push($key, [
                'id' => $itemId,
                'count' => $cartItem['count'] + $count,
                'price' => $item->price,
                'name' => $item->name,
            ]);
        } else {
            // 商品のカート追加処理実装
            session()->push($key, [
                'id' => $itemId,
                'count' => $count,
                'price' => $item->price,
                'name' => $item->name,
            ]);
        }

        return $this->index();
    }

    public function destroy()
    {
        // 削除処理をここに書く
        $itemId = request()->get('item_id');
        session()->pull("{$this->key}.{$itemId}");

        return 'deleted.';
    }

    public function indexForSidemenu(): View
    {
        $data = session()->exists($this->key)
            ? session()->get($this->key, [])
            : [];

        return view('components.sidemenu-cart', [
            'items' => $data,
        ]);
    }
}
