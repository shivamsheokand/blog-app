@extends('header')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7fafc;
            color: #333;
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        /* Container for centering and spacing */
        .container {
            width: 100%;
            max-width: 95%;
            margin: 50px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .container:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        /* Profile Header */
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header h1 {
            font-size: 36px;
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 10px;
        }

        .profile-header p {
            font-size: 18px;
            color: #6b7280;
            font-style: italic;
        }

        /* Blog Posts Section */
        .blog-post {
            margin-top: 40px;
            border-top: 2px solid #e0e7ff;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .blog-image-wrapper {
            width: 100%;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .blog-image-wrapper img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .blog-image-wrapper img:hover {
            transform: scale(1.05);
        }

        .blog-post h1 {
            font-size: 28px;
            color: #1e40af;
            margin: 15px 0;
        }

        .blog-post h3 {
            font-size: 20px;
            color: #4b5563;
            margin-bottom: 15px;
        }

        .open-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6366f1;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .open-link:hover {
            background-color: #17a4b4;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .container {
                padding: 30px;
            }

            .profile-header h1 {
                font-size: 32px;
            }

            .profile-post h1 {
                font-size: 26px;
            }

            .profile-post h3 {
                font-size: 18px;
            }

            .blog-image-wrapper img {
                max-height: 300px;
            }

            .open-link {
                font-size: 14px;
                padding: 8px 16px;
            }

            .back-btn {
                font-size: 16px;
                padding: 12px 25px;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 25px;
            }

            .profile-header h1 {
                font-size: 28px;
            }

            .profile-details h2 {
                font-size: 20px;
            }

            .profile-details p {
                font-size: 16px;
            }

            .back-btn {
                font-size: 16px;
                padding: 12px 25px;
            }

            .blog-post h1 {
                font-size: 24px;
            }

            .blog-post h3 {
                font-size: 18px;
            }

            .blog-image-wrapper img {
                max-height: 250px;
            }

            .open-link {
                font-size: 14px;
                padding: 8px 16px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 15px;
            }

            .profile-header h1 {
                font-size: 24px;
            }

            .profile-details h2 {
                font-size: 18px;
            }

            .profile-details p {
                font-size: 14px;
            }

            .back-btn {
                font-size: 14px;
                padding: 10px 20px;
            }

            .blog-post h1 {
                font-size: 22px;
            }

            .blog-post h3 {
                font-size: 16px;
            }

            .blog-image-wrapper img {
                max-height: 200px;
            }

            .open-link {
                font-size: 12px;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-header">
            <h1>My Blogs</h1>
        </div>

        @foreach($my as $blog)
        <div class="blog-post">
            <div class="blog-image-wrapper">
                <img src="{{ url('storage/'.$blog->img) }}" alt="Blog Image"/>
            </div>
            <a href="{{ '/blogs/'.$blog->id }}" class="open-link">Read More</a>
            <a href="{{ '/blogsedit/'.$blog->id }}" class="open-link">Edit</a>
            <a href="{{ '/blogsdelete/'.$blog->id }}" class="open-link">Delete</a>
            <h1>{{ $blog->title }}</h1>
            <h3>{{ $blog->heading }}</h3>
        </div>
        @endforeach

    </div>

</body>
</html>

@endsection
