<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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

    <h1>Products Application</h1>

    <h2>Products Table</h2>
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

    <h2>Create New Product</h2>
    <form action="/assignment_1/insert" method="post">
        <input type="text" name="prodName">
        <input type="text" name="prodDesc">
        <input type="number" name="prodCode">
        <input type="number" step="0.01" name="prodCost">
        <input type="submit" />
    </form>
    
</body>
</html>
