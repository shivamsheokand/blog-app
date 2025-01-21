@extends('header')
@section('main')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create New Blog</title>
  <style>

    /* Hide scrollbars in WebKit-based browsers */
    ::-webkit-scrollbar {
      display: none;
    }

    /* Form container */
    .form-container1 {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 75%;
      box-sizing: border-box;
    }

    /* Body container */
    .bodycont {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    /* Title styling */
    h1 {
      font-size: 2rem;
      color: #333;
      margin-bottom: 20px;
    }

    .h11 {
      margin-top: 12px;
    }

    /* Form elements */
    .mb-3 {
      margin-bottom: 20px;
    }

    .form-label1 {
      font-weight: bold;
      color: #333;
      margin-bottom: 8px;
      display: inline-block;
    }

    .form-control1 {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 5px;
    }

    .form-control1:focus {
      border-color: #007bff;
      outline: none;
    }

    /* Larger textarea for Description and Code */
    .form-control1.large {
      height: 70px; /* Make the textarea taller */
      resize: vertical; /* Allow vertical resizing only */
    }

    /* Button styles */
    .btn1 {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      width: 100%;
      font-size: 1rem;
      margin-top: 20px;
    }

    .btn1:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .btn1:active {
      transform: translateY(1px);
      box-shadow: none;
    }

    /* Responsive styles */
    @media (max-width: 600px) {
      .form-container1 {
        padding: 20px;
      }

      h1 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="bodycont">
    <h1 class="h11">Create New Blog</h1>
    <form action="/upload" method="post" class="form-container1" enctype="multipart/form-data" >
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label1">Add Title</label>
        <input type="text" name="title" class="form-control1" id="title">
      </div>
      <div class="mb-3">
        <label for="header" class="form-label1">Add Header</label>
        <input type="text" name="heading" class="form-control1" id="header">
      </div>
      <div class="mb-3">
        <label for="dec" class="form-label1">Add Description</label>
        <textarea name="description" class="form-control1 large" id="dec"></textarea>
      </div>
      <div class="mb-3">
        <label for="code" class="form-label1">Add Code</label>
        <textarea name="code" class="form-control1 large" id="code"></textarea>
      </div>
      <div class="mb-3">
        <label for="author" class="form-label1">Author</label>
        <input type="text" name="author" class="form-control1" id="author">
      </div>
      <div class="mb-3">
        <label for="img" class="form-label1">Add Image</label>
        <input type="file" name="img" class="form-control1" id="img">
      </div>
      <button type="submit" class="btn1 btn-primary1">Submit</button>
    </form>
  </div>
</body>
</html>


@endsection