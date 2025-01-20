@extends('header')
@section('main')
<!DOCTYPE html>
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
            background-color: #e0e7ff;
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
            padding: 40px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .container:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Profile Header */
        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header h1 {
            font-size: 38px;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 15px;
        }

        .profile-header p {
            font-size: 16px;
            color: #6b7280;
            font-style: italic;
        }

        /* Profile Details */
        .profile-details {
            display: flex;
            flex-direction: column;
            gap: 25px;
            font-size: 18px;
            line-height: 1.8;
        }

        .profile-details h2 {
            font-size: 24px;
            color: #1e3a8a;
            font-weight: 600;
        }

        .profile-details p {
            font-size: 18px;
            color: #374151;
        }

        .profile-details p span {
            font-weight: bold;
            color: #111827;
        }

        /* Button Styling */
        .back-btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #6366f1;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 18px;
            font-weight: 600;
            text-align: center;
            margin-top: 30px;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #4f46e5;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }

            .profile-header h1 {
                font-size: 32px;
            }

            .profile-details h2 {
                font-size: 22px;
            }

            .profile-details p {
                font-size: 16px;
            }

            .back-btn {
                font-size: 16px;
                padding: 12px 25px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-header">
            <h1>User Profile</h1>
            <p>View and manage your account information</p>
        </div>

        <!-- Profile Details -->
        <div class="profile-details">
            <h2>Name:</h2>
            <p>{{ $data->name }}</p>

            <h2>Email:</h2>
            <p>{{ $data->email }}</p>
        </div>

        <a href="/dashboard" class="back-btn">Back to Dashboard</a>
    </div>

</body>
</html>

@endsection