<div class="bg-slate-100 dark:bg-slate-800 p-3">
    <div>カート</div>

    @foreach ($items as $item)
        <div class="w-auto rounded-xl m-3 p-3 border-2 border-sky-500">
            <div>商品名：{{ $item['name'] }}</div>
            <div>金額：{{ $item['price'] }}</div>
            <input
                type="button"
                id="delete"
                hx-delete="/cart/{{$item['id']}}"
                hx-trigger="click once"
                class="bg-gray-600 hover:bg-gray-500 text-white p-2 mt-2 rounded-lg"
                value="削除"
            />
        </div>
    @endforeach
</div>
