<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Customer</title>
</head>
<body>
    <form action="" method="POST">
        @csrf 
        {{-- // CSRF token for security --}}
        <div>
            {{-- old('id',$customer->id) --}}
            <label for="name">Name:</label>
            <input type="text" value="{{ old('name', $customer->name) }}" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" value="{{ old('email', $customer->email) }}"name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" value="{{ old('password', $customer->password) }}"name="password" id="password" required>
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" value="{{ old('phone', $customer->phone) }}"name="phone" id="phone">
        </div>
        <button type="submit">Update Customer</button>
    </form>
</body>
</html>