<div class="login-container">
    <h2 class="title">Login</h2>
    <form action="/login" method="post" class="login-form">
        @csrf
        
        <input type="email" name="email" placeholder="Enter your email" class="input-field" required>
        <input type="password" name="password" placeholder="Enter your password" class="input-field" required>
        <button type="submit" class="submit-btn">Login</button>
        <a href="/signup" class="signup-link">I don't have an account. Sign Up</a>
    </form>
</div>

<style>
    /* Reset some basic styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f7fc;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    padding: 20px;
}

/* Container */
.login-container {
    background-color: #fff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    text-align: center;
    transform: translateY(0);
    transition: transform 0.3s ease-in-out;
}

.login-container:hover {
    transform: translateY(-5px);
}

/* Title */
.title {
    font-size: 30px;
    margin-bottom: 20px;
    color: #333;
    font-weight: bold;
}

/* Form styling */
.login-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Input fields */
.input-field {
    padding: 14px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 16px;
    outline: none;
    transition: 0.3s ease;
}

.input-field:focus {
    border-color: #007BFF;
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
}

/* Button */
.submit-btn {
    padding: 14px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    cursor: pointer;
    transition: all 0.3s ease;
    transform: scale(1);
}

.submit-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
}

/* Link */
.signup-link {
    color: #007BFF;
    font-size: 14px;
    text-decoration: none;
    transition: 0.3s ease;
}

.signup-link:hover {
    text-decoration: underline;
}

/* Responsive Design */
@media (max-width: 768px) {
    .login-container {
        padding: 30px;
    }

    .title {
        font-size: 26px;
    }

    .input-field {
        font-size: 15px;
        padding: 12px;
    }

    .submit-btn {
        font-size: 16px;
        padding: 12px;
    }
}

@media (max-width: 480px) {
    .login-container {
        width: 90%;
    }

    .title {
        font-size: 22px;
    }

    .input-field {
        font-size: 14px;
        padding: 10px;
    }

    .submit-btn {
        font-size: 14px;
        padding: 10px;
    }
}

</style>