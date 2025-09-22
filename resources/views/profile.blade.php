<h2>Welcome, {{ $user->name }}</h2>

@if(session('success'))
<div style="color: green">{{ session('success') }}</div>
@endif

@if($errors->any())
<div style="color: red">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('profile.update') }}" method="POST">
    @csrf

    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
    </div>

    <div>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
    </div>

    <div>
        <label>Registration No:</label>
        <input type="text" name="regno" value="{{ $user->regno ?? '' }}">
    </div>

    <div>
        <label>Phone:</label>
        <input type="text" name="phone" value="{{ $user->phone ?? '' }}">
    </div>

    <div>
        <label>Address:</label>
        <input type="text" name="address" value="{{ $user->address ?? '' }}">
    </div>

    <div>
        <label>City:</label>
        <input type="text" name="city" value="{{ $user->city ?? '' }}">
    </div>

    <div>
        <label>Pincode:</label>
        <input type="text" name="pincode" value="{{ $user->pincode ?? '' }}">
    </div>

    <div>
        <label>Blood Group:</label>
        <input type="text" name="bloodgroup" value="{{ $user->bloodgroup ?? '' }}">
    </div>

    <button type="submit">Update Profile</button>
</form>

<form action="{{ route('logout') }}" method="POST" style="margin-top:20px;">
    @csrf
    <button type="submit">Logout</button>
</form>