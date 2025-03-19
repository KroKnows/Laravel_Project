@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Inventory List</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventory as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->category_id }}</td>
                <td>{{ $item->qty }}</td>
                <td>₱{{ number_format($item->price, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
