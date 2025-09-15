<x-layout>
    <div class="welcome-container">
        <section class="hero">
            <h1>Welcome to Quiz Master</h1>
            <p class="hero-text">Test your knowledge, learn new things, and challenge yourself!</p>
        </section>

        <section class="features">
            <div class="feature-card">
                <i class="fas fa-brain"></i>
                <h3>Multiple Topics</h3>
                <p>Choose from various subjects and test your knowledge across different fields.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-chart-line"></i>
                <h3>Track Progress</h3>
                <p>Monitor your performance and see how you improve over time.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-trophy"></i>
                <h3>Earn Badges</h3>
                <p>Get rewarded for your achievements and showcase your expertise.</p>
            </div>
        </section>

        <section class="cta">
            @guest
                <h2>Ready to Begin?</h2>
                <p>Join our community of learners today!</p>
                <div class="cta-buttons">
                    <a href="/register" class="btn btn-primary">Get Started</a>
                    <a href="/login" class="btn btn-secondary">Login</a>
                </div>
            @else
                <h2>Continue Learning</h2>
                <p>Ready for your next challenge?</p>
                <div class="cta-buttons">
                    <a href="/dashboard" class="btn btn-primary">Go to Dashboard</a>
                </div>
            @endguest
        </section>
    </div>
</x-layout>