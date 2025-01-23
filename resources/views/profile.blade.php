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
            max-width: 900px;
            margin: 50px auto;
            transition: all 0.3s ease;
        }

        .profile-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        /* Profile Card Styling */
        .profile-card {
            width: 100%;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 0 auto;
        }

        .profile-card .header {
            height: 150px;
            background: linear-gradient(90deg, #ab0ef3, #7e0ce1, #ad0be8);
            position: relative;
        }

        .profile-card .profile-picture {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 4px solid #ffffff;
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #fff;
            overflow: hidden;
        }

        .profile-card .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-card .content {
            padding: 20px;
            margin-top: 10px;
        }

        .profile-card .content h1 {
            font-size: 24px;
            color: #111827;
            margin-bottom: 5px;
        }

        .profile-card .content p {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 15px;
        }

        .profile-card .actions {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        /* Button Styling */
        .profile-card .actions button,
        .profile-card .actions a button {
            flex: 1;
            padding: 10px;
            background-color: #6366f1;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        .profile-card .actions button:hover,
        .profile-card .actions a button:hover {
            background-color: #4f46e5;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .skills span {
            background-color: #e0e7ff;
            color: #4f46e5;
            padding: 6px 12px;
            border-radius: 15px;
            font-size: 14px;
        }

        .profile-card .footer {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-top: 20px;
        }

        .footer span {
            font-size: 14px;
            color: #6b7280;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 15px;
            }

            .profile-card .header {
                height: 120px;
            }

            .profile-card .profile-picture {
                width: 70px;
                height: 70px;
                top: 15px;
                left: 15px;
            }

            .profile-card .content h1 {
                font-size: 20px;
            }

            .profile-card .content p {
                font-size: 12px;
            }

            .profile-card .actions button {
                padding: 8px;
                font-size: 12px;
            }

            .skills span {
                padding: 4px 8px;
                font-size: 12px;
            }
        }

        /* For mobile screens */
        @media (max-width: 480px) {
            .container {
                margin: 10px;
                padding: 10px;
            }

            .profile-card .header {
                height: 100px;
            }

            .profile-card .profile-picture {
                width: 60px;
                height: 60px;
                top: 10px;
                left: 10px;
            }

            .profile-card .content h1 {
                font-size: 18px;
            }

            .profile-card .content p {
                font-size: 10px;
            }

            .profile-card .actions button {
                padding: 6px;
                font-size: 10px;
            }

            .skills span {
                padding: 3px 6px;
                font-size: 10px;
            }
        }

        .mb1 {
            margin-top: 15px !important;
            margin-bottom: 15px !important;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-card">
            <div class="header"></div>

            <!-- Profile Picture -->
            <div class="profile-picture">
                <img src="{{ isset($user) && $user->img ? url('storage/'.$user->img) : url('images/dummy-profile.jpg') }}" alt="Profile Picture">
            </div>

            <div class="content">
                <h1>{{$data->name}}</h1>
                <h6 class="mb1">{{$data->email}}</h6>
                <p>{{ isset($user) && $user->passion ? $user->passion : "Add passion" }}</p>

                <div class="actions">
                    <a href="/editprofile"><button>Edit Profile</button></a>
                    <a href="/myblogs"><button>My Blogs</button></a>
                    <button>Logout</button>
                </div>
            </div>

            <div class="footer">
                <!-- You can add footer details here if needed -->
            </div>
        </div>
    </div>
</body>

</html>
@endsection
