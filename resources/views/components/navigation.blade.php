<nav class="navbar">
    <a href="/" class="navbar-brand">Home</a>
    
    <div class="nav-links">
        @guest
            <a href="/login" class="nav-link">Login</a>
            <a href="/register" class="nav-link">Register</a>
        @endguest
    </div>
</nav>