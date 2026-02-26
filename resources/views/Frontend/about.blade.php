@extends('layouts.frontend')
@section('title') About Us | OEM Used Car Parts @endsection
@section('content')
 <!-- Page Title -->
        <div class="page-title-area">
            <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

         <!-- Quality -->
        <section class="quality-area quality-area-four pt-100">
            <div class="quality-shape">
                <img src="/frontend/assets/img/car-shape.png" alt="Quality">
            </div>
            <div class="container-fluid p-0">
                <div class="row m-0 align-items-center">
                    <div class="col-lg-6 p-0">
                        <div class="quality-img">
                            <img src="/frontend/assets/img/about-car.jpg" 
                            alt="Quality" 
                            style="width:675px; height:436px; object-fit:cover; display:block;">

                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="quality-content">
                            <div class="section-title">
                                <h2>Driven By Passion, Built on Trust</h2>
                            <p>At OEM Used Car Parts, we specialize in providing high-quality automotive components that keep your vehicle running smoothly. With years of experience and a commitment to excellence, we ensure every part meets the highest standards of performance and reliability. Our goal is to make your car maintenance hassle-free and trustworthy.</p>
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
         <section class="pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">services</span>
                    <h2>Our Services</h2>
                    <p>At OEM, we provide high-quality engine and transmission parts along with expert automotive solutions, ensuring reliability, performance, and longevity for your vehicle.</p>

                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4">
                        <a href="/engine">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="/frontend/assets/img/home-one/service/1.jpg" alt="Service">
                                </div>
                                <div class="service-content">
                                    <i class='bx bx-car'></i>
                                    <i class='bx bx-car service-icon'></i>
                                    <h3>Engine Parts</h3>
                                    <p>High-quality components to keep your engine running smoothly.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a href="/transmission">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="/frontend/assets/img/home-one/service/2.jpg" alt="Service">
                                </div>
                                <div class="service-content">
                                    <i class='bx bxs-wrench'></i>
                                    <i class='bx bxs-wrench service-icon'></i>
                                    <h3>Transmission Parts</h3>
                                    <p>Reliable parts for seamless gear shifting and performance.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Quality -->
        <!-- Feature -->
        <div class="feature-area">
            <div class="feature-shape">
                <img src="/frontend/assets/img/home-one/feature-shape.png" alt="Feature">
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 p-0">
                        <div class="feature-img">
                            <img src="/frontend/assets/img/home-one/feature-bg.jpg" alt="Feature">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
    <div class="feature-content">
        <h2>Our Features</h2>
        <ul>
            <li>
                <i class='bx bx-box'></i>
                <h3>Trusted & Quality Work</h3>
                <p>We provide only OEM Used Car Parts that meet strict quality standards, ensuring reliability and long-lasting performance for your vehicle.</p>
            </li>
            <li>
                <i class='bx bxs-truck'></i>
                <h3>Fast Service Delivery</h3>
                <p>Our efficient logistics and dedicated team ensure your orders are delivered quickly, keeping your vehicle on the road without delay.</p>
            </li>
            <li>
                <i class='bx bx-money'></i>
                <h3>Money Back Guarantee</h3>
                <p>We stand by our products. If you're not satisfied, our hassle-free money-back guarantee gives you peace of mind with every purchase.</p>
            </li>
        </ul>
    </div>
</div>

                </div>
            </div>
        </div>
        <!-- End Feature -->
        </br>
        </br>
@endsection