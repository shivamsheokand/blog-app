@extends('header')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #eef2f7;
            color: #222;
        }
        header {
            background: linear-gradient(135deg, #00bcd4, #009688);
            color: #fff;
            padding: 2rem 0;
            text-align: center;
        }
        .container {
            max-width: 900px;
            margin: 2rem auto;
            padding: 1.5rem;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5rem;
            color: #333;
        }
        p {
            margin: 1.2rem 0;
            font-size: 1rem;
        }
        .highlight {
            color: #009688;
            font-weight: bold;
        }
        footer {
            text-align: center;
            margin-top: 3rem;
            padding: 1rem;
            background: #00796b;
            color: #fff;
            font-size: 0.9rem;
        }
        a {
            color: #009688;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
    
</head>
<body>
    <header>
        <h1>BlogNest</h1>
    </header>
    <div class="container">
        <h2>Discover <span class="highlight">Your Next Adventure</span> with Us!</h2>
        <p>
            Welcome to <strong>BlogNest</strong>, a space where innovation meets inspiration. Here, we explore fresh perspectives on personal growth, technology, creativity, and earning potential.
        </p>
        <p>
            We are more than just a blog; we are a dynamic community driven by curiosity and a passion for learning. Our goal is to empower readers with practical knowledge, exciting ideas, and opportunities to achieve their dreams.
        </p>
        <h3>Our Vision:</h3>
        <ul>
            <li><strong>Authentic Stories:</strong> Dive into relatable and inspiring content tailored just for you.</li>
            <li><strong>Empowering Opportunities:</strong> Unlock ways to monetize your talents and passions.</li>
            <li><strong>Inclusive Community:</strong> Connect with individuals who celebrate diversity and creativity.</li>
        </ul>
        <p>
            Your journey with us begins here. Let’s create, learn, and grow together.
        </p>
        <p>
            <em>Got questions or ideas? Reach out through our <a href="./contact.html">Contact Page</a>. We’d love to connect!</em>
        </p>
    </div>
    <footer>
        &copy; 2025  BlogNest . All rights reserved.
    </footer>
</body>
</html>
@endsection
