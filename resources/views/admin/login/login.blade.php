<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login — Sam Ice Cream Truck</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../css/admin-login.css">
</head>

<body>

    <!-- Floating particles -->
    <div class="particles" id="particles"></div>

    <div class="login-wrapper">

        <div class="login-logo">

            <div class="logo-icon"> <img  src="/image/ABOUTIMG.webp" alt="icecreamlogo"></div>
            <h1>Sam Ice <span>Cream</span></h1>
            <p>Admin Dashboard</p>
        </div>

        <div class="login-card">
            <h2>Welcome Back</h2>
            <p class="card-sub">Sign in to manage your messages</p>

            <div class="login-error" id="loginError">
                <i class="fas fa-circle-exclamation"></i>
                <span>Invalid username or password. Try again.</span>
            </div>

            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <label for="username"><i class="fas fa-user"></i> Username</label>
                    <i class="fas fa-user field-icon"></i>
                    <input type="email" id="username" accept="" name="email" :value="old('email')" required
                        autofocus autocomplete="username" placeholder="Enter your username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <div class="field">
                    <label for="password"><i class="fas fa-lock"></i> Password</label>
                    <i class="fas fa-lock field-icon"></i>
                    <input type="password" id="password" placeholder="Enter your password" name="password"
                        :value="__('Password')" required autocomplete="current-password">
                    <button type="button" class="pwd-toggle" id="pwdToggle" tabindex="-1">
                        <i class="fas fa-eye" id="pwdIcon"></i>
                    </button>

                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />


                <button type="submit" class="btn-login">
                    <i class="fas fa-arrow-right-to-bracket"></i>
                    Sign In
                </button>

            </form>
        </div>

        <a href="index.html" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to website
        </a>

    </div>

    <script>
        // ── Particles
        const emojis = ['🍦', '🍧', '🍨', '🍫', '🍓', '🍒'];
        const container = document.getElementById('particles');
        for (let i = 0; i < 18; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            p.textContent = emojis[Math.floor(Math.random() * emojis.length)];
            p.style.left = Math.random() * 100 + 'vw';
            p.style.fontSize = (1 + Math.random() * 1.5) + 'rem';
            p.style.animationDuration = (12 + Math.random() * 18) + 's';
            p.style.animationDelay = -(Math.random() * 20) + 's';
            container.appendChild(p);
        }

        // ── Password toggle
        const pwdInput = document.getElementById('password');
        const pwdIcon = document.getElementById('pwdIcon');
        document.getElementById('pwdToggle').addEventListener('click', () => {
            const isText = pwdInput.type === 'text';
            pwdInput.type = isText ? 'password' : 'text';
            pwdIcon.className = isText ? 'fas fa-eye' : 'fas fa-eye-slash';
        });
    </script>
</body>

</html>
