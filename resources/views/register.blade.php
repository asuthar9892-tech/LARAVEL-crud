<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>

    @if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if($errors->any())
    <div style="color: red;">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('/') }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label>Registration no:</label>
            <input type="text" name="regno" value="{{ old('regno') }}" required>
        </div>
        <div>
            <label>Phone no:</label>
            <input type="text" name="phone" value="{{ old('phone') }}" required>
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>

</body>

</html>