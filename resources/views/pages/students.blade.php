<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Student List</h2>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Email</th>
            <th>Section</th>
            <th>Department</th>
            <th>Address</th>
            <th>Birthday</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->first_name }} {{ $student->last_name }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->section->name ?? 'N/A' }}</td>
            <td>{{ $student->section->department->name ?? 'N/A' }}</td>
            <td>{{ $student->profile->address ?? 'N/A' }}</td>
            <td>{{ $student->profile->birthday ?? 'N/A' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


</body>
</html>