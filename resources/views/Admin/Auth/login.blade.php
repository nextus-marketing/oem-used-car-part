<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Premium Auto Parts Admin Login" />
    <link id="themeColors" rel="stylesheet" href="/backend/dist/css/style.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .btn-primary {
            --bs-btn-color: #fff !important;
            --bs-btn-bg: #0d3570 !important;
            --bs-btn-border-color: #0d3570 !important;
            --bs-btn-hover-color: #fff !important;
            --bs-btn-hover-bg: #1a3d70 !important;
            --bs-btn-hover-border-color: #1a3d70 !important;
            --bs-btn-focus-shadow-rgb: 220, 53, 69 !important;
            --bs-btn-active-color: #fff !important;
            --bs-btn-active-bg: #1a3d70 !important;
            --bs-btn-active-border-color: #1a3d70 !important;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125) !important;
            --bs-btn-disabled-color: #fff !important;
            --bs-btn-disabled-bg: #0d3570 !important;
            --bs-btn-disabled-border-color: #0d3570 !important;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 45px; /* Extra space for the icon */
        }

        .toggle-password {
            position: absolute;
            top: 70%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            font-size: 1.1rem;
            transition: color 0.2s, transform 0.2s;
            z-index: 10;
        }

        .toggle-password:hover {
            color: #0d3570;
            transform: translateY(-50%) scale(1.1);
        }

        .otp-input {
            width: 50px;
            height: 45px;
            text-align: center;
            font-size: 1.3rem;
            border-radius: 6px;
        }

        .otp-input-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">

                    <!-- Left Image -->
                    <div class="col-xl-7 col-xxl-8">
                        <div class="d-none d-xl-flex align-items-center justify-content-center"
                            style="height: calc(100vh - 80px);">
                            <img src="/frontend/my-img/dashbord.png" alt="" class="img-fluid" width="500">
                        </div>
                    </div>

                    <!-- Login / OTP Form -->
                    <div class="col-xl-5 col-xxl-4">
                        <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                            <div class="col-sm-8 col-md-6 col-xl-9">

                                <div class="text-center mb-4">
                                    <img src="/frontend/my-img/footer-logo.png" width="380" alt="Logo" />
                                    <h2 class="mb-2 fs-7 fw-bolder">
                                        Welcome to <span style="color: #0d3570"></br> OEM Used Car Parts</span>
                                    </h2>
                                    <p class="mb-4">Your Admin Dashboard</p>
                                </div>

                                <!-- Validation Errors -->
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <!-- Session Messages -->
                                @if(session('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                                @endif

                                <form method="POST" action="{{ route('login.submit') }}">
                                    @csrf
                                    @if(session('otp_required'))
                                    <!-- OTP Form here-->
                                    <div class="mb-4 text-center">
                                        <label for="otp" class="form-label fw-semibold d-block mb-3">Enter 4-digit OTP</label>
                                        <div class="otp-input-group">
                                            <input type="text" maxlength="1" class="otp-input" />
                                            <input type="text" maxlength="1" class="otp-input" />
                                            <input type="text" maxlength="1" class="otp-input" />
                                            <input type="text" maxlength="1" class="otp-input" />
                                        </div>
                                        <input type="hidden" name="otp" id="otp-hidden">
                                        <small class="text-muted d-block mt-2">
                                            Check your email for the 4-digit OTP sent by admin.
                                        </small>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-2">Validate OTP</button>
                                    <a href="{{ route('login') }}" class="btn btn-link w-100 mt-2">Back to Login</a>
                                    @else
                                    <!-- Login Form -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-Mail</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ old('email') }}" required autofocus>
                                    </div>
                                    <div class="mb-3 password-wrapper">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                        <i class="fa-solid fa-eye toggle-password" id="togglePassword"></i>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-2">Sign In</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="/backend/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="/backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/dist/js/app.min.js"></script>
    <script src="/backend/dist/js/custom.js"></script>

    <!-- Password Toggle -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword?.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        // OTP auto-move logic
        const otpInputs = document.querySelectorAll('.otp-input');
        const otpHidden = document.getElementById('otp-hidden');

        otpInputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }
                otpHidden.value = Array.from(otpInputs).map(i => i.value).join('');
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value === '' && index > 0) {
                    otpInputs[index - 1].focus();
                }
            });
        });
    </script>
</body>
</html>