<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-5M3ERJ47JR"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-5M3ERJ47JR'); </script>
        <meta charset="UTF-8">
        <title>{{ trim($__env->yieldContent('title')) }}</title>
        @if(View::hasSection('meta'))
        @yield('meta')
        @elseif(View::hasSection('meta_description'))
        <meta name="description" content="{{ trim($__env->yieldContent('meta_description')) }}">
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/boxicons.min.css">
        <!-- default -->
        <link rel="stylesheet" href="/frontend/assets/css/owl.carousel.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="/frontend/assets/css/owl.theme.default.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/magnific-popup.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/animate.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/theme-dark.css">
         <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="/frontend/assets/css/my.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <meta name="description" content="used car parts, OEM used auto parts, salvaged automobile components, genuine OEM parts, aftermarket used parts, car accessories">
        @hasSection('robots')
            @yield('robots')
        @else
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
        @endif
        <link rel="canonical" href="{{ url()->current() }}" />
        <link rel="icon" type="image/png" href="/frontend/my-img/favicon.png">
        @yield('structured_data')
    </head>
<body>
       

        <!-- Start Navbar Area -->
    <div class="navbar-area fixed-top">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="/frontend/my-img/test-logo.png" 
                alt="Logo" 
                style="max-width:160px; height:auto; max-height:196px; object-fit:contain; display:block;">
        </a>
    </div>

    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="/frontend/my-img/old-logo.webp" 
                        alt="Logo" 
                        style="max-width:311px; height:auto; max-height:226px; object-fit:contain; display:block;">
                    <img src="/frontend/assets/img/logo-two.png" class="logo-two" alt="Logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="/engine" class="nav-link">Engine</a>
                        </li>
                        <li class="nav-item">
                            <a href="/transmission" class="nav-link">Transmission</a>
                        </li>
                        <li class="nav-item">
                            <a href="/blogs" class="nav-link">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="contact-box ml-3 d-none d-md-flex">
                        <a class="banner-btn-left lead-btn" href="tel:+18883707485" 
                            style="display:flex; align-items:center; background-color:#fdb819; color:#fff; padding:10px 15px; border-radius:5px; text-decoration:none; font-size:16px;">
                            <i class='bx bx-phone-call' style="margin-right:8px;"></i>
                            +1-888-370-7485
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        </div>
    </div>

        <!-- End Navbar Area -->
    

       @yield('content')

        <!-- Footer -->
         @if (request()->is('car-engine','car-transmission','car-terms-and-conditions','car-privacy-policy') == false)
            <footer>
                <!-- ✅ White Full-Width Section (Outside of .container) -->
                <div class="footer-white-card mb-4">
                    <div class="container">
                        <div class="row justify-content-center align-items-center text-center">

                            <!-- Logo only -->
                            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
                                <div class="footer-logo">
                                    <a href="/">
                                        <img src="/frontend/my-img/footer-logo.png" alt="Logo">
                                    </a>
                                </div>
                            </div>

                            <!-- Quick Links Title only -->
                            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0 d-none d-sm-block">
                                <div class="footer-section-title">
                                    <h5>Quick Links</h5>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 mb-3 mb-lg-0 d-none d-sm-block">
                                <div class="footer-section-title">
                                    <h5>Find Us</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center text-center text-lg-start">
                        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="footer-item">
                                <p>At <span class="highlight">OEM Used Car Parts</span>, we provide 100% genuine car parts and professional services to keep your vehicle performing at its best.</p>
                                <ul class="footer-socials list-inline">
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="footer-item">
                            <div class="footer-service">
                                <div class="row">
                                    <!-- Column 1 -->
                                    <div class="col-6">
                                        <ul class="list-unstyled">
                                            <li><a href="/"> Home</a></li>
                                            <li><a href="/about"> About Us</a></li>
                                            <li><a href="/engine"> Engine</a></li>
                                            <li><a href="/transmission"> Transmission</a></li>
                                            <li><a href="/blogs"> Blogs</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 2 -->
                                    <div class="col-6">
                                        <ul class="list-unstyled">
                                            <li><a href="/contact"> Contact Us</a></li>
                                            <li><a href="/terms-and-conditions"> Terms & Conditions</a></li>
                                            <li><a href="/privacy-policy"> Privacy Policy</a></li>
                                            <li><a href="/shipping-policy">Shipping Policy</a></li>
                                            <li><a href="/return-policy"> Return Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="footer-item">
                                <div class="footer-service footer-find">
                                    <ul class="list-unstyled">
                                        <li><i class='bx bx-location-plus'></i> 123 Fifth Avenue, New York – 10160, USA.</li>
                                        <li><i class='bx bx-phone-call'></i> <a href="tel:+18883707485">+1-888-370-7485</a></li>
                                        <li><i class='bx bx-mail-send'></i> <a href="mailto:info@oemusedcarpart.com">info@oemusedcarpart.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="copyright-area mt-4 pt-3 border-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="copyright-item">
                                    <p>© 2025 Powered by <a href="/" target="_blank">OEM Used Car Parts</a> All Rights Reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        @endif

    <style>
        .footer-white-card {
            background-color: #fff;
            border: 5px solid #000;
            border-radius: 0px;
            margin-bottom: 30px;
            width: 100%;
        }

        .footer-white-card .container {
            max-width: 1200px; 
            margin: 0 auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        .footer-white-card h5 {
            margin-bottom: 0;
            color: #000;
            font-weight: 500;
            margin-left: -257px;
        }

        .footer-logo img {
            max-height: 54px;
        }

        .footer-item p {
            margin-bottom: 15px;
        }

        .footer-socials li {
            display: inline-block;
            margin-right: 10px;
        }

        .footer-service ul li {
            margin-bottom: 10px;
        }

    </style>


    <!-- Request Callback Button -->
    <a href="javascript:void(0)" class="request-callback" id="openModalBtn">Request Callback</a>

    <!-- Modal Structure -->
    <div id="callbackModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <form action="/model-enquiry" enctype="multipart/form-data" method="POST" id="modelForm"
        class="contact__form--inner" data-wow-delay="0.5s">
        @csrf
        <label for="full_name">Name*</label>
        <input type="text" id="full_name" name="full_name">
        <div class="field_error" id="full_name-error" style="color:#ff0000"></div>

        <label for="email">Email*</label>
        <input type="email" id="email" name="email">
        <div class="field_error" id="email-error" style="color:#ff0000"></div>

        <label for="mobile">Phone*</label>
        <input type="tel" id="mobile" name="mobile">
        <div class="field_error" id="mobile-error" style="color:#ff0000"></div>

        <label for="subject">Subject*</label>
        <input type="tel" id="subject" name="subject">
        <div class="field_error" id="subject-error" style="color:#ff0000"></div>

        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>

        <div class="col-12 mt-4">
            <div class="g-recaptcha" data-sitekey="6LfWrXYsAAAAADAmUekwVFV9AIytKMdZGYl51QT_"></div>
            <div class="field_error" id="captcha-error" style="color:#ff0000; margin-top:5px;"></div>
        </div>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <div style="text-align: center;">
        <button type="submit" class="text-center">Submit</button>
        </div>

        </form>
    </div>
    </div>

    <script>
            // Open and Close Modal
        const modal = document.getElementById("callbackModal");
        const openBtn = document.getElementById("openModalBtn");
        const closeBtn = document.getElementById("closeModalBtn");

        // Open modal on button click
        openBtn.onclick = () => {
        modal.style.display = "block";
        };

        // Close modal on close button click
        closeBtn.onclick = () => {
        modal.style.display = "none";
        };

        // Close modal when clicking outside modal content
        window.onclick = (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
        };

    </script>


    {{-- Popup --}}

    <!-- Flash Sale Popup -->
    <!-- Flash Sale Popup -->
     @if (!request()->is('car-engine'))
    <div class="sale-popup" id="salePopup" style="display:none;">
        <div class="sale-popup-box">

            <!-- Close Button -->
            <button class="sale-close" aria-label="Close">&times;</button>

            <!-- Left Section -->
            <div class="popup-left">
            <h3 class="flash-title">FLASH</h3>
            <p class="flash-sale-outline">SALE</p>
            <p class="flash-sale-outline">SALE</p>
            <p class="flash-sale-outline">SALE</p>
            </div>

            <!-- Right Section -->
            <div class="popup-right">
            <h2 class="off-text">35% OFF</h2>
            <p class="sub-text">Special Discount Just for You <br> Don’t Miss Out on Huge Savings!</p>

            <a href="tel:+18883707485" class="call-btn">
                Call Now +1-888-370-7485
            </a>
            </div>

        </div>
    </div>
    @endif


    <style>
        /* Overlay */
        /* Overlay */
        .sale-popup {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.65);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999;
            animation: fadeIn 0.35s ease;
        }

        /* Popup Box */
        .sale-popup-box {
            width: 90%;
            max-width: 720px;
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            display: flex;
            position: relative;
            box-shadow: 0 12px 35px rgba(0,0,0,0.25);
            animation: slideUp 0.4s ease;
        }

        /* Close Button */
        .sale-close {
            position: absolute;
            top: 12px;
            right: 18px;
            font-size: 28px;
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
        }
        .sale-close:hover { color: #ff3b3b; }

        /* LEFT SECTION */
        .popup-left {
            background: #fdb819;
            width: 40%;
            padding: 50px 35px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .flash-title {
            font-size: 2.3rem;
            font-weight: 800;
            color: #000;
            margin-bottom: 10px;
        }

        .flash-sale-outline {
            font-size: 1.8rem;
            font-weight: 700;
            color: transparent;
            -webkit-text-stroke: 1px #000;
            margin: 4px 0;
        }

        /* RIGHT SECTION */
        .popup-right {
            width: 60%;
            padding: 55px 35px;
            background: #ede8ff;
            text-align: center;
        }

        .off-text {
            font-size: 3.5rem;
            font-weight: 900;
            margin: 0;
            color: #000;
        }

        .sub-text {
            margin-top: 10px;
            font-size: 1rem;
            color: #444;
            font-weight: 600;
        }

        /* Call Button */
        .call-btn {
            display: inline-block;
            margin-top: 25px;
            background: #fdb819;
            color: #fff;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1rem;
            transition: 0.3s;
        }

        .call-btn:hover {
            background: #e0a313;
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        @keyframes slideUp { from { transform: translateY(40px); opacity: 0; }
                            to { transform: translateY(0); opacity: 1; }}

        /* Mobile Responsive */
        @media(max-width: 650px){
            .sale-popup-box{
                flex-direction: column;
                width: 92%;
            }
            .popup-left, .popup-right{
                width: 100%;
                text-align: center;
                padding: 35px 25px;
            }
            .off-text{
                font-size: 2.8rem;
            }
            .flash-title{
                text-align: center;
                font-size: 2rem;
            }
        }

    </style>

            <a href="tel:+1-888-859-5720" class="call-now-float" aria-label="Call Now">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" width="24"
                height="24">
                <path
                    d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.11-.21 11.36 11.36 0 003.54.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.54 1 1 0 01-.45 1.25l-2.2 2.2z" />
            </svg>

        <script>
            document.addEventListener("DOMContentLoaded", function() {

                // Show popup after 2 seconds
                setTimeout(() => {
                    document.getElementById("salePopup").style.display = "flex";
                }, 2000);

                // Close popup
                document.querySelector(".sale-close").addEventListener("click", () => {
                    document.getElementById("salePopup").style.display = "none";
                });

                // Close when clicking outside the popup area
                document.getElementById("salePopup").addEventListener("click", e => {
                    if (e.target.id === "salePopup") {
                        document.getElementById("salePopup").style.display = "none";
                    }
                });

            });

        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const dropdowns = document.querySelectorAll('.navbar .dropdown-toggle');

                dropdowns.forEach(function(dropdown) {
                    dropdown.addEventListener('click', function(e) {
                        if (window.innerWidth < 992) { // only for mobile
                            e.preventDefault();
                            const menu = this.nextElementSibling;
                            // toggle dropdown visibility
                            if (menu.classList.contains('show')) {
                                menu.classList.remove('show');
                            } else {
                                document.querySelectorAll('.navbar .dropdown-menu.show').forEach(function(openMenu) {
                                    openMenu.classList.remove('show');
                                });
                                menu.classList.add('show');
                            }
                        }
                    });
                });
            });
        </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#autoForm').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                form.find('div[id$="-error"]').empty();

                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        form.find('#started').attr('disabled', true).hide();
                        form.find('#form_loader').show();
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            form[0].reset();

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                var errorText = Array.isArray(value) ? value.join(
                                    ', ') : value;
                                form.find('#' + key + '-error').html(
                                    errorText); 
                            });

                            var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            $('html, body').animate({
                                scrollTop: form.find('#' + firstErrorKey + '-error')
                                    .offset().top - 200
                            }, 500);

                        } else {
                            toastr.error(
                                'An unexpected error occurred. Please try again later.',
                                '', {
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    timeOut: 1500,
                                    closeButton: true,
                                });
                        }
                    },
                    complete: function() {
                        form.find('#started').attr('disabled', false).show();
                        form.find('#form_loader').hide();
                    }
                });
            });
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {

            // ✅ Add CSRF token to AJAX headers
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#modelForm').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                form.find('div[id$="-error"]').empty(); // Clear only errors inside this form

                var url = form.attr('action');

                $.ajax({
                    type: "POST",
                    url: url,
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        form.find('#started').attr('disabled', true).hide();
                        form.find('#form_loader').show();
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            toastr.success(data.message, '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                            form[0].reset();

                            setTimeout(function() {
                                window.location.href = '/thankyou';
                            }, 1000);
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr);
                        toastr.error(
                            'There are some errors in the form. Please check your inputs.',
                            '', {
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                timeOut: 1500,
                                closeButton: true,
                            });

                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                var errorText = Array.isArray(value) ? value.join(
                                    ', ') : value;
                                form.find('#' + key + '-error').html(
                                    errorText); // ✅ Scoped to form
                            });

                            // ✅ Scroll to first error in this form only
                            var firstErrorKey = Object.keys(xhr.responseJSON.errors)[0];
                            $('html, body').animate({
                                scrollTop: form.find('#' + firstErrorKey + '-error')
                                    .offset().top - 200
                            }, 500);

                        } else {
                            toastr.error(
                                'An unexpected error occurred. Please try again later.',
                                '', {
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    timeOut: 1500,
                                    closeButton: true,
                                });
                        }
                    },
                    complete: function() {
                        form.find('#started').attr('disabled', false).show();
                        form.find('#form_loader').hide();
                    }
                });
            });
        });
    </script>
            <!-- Essential JS -->
            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/frontend/assets/js/jquery.min.js"></script>
            <script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>
            <!-- Meanmenu JS -->
            <script src="/frontend/assets/js/jquery.meanmenu.js"></script>
            <!-- Mixitup JS -->
            <script src="/frontend/assets/js/jquery.mixitup.min.js"></script>
            <!-- Owl Carousel JS -->
            <script src="/frontend/assets/js/owl.carousel.min.js"></script>
            <!-- Magnific Popup JS -->
            <script src="/frontend/assets/js/jquery.magnific-popup.min.js"></script>
            <!-- Form Ajaxchimp JS -->
            <script src="/frontend/assets/js/jquery.ajaxchimp.min.js"></script>
            <!-- Form Validator JS -->
            <script src="/frontend/assets/js/form-validator.min.js"></script>
            <!-- Contact JS -->
            <script src="/frontend/assets/js/contact-form-script.js"></script>
            <!-- Wow JS -->
            <script src="/frontend/assets/js/wow.min.js"></script>
            <!-- Custom JS -->
            <script src="/frontend/assets/js/custom.js"></script>

    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 14809608;
        window.__lc.integration_name = "manual_channels";
        window.__lc.product_name = "livechat";
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/14809608/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

</body>
</html>