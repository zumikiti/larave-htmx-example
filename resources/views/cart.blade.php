<div>
    @foreach ($items as $item)
        <div class="w-auto bg-slate-100 rounded-xl dark:bg-slate-800 m-3 p-3">
            <div>商品名：{{ $item['name'] }}</div>
            <div>金額：{{ $item['price'] }}</div>
            <button
                id="delete"
                hx-delete="/cart/{{$item['id']}}"
                hx-trigger="click once"
                >
                削除
            </button>
        </div>
    @endforeach
</div>
