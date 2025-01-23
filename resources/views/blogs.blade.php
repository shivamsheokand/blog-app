@extends('header')
@section('main')
<div class="blog-container">
    @foreach($data as $blog)
    <div class="blog-post">
        <div class="blog-image-wrapper">
            <img src="{{ url('storage/'.$blog->img) }}" alt="Blog Image"/>
        </div>
        <a href={{'/blogs/'.$blog->id}} class="open-link">Read More</a>
        <h1>{{$blog->title}}</h1>
        <h3>{{$blog->heading}}</h3>
    </div>
    @endforeach
</div>

<style>
    /* Container to hold all blog posts */
    .blog-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        justify-content: center;
        padding: 20px;
        margin-top: 20px;
    }

    /* Individual blog post styling */
    .blog-post {
        position: relative;
        background-color: #ffffff; /* White background for blog post */
        border-radius: 15px;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1); /* Subtle shadow for blog post */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition on hover */
        overflow: hidden; /* Ensure no content spills outside rounded corners */
        font-family: 'Arial', sans-serif;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        max-width: 320px; /* Restrict the maximum width of the blog post */
    }

    /* Hover effect for blog posts */
    .blog-post:hover {
        transform: translateY(-10px); /* Slight lift effect */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
    }

    /* Blog image wrapper */
    .blog-image-wrapper {
        width: 100%; /* Full width of the container */
        height: 350px; /* Increased height for the image */
        overflow: hidden;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        position: relative;
    }

    /* Image styling */
    .blog-post img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensure the image covers the area */
        transition: transform 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow around image */
    }

    /* Hover effect on image */
    .blog-post img:hover {
        transform: scale(1.1); /* Slight zoom-in on image hover */
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2); /* More prominent shadow on hover */
    }

    /* Title and Heading Styling */
    .blog-post h1 {
        font-size: 1.6rem;
        color: #333333;
        margin: 15px 20px 5px 20px;
        text-transform: uppercase;
        font-weight: bold;
        letter-spacing: 1px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle text shadow on title */
    }

    .blog-post h3 {
        font-size: 1.1rem;
        color: #7d7d7d;
        margin: 5px 20px 15px 20px;
        line-height: 1.4;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); /* Light text shadow on heading */
    }

    /* Styling for the 'Read More' link */
    .open-link {
        position: relative;
        bottom: 10px;
        left: 20px;
        padding: 8px 18px;
        background-color: #2980b9;
        color: #fff;
        font-weight: bold;
        text-decoration: none;
        border-radius: 25px;
        transition: background-color 0.3s ease;
        letter-spacing: 1px;
        display: inline-block;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Shadow for the button */
    }

    /* Hover effect for 'Read More' link */
    .open-link:hover {
        background-color: #3498db; /* Lighter blue on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
    }

    /* Responsive Styling */
    @media (max-width: 1024px) {
        .blog-post h1 {
            font-size: 1.4rem; /* Adjust title size for medium screens */
        }

        .blog-post h3 {
            font-size: 1rem; /* Adjust heading size for medium screens */
        }

        .blog-image-wrapper {
            height: 300px; /* Reduce image height for tablets */
        }
    }

    @media (max-width: 768px) {
        .blog-container {
            grid-template-columns: 1fr; /* Stack blog posts on mobile */
            padding: 10px;
        }

        .blog-post {
            width: 100%; /* Ensure posts take full width on small screens */
        }

        .blog-post h1 {
            font-size: 1.2rem; /* Smaller font for title on mobile */
        }

        .blog-post h3 {
            font-size: 0.9rem; /* Smaller font for heading on mobile */
        }

        .open-link {
            padding: 6px 14px; /* Adjust padding for 'Read More' on small screens */
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        .blog-post h1 {
            font-size: 1rem; /* Further reduce title size on very small screens */
        }

        .blog-post h3 {
            font-size: 0.8rem; /* Further reduce heading size */
        }

        .open-link {
            font-size: 0.8rem; /* Adjust font size for button */
        }
    }
</style>


@endsection