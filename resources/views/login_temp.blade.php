<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Floating background elements */
        .bg-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            left: 10%;
            top: 20%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            right: 10%;
            top: 10%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            left: 20%;
            bottom: 20%;
            animation-delay: 4s;
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            right: 20%;
            bottom: 10%;
            animation-delay: 1s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Main container */
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 48px 40px;
            width: 420px;
            max-width: 90vw;
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 10;
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.3);
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            width: 180px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 16px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .title {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #6b7280;
            font-size: 15px;
            font-weight: 400;
        }

        /* Form */
        .form {
            space-y: 24px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            color: #374151;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            height: 52px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 0 16px;
            font-size: 16px;
            color: #1f2937;
            background: #ffffff;
            transition: all 0.2s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-input::placeholder {
            color: #9ca3af;
        }

        /* Options row */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 24px 0;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox {
            width: 18px;
            height: 18px;
            accent-color: #667eea;
        }

        .checkbox-label {
            color: #6b7280;
            font-size: 14px;
            user-select: none;
            cursor: pointer;
        }

        .forgot-link {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: #5a67d8;
        }

        /* Button */
        .login-button {
            width: 100%;
            height: 52px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
            margin-bottom: 24px;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.5);
        }

        .login-button:active {
            transform: translateY(0);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 32px 0;
            gap: 16px;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background: #e5e7eb;
        }

        .divider-text {
            color: #9ca3af;
            font-size: 14px;
            font-weight: 500;
        }

        /* Social buttons */
        .social-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 32px;
        }

        .social-button {
            height: 48px;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .social-button:hover {
            border-color: #d1d5db;
            background: #f9fafb;
        }

        /* Footer */
        .footer {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }

        .footer a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            color: #5a67d8;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                padding: 32px 24px;
                border-radius: 16px;
            }
            
            .social-buttons {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="bg-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="login-container">
        <div class="header">
            <div class="logo">InventorEasy</div>
            <h1 class="title">Welcome back</h1>
            <p class="subtitle">Sign in to your account</p>
        </div>

        <form action="{{ route('login') }}" class="form" method="POST" onchange="return validateEmail()">
            @csrf
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input type="text" id="email_user" name="email_user" class="form-input" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" id="password_user" name="password_user" class="form-input" placeholder="Enter your password" required>
            </div>

            <div class="form-options">
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="remember" class="checkbox">
                    <label for="remember" class="checkbox-label">Remember me</label>
                </div>
                <a href="#" class="forgot-link">Forgot password?</a>
            </div>

            <input type="submit" class="login-button">Sign in</button>
        </form>
        <script>
            const Swal = require('sweetalert2');
            function validateEmail() {
            const email = document.getElementById("email_user").value;
            const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!pattern.test(email)) {
                alert("Format email salah bolo");
                return false;
            }
                return true;
            }
        </script>
        @if(session('success'))
            <div class="alert alert-success mt-4" style="font-size: 20px; display: flex; align-items: center;">
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Berhasil',
                        showConfirmButton: true,
                    });
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger mt-4" style="font-size:l 20px; display: flex; align-items: center;">
                {{ session('error') }}
            </div>
        @endif

        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">Or continue with</span>
            <div class="divider-line"></div>
        </div>

        <div class="social-buttons">
            <a href="#" class="social-button">
                <span><i class="bi bi-google"></i></span>
                Google
            </a>
            <a href="#" class="social-button">
                <span><i class="bi bi-facebook"></i></span>
                Facebook
            </a>
        </div>

        <div class="footer">
            Don't have an account? <a href="#">Sign up</a>
        </div>
    </div>
</body>
</html>