@extends('header')
@section('main')
<div class="blog-container">
    <!-- Go Back Button -->
    <button class="go-back-btn" onclick="goBack()">
        <i class="fas fa-arrow-left"></i></button>

    <div class="blog-post">
        <img src="{{ url('storage/'.$data->img) }}" alt="Blog Image"/>
        <h1>{{$data->title}}</h1>
        <h3>{{$data->heading}}</h3>
        <p>{{$data->description}}</p>
        
        <!-- Code section with copy button -->
        <div class="code-container">
            <pre id="code-block">{{$data->code}}</pre>
            <!-- Copy button with FontAwesome icon -->
            <button class="copy-btn" onclick="copyCode()">
                <i class="fas fa-copy"></i> <!-- FontAwesome copy icon -->
            </button>
        </div>

        <p><strong>Author:</strong> {{$data->author}}</p>
        <p><strong>Created at:</strong> {{$data->created_at}}</p>
    </div>
</div>

<!-- Add FontAwesome CDN link for the copy icon and go back icon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    /* Container to hold all blog posts */
    .blog-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
        width: 85%;
        margin: 0 auto;
        box-sizing: border-box;
        overflow: hidden; /* Hide the scrollbar for the entire container */
        margin-top: 20px;
    }

    /* Go Back Button Styling */
    .go-back-btn {
        margin-top: 50px;
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: #3498db;
        color: white;
        padding: 10px 20px;
        font-size: 1.2rem;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .go-back-btn i {
        font-size: 1.4rem;
        margin-right: 8px;
    }

    .go-back-btn:hover {
        background-color: #2980b9;
    }

    /* Individual blog post styling */
    .blog-post {
        width: 100%;
        max-width: 100%;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 16px 32px rgba(0, 0, 0, 0.15); /* Strong 3D shadow */
        font-family: 'Arial', sans-serif;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(145deg, #ffffff, #f4f4f4);
        position: relative;
    }

    /* Hover effect for blog post */
    .blog-post:hover {
        transform: translateY(-15px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); /* Enhance shadow on hover */
    }

    /* Title and Heading Styling */
    .blog-post h1 {
        font-size: 2rem;
        color: #333333;
        margin-bottom: 15px;
        font-weight: bold;
        text-align: center;
    }

    .blog-post h3 {
        font-size: 1.4rem;
        color: #555;
        margin-bottom: 20px;
        text-align: center;
    }

    /* Description Styling */
    .blog-post p {
        font-size: 1.2rem;
        color: #777;
        margin-bottom: 25px;
        line-height: 1.6;
        text-align: justify;
    }

    /* Image Styling */
    .blog-post img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
        object-fit: cover;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    /* Code Block Styling */
    .code-container {
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 25px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        position: relative; /* To position the copy button inside */
    }

    /* Style for the code block */
    .code-container pre {
        background-color: #2d2d2d;
        color: #f8f8f2;
        padding: 20px;
        border-radius: 6px;
        font-family: 'Courier New', monospace;
        overflow-x: auto;
        font-size: 1.1rem;
        white-space: pre-wrap;
        word-wrap: break-word;
        line-height: 1.6;
    }

    /* Copy button styling */
    .copy-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #3498db;
        color: white;
        padding: 8px 12px;
        font-size: 1.2rem;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .copy-btn i {
        font-size: 1.2rem; /* Adjust icon size */
    }

    .copy-btn:hover {
        background-color: #2980b9;
    }

    /* Responsive Styling */
    @media (max-width: 1024px) {
        .blog-post h1 {
            font-size: 1.8rem;
        }

        .blog-post h3 {
            font-size: 1.3rem;
        }

        .blog-post p {
            font-size: 1rem;
        }

        .blog-container {
            width: 90%;
        }

        .copy-btn {
            font-size: 1rem;
        }
    }

    @media (max-width: 768px) {
        .blog-post h1 {
            font-size: 1.6rem;
        }

        .blog-post h3 {
            font-size: 1.2rem;
        }

        .blog-post p {
            font-size: 1rem;
        }

        .blog-container {
            width: 100%;
        }

        .copy-btn {
            font-size: 0.9rem;
            padding: 8px 10px;
        }
    }

    @media (max-width: 480px) {
        .blog-post h1 {
            font-size: 1.4rem;
        }

        .blog-post h3 {
            font-size: 1rem;
        }

        .blog-post p {
            font-size: 0.9rem;
        }

        .copy-btn {
            font-size: 0.9rem;
            padding: 8px 10px;
        }
    }

    /* Custom WebKit Scrollbar Styling */
    .blog-container {
        overflow-y: scroll; /* Enable scrolling */
    }

    /* Hide scrollbar */
    .blog-container::-webkit-scrollbar {
        display: none; /* Hide the scrollbar */
    }

    /* If you want to customize the scrollbar (show and hide), you can use this as an option */
    .blog-container::-webkit-scrollbar {
        width: 10px;
    }

    .blog-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .blog-container::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    .blog-container::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>

<script>
    // Function to go back to the previous page
    function goBack() {
        window.history.back();  // This will navigate to the previous page in the browser history
    }

    // Function to copy code to clipboard
    function copyCode() {
        /* Get the code text from the pre element */
        var codeText = document.getElementById('code-block').innerText;
        
        /* Create a temporary text area to copy the code text */
        var textArea = document.createElement('textarea');
        textArea.value = codeText;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        
        /* Optionally, alert the user that the code has been copied */
        alert('Code copied to clipboard!');
    }
</script>

@endsection