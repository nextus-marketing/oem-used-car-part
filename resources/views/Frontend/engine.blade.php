@extends('layouts.frontend')
@section('title') Used OEM Engines for Sale | Tested & Reliable Replacements @endsection
@section('meta')
    <meta name="description" content="Shop used OEM engines in the U.S. - high-quality, tested, affordable replacements for all makes with fast nationwide shipping and warranty backed.">
@endsection
@section('content')
<div class="page-title-area">
            <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
            <div class="container">
                <div class="page-title-content">
                    <h1 style="color:#fff;">Engine</h1>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Engine</li>
                    </ul>
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
                            <img src="/frontend/my-img/engine-2.jpg" alt="Quality">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="quality-content">
                            <div class="section-title">
                                <h2>ENGINE EXCELLENCE</h2>
                               <p>
Experience the ultimate in automotive performance with our state of the art engine solutions. Designed with precision engineering and advanced technology, our engines deliver unparalleled power, efficiency, and reliability. Every component is crafted to enhance durability and maximize fuel efficiency, ensuring your vehicle runs smoother and longer.
</p>
                            </div>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                   <i class='bx bx-phone'></i>
                                   Call Us – We’re Here 24/7
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="parts-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Find the Perfect Engine for Your Car</h2>
                </div>
                <div id="Container" class="row">
                    <div class="col-sm-6 col-lg-3 mix ui tyre">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/engine/engine.jpg" alt="Parts">
                            </div>
                            <h3>Hyundai Engine</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                     Call Us Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix branding web">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/engine/Chevrolet.jpg" alt="Parts">
                            </div>
                            <h3>Chevrolet Engine</h3>
                           <div class="cmn-btn">
                                
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                     Call Us Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix ui">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/engine/bmw.webp" alt="Parts">
                            </div>
                            <h3>BMW Engine</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                     Call Us Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix ux">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/engine/bently.webp" alt="Parts">
                            </div>                           
                            <h3>Bentley Engine</h3>
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

        <section class="faq-area pt-100 pb-70">
            <div class="container">
                <div class="row faq-wrap">
                    <div class="col-lg-6">
                          @include('Frontend.form')
                    </div>
                     <div class="col-lg-6">
                        <div class="faq-head">
                            <h2>Common Questions</h2>
                        </div>
                        <div class="faq-item">
                            <ul class="accordion">
                                <li>
                                    <a>What types of engines do you offer?</a>
                                    <p>We offer a wide range of high-performance and standard engines suitable for cars, trucks, and specialty vehicles, all engineered for reliability and efficiency.</p>
                                </li>
                                <li>
                                    <a>How long will the engine last?</a>
                                    <p>Our engines are designed with durability in mind, providing optimal performance for hundreds of thousands of miles with proper maintenance.</p>
                                </li>
                                <li>
                                    <a>Do you provide installation services?</a>
                                    <p>Yes, we offer professional installation services to ensure your engine is installed correctly and operates at peak performance.</p>
                                </li>
                                <li>
                                    <a>Can I upgrade my existing engine?</a>
                                    <p>Absolutely! We provide upgrade solutions that enhance power, efficiency, and longevity without compromising safety or reliability.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection