<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="email">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="password">
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror
        <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="customer">Customer</option>
        </select>
        @error('role')
            <div class="error">{{ $message }}</div>
        @enderror
        <button type="submit">Register</button>
    </form>
</body>
</html>