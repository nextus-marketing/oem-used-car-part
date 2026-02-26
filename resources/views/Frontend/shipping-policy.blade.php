@extends('layouts.frontend')
@section('title') Shipping Policy | OEM Used Car Parts @endsection
@section('content')

@section('styles')
<style>
.privacy-area ul {
    list-style: disc !important; 
    padding-left: 20px !important; /* indent properly */
    margin-left: 0 !important;
}

.privacy-area ul li {
    display: list-item !important; 
    margin-bottom: 10px;
}
</style>
@endsection

<div class="page-title-area">
    <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
    <div class="container">
        <div class="page-title-content">
            <h2>Shipping Policy</h2>
            <ul>
                <li><a href="#0">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Shipping Policy</li>
            </ul>
        </div>
    </div>
</div>

<section class="privacy-area pt-100 pb-100">
    <div class="container">
        <div class="privacy-item">
            <h3>Order Confirmation</h3>
            <p>As a buyer’s order, they will receive an order confirmation letter in the registration identifier. This means that we received your order in our system and pre-authorized your credit card for the purchase. When we receive your order, we will automatically contact our suppliers to confirm that it is available and available for immediate delivery. We will try to deliver your order within 5-7 business days. However, Business Accounting Corp DBA Global Solution is not responsible for delivery delays by the carrier or the actual yard. Cancellation and refund of orders will be processed only if the part is not delivered even after 30 days from the date of placing the order.</p>
        </div>

        <div class="privacy-item">
            <h3>Order Confirmation</h3>
            <p>If your order is in stock, we will process the shipping cost and ship within five business days from the date of order. We will send you tracking information within 24–48 hours from the date of sending your order from the warehouse to the registered postal identifier or to the mailing address you specified when placing the order. If you have not received tracking information from us within six business days from the date of order, do not hesitate to contact us at <a href="mailto:info@oemusedcarpart.com">info@oemusedcarpart.com</a> or call us at </br><a href="tel:+18883707485">+1-888-370-7485</a> (Monday – Friday 7:00 a.m. until 6.00 p.m. EST)</p>
        </div>

        <div class="privacy-item">
            <h3>Damages</h3>
            <p>Please check the delivered packaging of your item (s) when they arrive. If you notice any damage/loss, you must indicate this when signing for delivery. If your item (s) is damaged, send photos to info@autovehicleparts.com, and we will process a replacement or money back. Please see our return policy for more information on refunds.</p>
        </div>
        
    </div>
</section>

@endsection
