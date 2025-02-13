<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>

</head>
<body>
    <h1>Tugas</h1>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    @yield('content')
</body>
</html>