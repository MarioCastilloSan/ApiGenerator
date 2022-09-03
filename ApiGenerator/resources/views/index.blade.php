<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApiGenerator</title>
</head>
<body>
    <h1>ApiGenerator</h1>
    <p>ApiGenerator is a package for Laravel that generates a REST API for your models.</p>

    <table>
        <thead>
            <tr>
                <th>TABLE_CATALOG </th>
                <th>TABLE_SCHEMA </th>
                <th>TABLE_NAME</th>
                <th>TABLE_TYPE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tables as $table)
                <tr>
                    <td>{{ $table->TABLE_CATALOG }}</td>
                    <td>{{ $table->TABLE_SCHEMA }}</td>
                    <td>{{ $table->TABLE_NAME }}</td>
                    <td>{{ $table->TABLE_TYPE }}</td>
                </tr>
            @endforeach
    </table>
</body>
</html>