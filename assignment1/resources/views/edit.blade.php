@extends("layout")

@section("content")

<h2>Edit Product</h2>

<form action="/manage/update/{{ $product->id }}" method="POST">
    @csrf
    <label>Product Name</label>
    <input type="text" name="prodName" value="{{ $product->prodName }}">
    <label>Description</label>
    <input type="text" name="prodDesc" value="{{ $product->prodDesc }}">
    <label>Code</label>
    <input type="number" name="prodCode" value="{{ $product->prodCode }}">
    <label>Cost</label>
    <input type="number" step="0.05" name="prodCost" value="{{ $product->prodCost }}">
    <br><br>
    <input type="submit" value="Confirm Edit">

</form>

@endsection
