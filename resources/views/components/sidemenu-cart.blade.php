{{-- delete 実行時にもっとも近い .cart-item を置き換えて削除する --}}
<div
    hx-target="closest .cart-item"
    hx-swap="outerHTML swap:0.5s"
    class="w-auto hidden md:block bg-slate-100 dark:bg-slate-800 p-3"
    >
    <div>カート</div>

    @include('components/cart-items')
</div>

@include('components/cart')
