<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regist InventorEasy</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/regist.css">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <h1 class="title">Registration</h1>
            <p class="subtitle">Create your account</p>
        </div>

        <form action="{{ route('register') }}" class="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="left-column">
                    <div class="form-group">
                        <label class="form-label">Email address</label>
                        <input type="text" id="email_user" name="email_user" class="form-input" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Enter your username" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Your Address</label>
                        <input type="text" id="address" name="address" class="form-input" placeholder="Enter your username" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Your City</label>
                        <input type="text" id="city" name="city" class="form-input" placeholder="Enter your username" required>
                    </div>
                </div>

                <div class="right-column">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" id="password_user" name="password_user" class="form-input" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirmation-Password</label>
                        <input type="password" id="password_user_confirm" name="password_user_confirmation" class="form-input" placeholder="Enter your password" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Upload your image</label>
                        <input type="file" id="image" name="image" class="form-input bg-primary" onchange="previewImage()" required>
                    </div>
                </div>
            </div>

            <div class="form-options">
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="remember" class="checkbox">
                    <label for="remember" class="checkbox-label">Remember me</label>
                </div>
            </div>

            <button type="submit" class="signup-button">Sign up</button>
        </form>

        <script>
            function validateEmail_Pass() {
                const email = document.getElementById("email_user").value;
                const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                const password = document.getElementById("password_user").value;
                const confirmPassword = document.getElementById("password_user_confirm").value;
                if (!pattern.test(email)) 
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Format email salah',
                        showConfirmButton: true,
                    });
                    return false;
                }
                if (password !== confirmPassword) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Password tidak cocok',
                        showConfirmButton: true,
                    });
                    return false;
                }
                if (password.length < 8) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Password harus minimal 8 karakter',
                        showConfirmButton: true,
                    });
                    return false;
                }
                return true;
            }
        </script>
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: '{{ session('success') }}',
                        showConfirmButton: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('login') }}";
                        }
                    });
                });
            </script>
        @endif
        @if(session('error'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: '{{ session('error') }}',
                        showConfirmButton: true,
                    });
                });
            </script>
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
    </div>
    <div class="preview-container bg-white raounded shadow-lg mt-4" style="background-color: #d4ddff; max-width: 400px; margin-left: 80px; border-radius: 10px;">
        <div class="div1 mt-2 ml-5" id="div1">
            <img id="previewImg" src="{{ asset('images/upload_icon.png') }}"
                style="
                    max-width: 100%; 
                    max-height: 100%; 
                    border-radius: 10px; 
                    display: flex; 
                    align-items: center; 
                    justify-content: center; 
                    padding: 10px;
                    left: 1%;
                    top: 9%;
                    position: relative;">
        </div>
        <script>
            function previewImage() {
                const input = document.getElementById('image');
                const previewImg = document.getElementById('previewImg');

                if (input.files && input.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                        previewImg.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]);
                } else {
                    previewImg.style.display = 'none';
                }
            }
        </script>
    </div>
</body>
</html>
