<div class="grid grid-cols-2 lg:grid-cols-4">
    @foreach ($items as $item)
        <form
            hx-post="/cart"
            hx-target="#cart"
            class="m-3 p-3 border"
            >
            @csrf
            <div class="rounded-full">
                <svg
                    version="1.1"
                    width="100px"
                    height="100px"
                    class="bg-gray-300 w-24 h-24"
                    >
                    <text
                        x="50"
                        y="50"
                        font-size="12"
                        text-anchor="middle"
                        fill="black"
                        >
                        sample
                    </text>
                </svg>
            </div>
            <div class="text-lg font-medium">
                商品名： {{ $item['name'] }}
            </div>
            <div class="fornt-medium">
                価格： {{ $item['price'] }} 円
            </div>

            <input type="text" name="item_id" hidden value="{{ $item['id'] }}" />
            <input
                type="number"
                name="count"
                min="0"
                value="1"
                class="w-full bg-white border border-slate-300 rounded-md text-sm shadow-sm px-3 py-2 text-pink-600"
                />

            <button
                type="submit"
                class="bg-green-600 hover:bg-green-400 text-white p-2 mt-2 rounded-lg">
                カートに追加
            </button>
        </form>
    @endforeach
</div>
