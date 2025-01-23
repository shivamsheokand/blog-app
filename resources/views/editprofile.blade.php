@extends('header')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <style>
    /* Basic reset */
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
    }

    /* Centering the form */
    .bodycont {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .form-container1 {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 600px;
    }

    h1 {
      font-size: 1.75rem;
      color: #333;
      margin-bottom: 20px;
      text-align: center;
    }

    /* Form elements */
    .mb-3 {
      margin-bottom: 20px;
    }

    .form-label1 {
      font-weight: bold;
      color: #333;
      display: inline-block;
      margin-bottom: 8px;
    }

    .form-control1 {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form-control1:focus {
      border-color: #007bff;
      outline: none;
    }

    /* Button styles */
    .btn1 {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      width: 100%;
      font-size: 1rem;
    }

    .btn1:hover {
      background-color: #0056b3;
    }

    .btn-back {
      background-color: #ccc;
      color: #333;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      font-size: 1rem;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }

    .btn-back:hover {
      background-color: #bbb;
    }

    /* Responsive styles */
    @media (max-width: 600px) {
      .form-container1 {
        padding: 15px;
      }

      h1 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="bodycont">
    <div class="form-container1">
      <h1>Edit Your Profile</h1>
      <form action="/editprofile" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="passion" class="form-label1">Passion</label>
          <input type="text" name="passion" class="form-control1" id="passion" placeholder="Enter your passion">
        </div>
        <div class="mb-3">
          <label for="img" class="form-label1">Add Image</label>
          <input type="file" name="img" class="form-control1" id="img">
        </div>
        <button type="submit" class="btn1">Submit</button>
      </form>
      <!-- Back button to go back to the previous page -->
      <button onclick="window.history.back()" class="btn-back">Go Back</button>
    </div>
  </div>
</body>
</html>
@endsection
