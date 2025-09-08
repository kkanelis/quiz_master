<form action="/register" method="POST">
    @csrf
    <label>Username: <input name="username" required></label><br>
    <label>Password: <input name="password" type="password" required></label><br>
    <button type="submit">Register</button>
</form>
<button href="/login">Login</button>

@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif