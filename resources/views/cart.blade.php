@extends('layouts.base')

@section('title', 'cart')

@section('main')
    <div
        hx-target="closest .cart-item"
        hx-swap="outerHTML swap:0.5s"
        class="w-auto bg-slate-100 dark:bg-slate-800 p-3"
        >
        <div>カート</div>

        @include('components/cart-items')
    </div>
@endsection
