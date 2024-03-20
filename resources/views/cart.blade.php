<div>
    @foreach ($items as $item)
        <div>{{ $item['name'] }}</div>
        <div>{{ $item['price'] }}</div>
    @endforeach
</div>
