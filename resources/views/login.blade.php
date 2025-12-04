<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>


    <nav>
    <ul>
        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>

        
        <li>
            <a href="#">User ▾</a>
            <ul>
                <li><a href="{{ route('register') }}">Registration</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('orders') }}">Orders history</a></li>
            </ul>
        </li>

       
        <li>
            <a href="#">Information ▾</a>
            <ul>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </li>


        
        <li>
            <a href="#">Support ▾</a>
            <ul>
                <li><a href="#">Live chat</a></li>
                <li><a href="#">Help desk / Feedback</a></li>
            </ul>
        </li>
    </ul>

    </nav>

    <div class="auth-container">
    <div class="auth-box">

    

    <form id="login-form" method="POST" action="{{route('login.login')}}" class="auth-form active">
        <h3 class="form-title">Welcome Back</h3>
        
        <label for="register-name">Full Name</label>
        <input type="text" id="register-name" name="name" placeholder="Joe Biffen" required>

        <label for="register-email">Email Address</label>
        <input type="email" id="register-email" name="email" placeholder="joe@outlook.com" required>

        <label for="register-password">Password</label>
        <input type="password" id="register-password" name="password" placeholder="qwerty" required>

        <label for="register-confirm">Confirm Password</label>
        <input type="password" id="register-confirm" name="password_confirmation" placeholder="qwerty" required>

        <button type="submit" class="submit-btn">Sign Up</button>
        </form>
    </div>
</div>

<div class="tab-controls">
        <button id="login-tab" class="tab active" onclick="showForm('login')">Login</button>
        <button id="register-tab" class="tab active" onclick="showForm('register')">Register</button>
    <div>
