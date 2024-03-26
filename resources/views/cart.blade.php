{{-- delete 実行時にもっとも近い .cart-item を置き換えて削除する --}}
<div
    hx-target="closest .cart-item"
    hx-swap="outerHTML swap:0.5s"
    class="bg-slate-100 dark:bg-slate-800 p-3"
    >
    <div>カート</div>

    @foreach ($items as $item)
        <div class="w-auto rounded-xl m-3 p-3 border-2 border-sky-500 cart-item">
            <div>商品名：{{ $item[0]['name'] }}</div>
            <div>金額：{{ $item[0]['price'] }}</div>
            <form>
                @csrf
                <button
                    hx-delete="/cart?item_id={{$item[0]['id']}}"
                    class="bg-gray-600 hover:bg-gray-500 text-white p-2 mt-2 rounded-lg"
                    >
                    delete
                </button>
            </form>
        </div>
    @endforeach
</div>
