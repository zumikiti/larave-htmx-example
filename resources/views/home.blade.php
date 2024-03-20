@extends('layouts.base')

@section('title', 'home')

@section('main')
    <div class="md:flex">
        <div class="mx-auto">
            home
        </div>
        <div
            hx-get="/cart"
            hx-trigger="load"
            class="md:w-48 md:h-auto"
            >
        </div>
    </div>
@endsection
