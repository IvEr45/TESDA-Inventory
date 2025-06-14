@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Item</h2>
    <form method="POST" action="{{ route('items.update', $item->id) }}">
        @csrf @method('PUT')
        <label>Stock No.</label>
        <input type="text" name="stock_no" value="{{ $item->stock_no }}"><br>

        <label>Description</label>
        <input type="text" name="description" value="{{ $item->description }}"><br>

        <label>Unit</label>
        <input type="text" name="unit" value="{{ $item->unit }}"><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
