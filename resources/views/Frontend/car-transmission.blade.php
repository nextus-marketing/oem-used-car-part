@extends('layouts.frontend')
@section('title') Car Transmission | OEM Used Car Part @endsection
@section('robots')
    <meta name="robots" content="follow, noindex, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
@endsection
@section('meta')
    <meta name="description" content="Shop used OEM transmission in the U.S. - high-quality, tested, affordable replacements for all makes with fast nationwide shipping and warranty backed.">
@endsection

@section('content')

<!-- ================= STYLES ================= -->
<style>

    /* ===== BANNER BACKGROUND ===== */
    .banner-area {
        position: relative;
        overflow: hidden;
    }

    .banner-img img {
        width: 100%;
        height: auto;
        display: block;
    }

    /* Overlay content */
    .banner-content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 115%;
        display: flex;
        align-items: center;
    }

    /* ===== FLEX LAYOUT ===== */
    .banner-flex {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 60px;
    }

    /* ===== LEFT TEXT ===== */
    .banner-text {
        flex: 1;
        color: white;
    }

    .banner-text h1 {
        font-size: 42px;
        margin-bottom: 15px;
    }

    .banner-text p {
        font-size: 16px;
        line-height: 1.6;
        max-width: 480px;
    }

    /* ===== BUTTON ===== */
    .banner-btn-left {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #fdb819;
        color: #fff;
        padding: 12px 22px;
        border-radius: 6px;
        font-weight: 600;
        margin-top: 20px;
        text-decoration: none;
    }

    /* ===== FORM ===== */
    .banner-form {
        flex: 1;
        display: flex;
        max-width: 550px;
        
    }

    .form-box {
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        max-width: 507px;
        width: 100%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    }

    .form-box h3 {
        font-size: 20px;
        margin-bottom: 5px;
    }

    .form-box p {
        font-size: 14px;
        color: #777;
        margin-bottom: 20px;
    }

    /* ===== STEPS ===== */
    .form-steps {
        display: flex;
        gap: 18px;
        margin-bottom: 25px;
        font-size: 13px;
        flex-wrap: wrap;
    }

    .step-tab {
        cursor: pointer;
        color: #999;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .step-tab.active {
        color: #fdb819;
        font-weight: 600;
    }

    .step-number {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: 600;
    }

    .step-tab.active .step-number {
        background: #fdb819;
        color: white;
    }

    /* ===== FORM FIELDS ===== */
    .form-group {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 14px;
    }

    .form-group label {
        width: 110px;
        font-size: 13px;
        font-weight: 500;
        text-align: start;
    }

    .form-group input,
    .form-group select {
        flex: 1;
        height: 42px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 13px;
    }

    /* ===== BUTTONS ===== */
    .next-btn,
    .submit-btn {
        width: 100%;
        height: 44px;
        background: #fdb819;
        color: #fff;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 600;
        margin-top: 10px;
    }

    /* ===== STEP VISIBILITY ===== */
    .form-step { display: none; }
    .form-step.active { display: block; }

    /* ========================================================= */
    /* ✅ TABLET RESPONSIVE */
    /* ========================================================= */
    @media (max-width: 992px) {

        .banner-flex {
            gap: 30px;
        }

        .banner-text h1 {
            font-size: 34px;
        }

        .banner-text p {
            font-size: 15px;
        }

        .form-box {
            max-width: 380px;
        }
    }

    /* ========================================================= */
    /* ✅ MOBILE RESPONSIVE */
    /* ========================================================= */
    @media (max-width: 768px) {

        .banner-content {
            position: relative;
            padding: 50px 0;
        }

        .banner-flex {
            flex-direction: column;
            text-align: center;
        }

        .banner-text {
            order: 1;
        }

        .banner-form {
            order: 2;
            justify-content: center;
            width: 100%;
        }

        .banner-text h1 {
            font-size: 28px;
        }

        .banner-text p {
            font-size: 14px;
            max-width: 100%;
        }

        .form-box {
            max-width: 100%;
            padding: 25px;
        }

        .form-group {
            flex-direction: column;
            align-items: flex-start;
        }

        .form-group label {
            width: 100%;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
        }

        .form-steps {
            justify-content: center;
        }

        .banner-area {
            height: 1110px;
            position: relative;
            overflow: hidden;
            }
    }

    @media only screen and (max-width: 767px) {
        .banner-area {
            height: 100%;
            text-align: center;
            padding-top: 310px;
            padding-bottom: 10px;
        }

        .mobile-nav {
    position: relative;
    }

            .mobile-nav .logo {
                position: absolute;
                left: 40%;
                transform: translateX(-50%);
            }
        }

        .banner-area .banner-text h1 {
        margin-bottom: 26px;
        font-size: 50px;
        color: #ffffff;
        font-weight: 800;
        font-style: italic;
        text-transform: uppercase;
        z-index: 1;
    }

    .banner-area .banner-text p {
        color: #ffffff;
        margin-bottom: 0px;
    }

    .cmn-btn a {
        display: inline-block;
        font-weight: 500;
        color: #ffffff;
        background-color: #fdb819;
        padding: 10px 40px !important;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.3s ease;
        z-index: 1;
        font-size: 20px;
    }

    /* Default (desktop first) */
    .only-desktop {
        display: block;
    }

    .only-mob {
        display: none;
    }

    /* Mobile */
    @media (max-width: 768px) {
        .only-desktop {
            display: none;
        }

        .only-mob {
            display: block;
        }
    }

    @media only screen and (max-width: 767px) {
        .banner-area .banner-text h1 {
            margin-bottom: 20px !important;
            font-size: 35px !important;
        }
    }

    .main-nav nav .navbar-nav {
        margin-left: auto;
        margin-right: auto;
        display: none;
    }

    .lead-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #fdb819;
        color: #fff;
        padding: 12px 22px;
        border-radius: 6px;
        font-weight: 600;
        margin-top: 10px;
        text-decoration: none;
        margin-left: 750px;
        font-size:18px;
    }

    .navbar {
        --bs-navbar-padding-y: 0.1rem;
    
    }


    @media only screen and (max-width: 767px) {
        .mean-container a.meanmenu-reveal {
            color: #fdb819;
            display: none !important;
        }
    }

    .section-title h2 {
        font-weight: 600;
        font-size: 35px;
        margin-bottom: 0;
    }

    @media (max-width: 1200px) {
        .lead-btn {
    
        margin-left: 580px;
    }
    }
</style>

 <!-- ================= BANNER ================= -->
<div class="banner-area">
    <div class="banner-img">
        <img src="/frontend/my-img/trans.png" alt="Banner">
    </div>

    <div class="banner-content">
        <div class="container">
            <div class="banner-flex">

                <!-- LEFT TEXT -->
                <div class="banner-text">
                    <h1>Browse Our Extensive <span class="highlight">Transmission Inventory</span> Online</h1>
                    <p>
                        Upgrade your vehicle with 100% original OEM parts.
                        Reliable, durable, and designed to match your car’s
                        exact specifications because your car deserves
                        nothing less.
                    </p>

                    <div class="cmn-btn only-desktop">
                        <a class="banner-btn-left" href="tel:+18883707485">
                            <i class='bx bx-phone-call'></i>
                            +1-888-370-7485
                        </a>
                    </div>
                </div>

                <!-- RIGHT FORM -->
                <div class="banner-form">
                    <div class="form-box">

                        <h3 class="text-center">Let’s Find The Perfect Transmission For You.</h3>
                        <p class="text-center">It will take less than 1 minute to fill form</p>

                        <div class="form-steps" style="justify-content: center;">
                            <span class="step-tab active" data-step="1">
                                <span class="step-number">1</span>
                                Vehicle & Part Info
                            </span>

                            <span class="step-tab" data-step="2">
                                <span class="step-number">2</span>
                                Personal Details
                            </span>
                        </div>

                        <!-- STEP 1 -->
                        <div class="form-step active" id="step1">
                        <form action="/lead-enquiry" enctype="multipart/form-data" method="POST" id="leadForm" data-wow-delay="0.5s">
                                @csrf
                            <div class="form-group">
                                <label>* Year</label>
                                <select class="form-control" name="vehicle_year" id="vehicle_year">
                                    <option value="">-- Select Year --</option>
                                </select>
                            </div>
                            <div class="field_error" id="vehicle_year-error" aria-live="polite" style="color:#ff0000; font-size:12px;"></div>

                            <div class="form-group">
                                <label>* Make</label>
                                <select class="form-control" name="make" id="make">
                                    <option value="">-- Select Vehicle Make --</option>
                                </select>
                            </div>
                            <div class="field_error" id="make-error" aria-live="polite" style="color:#ff0000; font-size:12px;"></div>

                            <div class="form-group">
                                <label>* Model</label>
                                <input type="text" placeholder="Vehicle Model" name="vehicle_model" id="vehicle_model">
                            </div>
                            <div class="field_error" id="vehicle_model-error" aria-live="polite" style="color:#ff0000; font-size:12px;"></div>

                            <div class="form-group">
                                <label>* Part Name</label>
                                <input type="text" class="form-control" value="Transmission" readonly>
                                <input type="hidden" name="vehicle_part" value="Transmission Lead Form Enquiry">
                            </div>

                            <button type="button" class="next-btn">Next</button>
                            </div>  

                            <!-- STEP 2 -->
                            <div class="form-step" id="step2">
                                <div class="form-group">
                                    <label>* Your Name</label>
                                    <input type="text" placeholder="Your Name" id="full_name" name="full_name">
                                </div>
                                <div class="field_error" id="full_name-error" aria-live="polite" style="color:#ff0000; font-size:12px;"></div>

                                <div class="form-group">
                                    <label>* Phone</label>
                                    <input type="text" placeholder="Phone Number" id="mobile" name="mobile">
                                </div>
                                <div class="field_error" id="mobile-error" aria-live="polite" style="color:#ff0000; font-size:12px;"></div>

                                <div class="form-group">
                                    <label>* Email</label>
                                    <input type="email" placeholder="Email Address" id="email" name="email">
                                </div>
                                <div class="field_error" id="email-error" aria-live="polite" style="color:#ff0000; font-size:12px;"></div>

                                <div class="form-group">
                                    <label>* Zip Code</label>
                                    <input type="text" placeholder="Zip Code" id="zip" name="zip">
                                </div>
                                <div class="field_error" id="zip-error" aria-live="polite" style="color:#ff0000; font-size:12px;"></div>

                                <button type="button" class="submit-btn">Submit</button>
                            </div>
                        </form>

                    </div>
                    
                </div>

            </div>
            <div class="cmn-btn only-mob">
                <a class="banner-btn-left" href="tel:+18883707485">
                    <i class='bx bx-phone-call'></i>
                    +1-888-370-7485
                </a>
            </div>
        </div>
    </div>
</div>

<section class="quality-area quality-area-four pt-100">
    <div class="quality-shape">
        <img src="/frontend/assets/img/car-shape.png" alt="Quality">
    </div>
    <div class="container-fluid p-0">
        <div class="row m-0 align-items-center">
            <div class="col-lg-6 p-0">
                <div class="quality-img">
                    <img src="/frontend/my-img/transmission-pic.png" 
                    alt="Quality" 
                    style="width:675px; object-fit:cover; display:block;">

                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="quality-content">
                    <div class="section-title">
                        <h2>Driven By Precision, Powered by Reliability</h2>
                    <p>At <b>OEM Used Car Parts</b>, we specialize in delivering high-quality <b>Transmission Components</b> designed to keep your vehicle shifting smoothly and performing flawlessly. From gearboxes to torque converters, clutches to valve bodies, every part undergoes thorough inspection and testing to ensure optimal performance, durability, and dependability. Backed by years of expertise and a dedication to quality, we make transmission repairs simple, trustworthy, and stress-free so your vehicle drives like new.</p>
                    </div>
                    <div class="cmn-btn">
                        <a class="banner-btn-left" href="tel:+18883707485">
                            <i class='bx bx-phone-call' ></i>
                            24/7 Customer Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
     
<!-- Form END -->

<style>
    .blog-details-form * { box-sizing: border-box; }

    /* Form Grid */
    .blog-details-form form {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
    }

    @media (max-width: 991px) { .blog-details-form form { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 575px) { .blog-details-form form { grid-template-columns: 1fr; } }

    .blog-details-form .form-control {
        width: 100%;
        padding: 12px;
        border: 1px solid #f6b400;
        border-radius: 4px;
        outline: none;
        font-size: 14px;
        background: #fff;
    }
    .blog-details-form .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 6px rgba(0,123,255,0.12);
    }

    .blog-details-form .field_error {
        color: #ff0000;
        font-size: 12px;
        margin-top: 6px;
        line-height: 1;
    }

    .default-btn {
        background-color: #f6b400;
        border: none;
        color: white;
        font-weight: 600;
        padding: 12px 30px;
        border-radius: 5px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .default-btn:hover { background-color: #d99a00; }

    /* Checkbox & Label Alignment */
    .blog-details-form .form-check {
        display: flex !important;
        align-items: flex-start !important;
        gap: 12px;
        margin-top: 10px;
        width: 100%;
    }
    .blog-details-form .form-check-input {
        width: 18px !important;
        height: 18px !important;
        margin-top: 2px; /* vertically align checkbox */
        flex-shrink: 0;
        accent-color: #007bff;
    }
    .blog-details-form .form-check-label {
        flex: 1;
        font-size: 14px;
        color: #333;
        line-height: 1.5;
        display: inline-block;
    }
    .blog-details-form .form-check-label a {
        color: #fdb819;
        text-decoration: none;
    }
    .blog-details-form .form-check-label a:hover {
        text-decoration: underline;
    }

    .blog-details-form h3 {
        margin-bottom: 25px;
        font-weight: 700;
    }
</style>

<!-- Process -->
<section class="process-area pt-100 pb-40">
    <div class="process-shape">
        <img src="/frontend/assets/img/home-one/car-shadow.png" alt="Shape">
    </div>

    <div class="section-title">
    <span class="sub-title">process</span>
    <h2>How We Work</h2>
    <p>Simple, fast, and reliable — from selection to delivery.</p>
    </div>

    <div class="container">
    <div class="row justify-content-center">
        
        <!-- Left Column -->
        <div class="col-lg-4">
        <div class="process-item">
            <div class="process-inner process-one">
            <i class='bx bxs-cog'></i>
            <h3>Genuine Parts</h3>
            <p>We source only trusted engine and transmission parts.</p>
            </div>
            <div class="process-inner">
            <i class='bx bxs-car-wash'></i>
            <h3>Quality Check</h3>
            <p>Every part is tested for strength and reliability.</p>
            </div>
        </div>
        </div>

        <!-- Center Image -->
        <div class="col-lg-4">
        <div class="process-item">
            <div class="process-img">
            <img src="/frontend/my-img/transmission-center.png" alt="Process"
            style="object-fit:cover; object-position:center; display:block;">
            </div>
        </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
        <div class="process-item">
            <div class="process-inner process-two">
            <i class='bx bxs-right-arrow-circle'></i>
            <h3>Packed & Shipped</h3>
            <p>Secure packaging ensures safe delivery.</p>
            </div>
            <div class="process-inner process-three">
            <i class='bx bxs-rocket'></i>
            <h3>Fast Delivery</h3>
            <p>Quick dispatch to get you back on the road.</p>
            </div>
        </div>
        </div>

    </div>
    </div>
</section>

<section style="padding:50px 20px; background:#ffffff;">
    <div style="max-width:1200px; margin:auto;">

        <div style="
            display:grid;
            grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));
            gap:25px;
        ">

            <!-- Card -->
            <div style="
                padding:35px 25px;
                border-radius:12px;
                background:#ffffff;
                text-align:center;
                border:1px solid #eeeeee;
                transition:0.35s ease;
                cursor:pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.08)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >

                <h2 style="font-size:38px; margin:0; color:#00235a; font-weight:700;">
                    25K+
                </h2>

                <p style="margin-top:10px; font-size:14px; color:#060404;">
                    Happy Customers
                </p>

            </div>

            <!-- Card -->
            <div style="
                padding:35px 25px;
                border-radius:12px;
                background:#ffffff;
                text-align:center;
                border:1px solid #eeeeee;
                transition:0.35s ease;
                cursor:pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.08)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >

                <h2 style="font-size:38px; margin:0; color:#fdb819; font-weight:700;">
                    15+
                </h2>

                <p style="margin-top:10px; font-size:14px; color:#060404;">
                    Years Experience
                </p>

            </div>

            <!-- Card -->
            <div style="
                padding:35px 25px;
                border-radius:12px;
                background:#ffffff;
                text-align:center;
                border:1px solid #eeeeee;
                transition:0.35s ease;
                cursor:pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.08)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >

                <h2 style="font-size:38px; margin:0; color:#00235a; font-weight:700;">
                    120K+
                </h2>

                <p style="margin-top:10px; font-size:14px; color:#060404;">
                    Parts Sold
                </p>

            </div>

            <!-- Card -->
            <div style="
                padding:35px 25px;
                border-radius:12px;
                background:#ffffff;
                text-align:center;
                border:1px solid #eeeeee;
                transition:0.35s ease;
                cursor:pointer;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 15px 35px rgba(0,0,0,0.08)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'"
            >

                <h2 style="font-size:38px; margin:0; color:#fdb819; font-weight:700;">
                    99%
                </h2>

                <p style="margin-top:10px; font-size:14px; color:#060404;">
                    Satisfaction Rate
                </p>

            </div>

        </div>
    </div>
</section>

<section class="parts-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Explore Our Parts Inventory</h2>
            </div>
            
            <div id="Container" class="row">
                
                <div class="col-sm-6 col-lg-3 mix branding transmission">
                    <div class="parts-item">
                        <div class="parts-top">
                            <img src="/frontend/my-img/transmission/hyundai.webp" alt="Parts">
                        </div>
                        <h3>Hyundai Transmission</h3>
                        <div class="cmn-btn">
                            <a class="banner-btn-left" href="tel:+18883707485">
                                <i class='bx bx-phone-call' ></i>
                                Call Us Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mix ui transmission">
                    <div class="parts-item">
                        <div class="parts-top">
                            <img src="/frontend/my-img/transmission/bmw.webp" alt="Parts">
                        </div>
                        <h3>BMW Transmission</h3>
                        <div class="cmn-btn">
                            <a class="banner-btn-left" href="tel:+18883707485">
                                <i class='bx bx-phone-call' ></i>
                                Call Us Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mix ui transmission">
                    <div class="parts-item">
                        <div class="parts-top">
                            <img src="/frontend/my-img/transmission/chevrolate.jpg" alt="Parts">
                        </div>
                        <h3>Chevrolate Transmission</h3>
                        <div class="cmn-btn">
                            <a class="banner-btn-left" href="tel:+18883707485">
                                <i class='bx bx-phone-call' ></i>
                                Call Us Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mix ui transmission">
                    <div class="parts-item">
                        <div class="parts-top">
                            <img src="/frontend/my-img/transmission/bentley.webp" alt="Parts">
                        </div>                           
                        <h3>Bentley Transmission</h3>
                        <div class="cmn-btn">
                            <a class="banner-btn-left" href="tel:+18883707485">
                                <i class='bx bx-phone-call' ></i>
                                Call Us Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Quality -->
<section class="quality-area">
    <div class="quality-img">
        <img src="/frontend/assets/img/home-one/quality-shape.png" alt="Quality">
        <img src="/frontend/assets/img/home-one/quality-shape.png" alt="Quality">
        <img src="/frontend/my-img/folt-card.webp" alt="folt-card">
        

    </div>
    <div class="container">
        <div class="quality-content">
            <div class="section-title">
                <h2>Precision. Power. Performance</h2>
                <p>We focus exclusively on high-quality <b>Transmission</b> engineered </br>to deliver smooth shifting, optimal efficiency, and long-term reliability. Built to OEM standards or higher, our components ensure seamless power transfer, improved drivability, and extended transmission life. Whether you're repairing, rebuilding,</br> or upgrading, we provide transmission solutions you can trust.</p>
            </div>
            <div class="cmn-btn">
                <a class="banner-btn-center" href="tel:+18883707485">
                    <i class='bx bx-phone-call' ></i>
                        24/7 Customer Support
                </a>
            </div>  
        </div>
    </div>
</section>
<!-- End Quality -->
           
<section class="blog-area pt-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Get Quote</span>
            <h2>Get Your Custom Quote Today</h2>
            <p>At <strong>OEM</strong>, we specialize in genuine engine and transmission parts for all vehicles. Fill out the form below to receive a personalized quote from our experts, or call us directly for immediate support and guidance.</p>
            <br>
            <div style="display:flex; gap:15px; justify-content:center; flex-wrap:wrap; margin-top:20px;">

                <a href="/contact"
                style="display:inline-flex;
                        align-items:center;
                        justify-content:center;
                        width:190px;
                        height:52px;
                        background-color:#fdb819;
                        color:#fff;
                        text-decoration:none;
                        border-radius:6px;
                        font-weight:600;
                        font-size:15px;
                        box-shadow:0 4px 10px rgba(0,0,0,0.08);">

                    <i class='bx bx-meteor' style="margin-right:8px; font-size:18px;"></i>
                    Request a Quote
                </a>

                <a href="tel:+18883707485"
                style="display:inline-flex;
                        align-items:center;
                        justify-content:center;
                        width:190px;
                        height:52px;
                        background-color:#00235a;
                        color:#fff;
                        text-decoration:none;
                        border-radius:6px;
                        font-weight:600;
                        font-size:15px;
                        box-shadow:0 4px 10px rgba(0,0,0,0.08);">

                    <i class='bx bx-phone-call' style="margin-right:8px; font-size:18px;"></i>
                    Call Us Today
                </a>

            </div>
        </div>
    </div>
</section>

<!-- Review -->
<div class="review-area">
    <div class="review-shape">
        <img src="/frontend/assets/img/home-one/review/review-shape.png" alt="Review">
    </div>
    <div class="container-fluid p-0">
        <div class="row m-0 justify-content-center">
            <div class="col-lg-6 ptb-100">
                <div class="review-slider owl-theme owl-carousel">
                    <div class="review-item">
                        <i class='bx bxs-quote-right'></i>
                        <p>I ordered a complete engine rebuild kit, and the quality blew me away. Everything fit perfectly, and my car runs smoother than ever. Shipping was fast, and customer support helped me pick the right components. Highly recommend these guys for genuine engine parts!</p>
                        <div class="review-inner">
                            <h3>Michael R</h3>
                        </div>
                    </div>
                    <div class="review-item">
                        <i class='bx bxs-quote-right'></i>
                        <p>Finding reliable transmission parts used to be a hassle until I came across this site. The torque converter I bought was OEM-grade and worked flawlessly. I’ve already recommended them to my garage clients — top-notch quality and service!</p>
                        <div class="review-inner">
                            <h3>Sandra L.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="review-bg">
                    <img src="public/frontend/my-img/testimonials.jpg" alt="Review">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Review -->

<style>
    .blog-area {
        padding-bottom: 0px;
        }
        .pt-100 {
            padding-top: 75px;
        }
</style>

<footer>
    <!-- ✅ White Full-Width Section (Outside of .container) -->
    <div class="footer-white-card mb-4">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">

                <!-- Logo only -->
                <div class="col-sm-6 col-lg-4 mb-lg-0">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="/frontend/my-img/test-logo.png" alt="Logo">
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
                                <li><a href="/terms-and-conditions"> Terms & Conditions</a></li>
                                <li><a href="/privacy-policy"> Privacy Policy</a></li>
                            </ul>
                        </div>

                        <!-- Column 2 -->
                        <div class="col-6">
                            <ul class="list-unstyled">
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const yearSelect = document.getElementById("vehicle_year");

        const currentYear = new Date().getFullYear();
        const startYear = 1952;          // change if needed
        const endYear = currentYear; // allows next year (optional)

        for (let year = endYear; year >= startYear; year--) {
            const option = document.createElement("option");
            option.value = year;
            option.textContent = year;
            yearSelect.appendChild(option);
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const makes = [
            "Acura",
            "Alfa Romeo",
            "AMC",
            "Aston Martin",
            "Audi",
            "Avanti",
            "BMW",
            "Bentley",
            "Buick",
            "Cadillac",
            "Chevrolet",
            "Chrysler",
            "Daewoo",
            "Daihatsu",
            "Datsun",
            "DeLorean",
            "Dodge",
            "Eagle",
            "Ferrari",
            "FIAT",
            "Fisker", 
            "Ford",
            "Freightliner",
            "GEO",
            "GMC",
            "Honda",
            "HUMMER",
            "Hyundai",
            "Infiniti",
            "Isuzu",
            "Jaguar",
            "Jeep",
            "Kia",
            "Lamborghini",
            "Lancia",
            "Land Rover",
            "Lexus",
            "Lincoln",
            "Lotus",
            "Maserati",
            "Mazda",
            "Maybach",
            "McLaren",
            "Mercedes-Benz",
            "Mercury",
            "Mini",
            "Mitsubishi",
            "Oldsmobile",
            "Peugeot",
            "Plymouth",
            "Pontiac",
            "Porsche",
            "Renault",
            "Rolls-Royce",
            "Rover",
            "Saab",
            "Saturn",
            "Scion",
            "Smart",
            "SRT",
            "Sterling",
            "Subaru",
            "Suzuki",
            "Tesla",
            "Toyota",
            "Triumph",
            "Volkswagen",
            "Volvo",
            "Yugo",
            "Other"
        ];

        const makeSelect = document.getElementById("make");

        makes.forEach(make => {
            const option = document.createElement("option");
            option.value = make;
            option.textContent = make;
            makeSelect.appendChild(option);
        });

    });
</script>

<script>
    function goToStep(step) {

        document.querySelectorAll(".form-step").forEach(el => {
            el.classList.remove("active");
        });

        document.getElementById("step" + step).classList.add("active");

        document.querySelectorAll(".step-tab").forEach(tab => {
            tab.classList.remove("active");

            if (tab.dataset.step == step) {
                tab.classList.add("active");
            }
        });
    }

    function clearErrors() {
        document.querySelectorAll(".field_error").forEach(el => {
            el.innerHTML = "";
        });
    }

    /* ✅ STEP 1 VALIDATION */
    function validateStep1() {

        clearErrors();

        let valid = true;

        const fields = [
            { id: "vehicle_year", message: "Vehicle Year is required" },
            { id: "make", message: "Make is required" },
            { id: "vehicle_model", message: "Vehicle Model is required" },
        ];

        fields.forEach(field => {
            const input = document.getElementById(field.id);

            if (!input.value.trim()) {
                document.getElementById(field.id + "-error").innerHTML = field.message;
                valid = false;
            }
        });

        return valid;
    }

    /* ✅ STEP 2 VALIDATION */
    function validateStep2() {

        clearErrors();

        let valid = true;

        const fields = [
            { id: "full_name", message: "Full Name is required" },
            { id: "mobile", message: "Mobile Number is required" },
            { id: "email", message: "Email is required" },
            { id: "zip", message: "Zip Code is required" }
        ];

        fields.forEach(field => {
            const input = document.getElementById(field.id);

            if (!input.value.trim()) {
                document.getElementById(field.id + "-error").innerHTML = field.message;
                valid = false;
            }
        });

        return valid;
    }

    /* ✅ STEP TAB CLICK CONTROL */
    document.querySelectorAll(".step-tab").forEach(tab => {
        tab.addEventListener("click", function() {

            const step = this.dataset.step;

            if (step == 2 && !validateStep1()) {
                return;
            }

            goToStep(step);
        });
    });

    /* ✅ NEXT BUTTON */
    document.querySelector(".next-btn").addEventListener("click", function() {
        if (validateStep1()) {
            goToStep(2);
        }
    });

    /* ✅ SUBMIT BUTTON */
    document.querySelector(".submit-btn").addEventListener("click", function() {
        if (validateStep2()) {
            document.getElementById("leadForm").dispatchEvent(new Event("submit"));
        }
    });

    /* ✅ SMART INPUT RESTRICTIONS */

    /* Only digits for mobile */
    document.getElementById("mobile").addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    /* Remove numbers from name */
    document.getElementById("full_name").addEventListener("input", function() {
        this.value = this.value.replace(/[0-9]/g, '');
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

        $('#leadForm').submit(function(e) {
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
    
@endsection