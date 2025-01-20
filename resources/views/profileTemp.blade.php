<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header h1 {
            font-size: 36px;
            color: #333;
        }

        .profile-details {
            font-size: 20px;
            line-height: 1.6;
        }

        .profile-details h2 {
            font-size: 24px;
            color: #555;
        }

        .profile-details p {
            font-size: 18px;
            color: #666;
        }

        .profile-details p span {
            font-weight: bold;
        }

        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-header">
            <h1>User Profile</h1>
        </div>

        <div class="profile-details">
            <h2>Name:</h2>
            <p>{{ $data->name }}</p>

            <h2>Email:</h2>
            <p>{{ $data->email }}</p>
        </div>

        <a href="/" class="back-btn">Back to Dashboard</a>
    </div>

</body>
</html>
