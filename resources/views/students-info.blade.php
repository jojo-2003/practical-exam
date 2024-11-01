<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Information Management</title>
</head>
<body>
    <header>
        <h1>Students Information Management System</h1>
    </header>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student) <!-- {student}, in routing of edit function -->
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->year }}</td>
                    <td>
                        <button><a href="{{ route('students.edit', $student->id) }}">Edit</a></button>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <a href="{{ route('students.create') }}">Create Student Info</a>

</body>
</html>
