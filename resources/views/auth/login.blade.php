


<form action="/login" method="POST">
    @csrf
    <label>Username: <input name="username" required></label><br>
    <label>Password`: <input name="password" type="password" required></label><br>

    <button>Login</button>
</form>
<button href="/register">Register</button>

@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif