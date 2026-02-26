@extends('layouts.frontend')
@section('title') Used OEM Transmissions for Sale | Affordable & Quality Parts @endsection
@section('meta')
    <meta name="description" content="Browse quality OEM used transmissions with fast U.S. shipping. Affordable, tested, and ready for a wide range of vehicle makes - restore your ride with confidence.">
@endsection
@section('content')

<div class="page-title-area">
            <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
            <div class="container">
                <div class="page-title-content">
                    <h2>Transmission</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Transmission</li>
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
                            <img src="/frontend/my-img/transmission-2.jpg" alt="Quality">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="quality-content">
                            <div class="section-title">
                                <h2>TRANSMISSION POWER</h2>
                               <p>
                                Unlock seamless control and superior driving performance with our advanced transmission systems. Engineered for precision and durability, our transmissions ensure smooth gear shifts, improved fuel efficiency, and enhanced handling. Whether you’re navigating city streets or tackling rugged terrain, our cutting-edge technology guarantees optimal power delivery and a responsive driving experience every time.
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
                    <h2>Find the Perfect Transmission for Your Car</h2>
                </div>
                <div id="Container" class="row">
                    <div class="col-sm-6 col-lg-3 mix ui tyre">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/hyundai.webp" alt="Parts">
                            </div>
                            <h3>Hyundai Transmission</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                    Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix branding web">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/chevrolate.jpg" alt="Parts">
                            </div>
                            <h3>Chevrolate Transmission</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                    Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix ui">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/bmw.webp" alt="Parts">
                            </div>
                            <h3>BMW Transmission</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                    Call Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix ux">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/bentley.webp" alt="Parts">
                            </div>                           
                            <h3>Bentley Transmission</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                    Call Now
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
                                    <a>What types of transmissions do you offer?</a>
                                    <p>We provide a wide range of automatic, manual, and semi-automatic transmissions suitable for cars, trucks, and performance vehicles, all engineered for durability and smooth operation.</p>
                                </li>
                                <li>
                                    <a>How do I know if my transmission needs an upgrade?</a>
                                    <p>Signs include rough or delayed shifting, strange noises, slipping gears, or reduced fuel efficiency. Our experts can assess and recommend the best solution for your vehicle.</p>
                                </li>
                                <li>
                                    <a>Do you provide installation services for transmissions?</a>
                                    <p>Yes! We offer professional installation to ensure your new transmission is fitted correctly and performs at its peak.</p>
                                </li>
                                <li>
                                    <a>How long does a transmission last?</a>
                                    <p>With proper maintenance, our high-quality transmissions are designed to last hundreds of thousands of miles while maintaining smooth, reliable performance.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection