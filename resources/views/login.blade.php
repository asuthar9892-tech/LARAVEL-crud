@if(session('success'))
<div style="color: green">{{ session('success') }}</div>
@endif

@if($errors->any())
<div style="color: red">
    @foreach($errors->all() as $error)
    <div>{{ $error }}</div>
    @endforeach
</div>
@endif

<form action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
    <a  href="{{ route('home') }}"> Registration Page</a>
