<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student Info</title>
</head>
<body>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @method('POST')
    <header>
        <h1>Create Info</h1>
    </header>

    <section>
        <article>
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email">
            </div>
            <div>
                <label for="course">Course:</label>
                <input type="text" name="course">
            </div>
            <div>
                <label for="year">Year Level:</label>
                <input type="text" name="year">
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
