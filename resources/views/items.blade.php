<div class="grid grid-cols-2 lg:grid-cols-3">
    @foreach ($items as $item)
        <div class="m-3 p-3 border">
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
        </div>
    @endforeach
</div>
