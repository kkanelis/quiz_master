<x-layout>

  <div class="auth-container">
      <h2 class="auth-title">Register</h2>
      
      @if ($errors->any())
          <div class="alert alert-error">
              <!-- Error messages -->
          </div>
      @endif

      <form method="POST" action="/register">
          @csrf
          <div class="form-group">
              <label class="form-label">Username</label>
              <input type="text" class="form-input" name="username" required>
          </div>

          <div class="form-group">
              <label class="form-label">Password</label>
              <input type="password" class="form-input" name="password" required>
          </div>

          <button type="submit" class="btn btn-primary">Register</button>
      </form>
  </div>

</x-layout>