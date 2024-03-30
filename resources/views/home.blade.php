@extends('layouts.base')

@section('title', 'home')

@section('main')
    <div class="md:flex">
        <div
            id="cart"
            hx-get="/cart"
            hx-trigger="load"
            class="w-auto md:hidden"
            >
        </div>
        <div
            class="w-auto md:w-3/4"
            hx-get="/items"
            hx-trigger="load"
            >
        </div>
        <div
            id="cart"
            hx-get="/cart"
            hx-trigger="load"
            class="hidden md:block md:w-1/4"
            >
        </div>
    </div>
@endsection
