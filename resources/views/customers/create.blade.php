<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Create Customer</title>
</head>
<body>
    <form action="{{route('store.post')}}" method="POST">
        @csrf 
        {{-- // CSRF token for security --}}
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <button type="submit">Create Customer</button>
    </form>
</body>
</html>