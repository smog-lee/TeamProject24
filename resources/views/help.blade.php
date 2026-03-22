<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk & Feedback</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    
    <style>
        /* Small tweaks to handle the larger FAQ section */
        .wrapper {
            height: auto;
            padding: 40px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        details {
            margin-bottom: 15px;
            text-align: left;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 10px;
        }
        summary {
            cursor: pointer;
            font-weight: 600;
            list-style: none;
        }
        .faq-answer {
            font-size: 14px;
            opacity: 0.8;
            margin-top: 5px;
        }
        .wrapper textarea {
            width: 100%;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 10px;
            padding: 15px;
            color: #fff;
            margin-bottom: 15px;
            resize: none;
        }
    </style>
</head>

<body>

<nav class="navbar">
    <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li class="dropdown">
            <a href="#">User ▾</a>
            <ul class="dropdown-menu">
                <li><a href="/register">Registration</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/orders">Orders history</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Information ▾</a>
            <ul class="dropdown-menu">
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact Us</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#">Support ▾</a>
            <ul class="dropdown-menu">
                <li><a href="#">Live chat</a></li>
                <li><li><a href="{{ url('/help') }}">Help desk / Feedback</a></li></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="wrapper">
    <form action="https://formspree.io/f/your-id" method="POST">
        @csrf
        <h1>Help & Feedback</h1>

        <div style="margin-bottom: 25px;">
            <details>
                <summary>Where is my order?</summary>
                <p class="faq-answer">Check the 'Orders history' in your profile.</p>
            </details>
            <details>
                <summary>How do I leave a review?</summary>
                <p class="faq-answer">Go to the product page and scroll to the bottom.</p>
            </details>
        </div>

        <h3>Send us Feedback</h3>
        <div class="input-box">
            <input type="email" name="email" placeholder="Your Email" required>
            <i class='bx bx-envelope'></i>
        </div>

        <textarea name="message" rows="4" placeholder="Your Message" required></textarea>

        <button type="submit" class="btn">Submit Feedback</button>
    </form>
</div>

</body>
</html>