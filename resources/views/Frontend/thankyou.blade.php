@extends('layouts.frontend')
@section('title') Thank You | OEM Used Car Parts @endsection

@section('content')
<style>
    .thank-you-container {
        text-align: center;
        padding: 60px 20px;
    }

    .thank-you-container img {
        max-width: 300px;
        width: 100%;
        height: auto;
        margin: 0 auto 20px;
    }

    .thank-you-text h2 {
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .thank-you-text p {
        font-size: 18px;
        color: #666;
        margin-bottom: 30px;
    }

    .thank-you-container .cmn-btn a {
        display: inline-block;
        background-color: #ffc107;
        /* color: #000; */
        padding: 12px 25px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .thank-you-container .cmn-btn a:hover {
        background-color: #e0a800;
    }

    @media (max-width: 768px) {
        .thank-you-text h2 {
            font-size: 24px;
        }

        .thank-you-text p {
            font-size: 16px;
        }

        .thank-you-container {
            padding: 40px 15px;
        }

        .thank-you-container img {
            max-width: 200px;
        }
    }
</style>

<!-- Title Area -->
<div class="page-title-area">
    <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title Background">
    <div class="container">
        <div class="page-title-content">
            <h2>Thank You</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Thank You</li>
            </ul>
        </div>
    </div>
</div>

<!-- Thank You Content -->
<section class="thank-you-container">
    <img src="/frontend/my-img/thankyou.jpg" alt="Thank You Illustration">
    <div class="thank-you-text">
        <h2>Thank You for Contacting Us</h2>
        <p>We appreciate your message and have received it. Our team will review it and contact you soon.</p>
    </div>
    <div class="cmn-btn">
        <a href="/"><i class='bx bx-home'></i> Back To Home</a>
    </div>
</section>
@endsection
