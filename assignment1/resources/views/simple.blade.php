<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blade Templates Demo</title>
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

    <h1>Blade Template Demo</h1>


        <ul>
            <li>Carrots</li>
            <li>Cucumber</li>
            <li>Tomato</li>
        </ul>

    {{-- Our app is a security disaster, I hope the client doesn't see this! 
    --}}

    <h2>Fruits</h2>
    <ul>
        @forelse($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @empty 
            <p><em>No fruits found...</em></p>
        @endforelse
    </ul>

    <h2>Employees</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $products)
                <tr>
                    <td>{{ $product["firstName"] }}</td>
                    <td>{{ $product["lastName"] }}</td>
                    <td>{{ $empproductloyee["salary"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br /> <br />

    <h2>Employees</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < count($employees); $i++)
                <tr>
                    <td>{{ $employees[$i]["firstName"] }}</td>
                    <td>{{ $employees[$i]["lastName"] }}</td>
                    <td>{{ $employees[$i]["salary"] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

    @if ($status == "success")
        <p style="color:green;">Success message!</p>
    @elseif ($status == "error")
        <p style="color:red">Error message</p>
    @else 
        <p style="color:blue">Unkown status</p>
    @endif

    <p>Value: {{ $value }}</p>
    <p>Value: <?php echo $value ?></p>
    
    <p>Shared Value: {{ $sharedvalue }}</p>

    <p>Maybe set: {{ $maybe ?? 'default value for maybe!' }}</p>

</body>
</html>
