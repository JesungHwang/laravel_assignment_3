@extends("layout")

@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <style>
        td, th {
            padding: 5px;
        }

        table, td, th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Manage Products</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Code</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assignment_1 as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->prodName }}</td>
                    <td>{{ $product->prodDesc }}</td>
                    <td>{{ $product->prodCode }}</td>
                    <td>{{ $product->prodCost }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br /> <br />

@if(request()->has('create'))
    <a href="{{ url('/manage') }}">Stop Adding New Items</a>

    <h2>Create New Product</h2>

    <form action="{{ url('/manage/insert') }}" method="POST">
        @csrf

        <label>Product Name:</label>
        <input type="text" name="prodName">

        <label>Description:</label>
        <input type="text" name="prodDesc">

        <label>Code:</label>
        <input type="number" name="prodCode">

        <label>Cost:</label>
        <input type="number" step="0.01" name="prodCost">

        <input type="submit" value="Submit">
    </form>
@endif

@if(!request()->has('create'))
    <a href="{{ url('/manage?create=1') }}">Add New Items</a>
@endif
    
</body>
</html>

@endsection
