<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('login.post')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="email">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="password">
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
        <button type="submit">Login</button>
    </form>
</body>
</html>