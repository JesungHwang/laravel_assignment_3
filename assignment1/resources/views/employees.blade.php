<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
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

    <h1>Employees Application</h1>

    <h2>Employees Table</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->firstName }}</td>
                    <td>{{ $employee->lastName }}</td>
                    <td>{{ $employee->salary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br /> <br />

    <h2>Create New Employee</h2>
    <form action="/employees/insert" method="post">
        @csrf 
        <label for="firstName">First Name: </label>
        <input type="text" name="firstName" /> <br /> <br />
        <label for="lastName">Last Name: </label>
        <input type="text" name="lastName" /> <br /> <br />
        <label for="salary">Salary: </label>
        <input type="text" name="salary" /> <br /> <br />
        <input type="submit" />
    </form>
    
</body>
</html>