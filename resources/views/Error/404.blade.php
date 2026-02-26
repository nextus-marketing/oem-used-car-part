@extends('layouts.frontend')
@section('title') 404 | OEM Used Car Parts @endsection
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
  <div class="page-title-area">
            <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
            <div class="container">
                <div class="page-title-content">
                    <h2>404</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="thank-you-container">
    <img src="/frontend/my-img/error.jpg" alt="Error Illustration">
    <div class="thank-you-text">
        <h2>Opps ! We,ar Not Found This Page</h2>
        <p>Looks like the page you are looking for has been moved or does not exist. Click on the site logo to go to the homepage or try searching.</p>
    </div>
    <div class="cmn-btn">
        <a href="/"><i class='bx bx-home'></i> Back To Home</a>
    </div>
</section>
@endsection