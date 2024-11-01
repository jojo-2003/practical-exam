<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Info</title>
</head>
<body>
    <form method="POST" action="{{ route('students.update', ['student' => $student]) }}"> <!-- -->
        @csrf
        @method('PUT')

    <header>
        <h1>Edit Info</h1>
    </header>

    <section>
        <article>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" value="{{ $student->name }}">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" value="{{ $student->email }}">
            </div>
            <div>
                <label for="course">Course:</label>
                <input type="text" name="course" value="{{ $student->course }}">
            </div>
            <div>
                <label for="year">Year Level:</label>
                <input type="text" name="year" value="{{ $student->year }}">
            </div>
        </article>

        <div>
            <button type='submit'>Save</button>
            <button><a href="{{ route('students.index') }}">Back</a></button>
        </div>
    </section>

    </form>
</body>
</html>
