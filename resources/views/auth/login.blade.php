<x-layout>

  <div class="auth-container">
      <h2 class="auth-title">Login</h2>
      
      @if ($errors->any())
          <div class="alert alert-error">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form method="POST" action="/login">
          @csrf
          <div class="form-group">
              <label class="form-label">Username</label>
              <input type="text" class="form-input" name="username" required>
          </div>

          <div class="form-group">
              <label class="form-label">Password</label>
              <input type="password" class="form-input" name="password" required>
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
      </form>
  </div>
</x-layout>