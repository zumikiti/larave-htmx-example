@foreach ($items as $item)
    <div class="w-auto rounded-xl m-3 p-3 border-2 border-sky-500 cart-item">
        <div>商品名：{{ $item[0]['name'] }}</div>
        <div>金額：{{ $item[0]['price'] }}</div>
        <div>count：{{ $item[0]['count'] }}</div>
        <div>total：{{ $item[0]['price'] * $item[0]['count'] }}</div>
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

