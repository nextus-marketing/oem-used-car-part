@extends('layouts.frontend')
@section('title') Return Policy | OEM Used Car Parts @endsection
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
            <h2>Return Policy</h2>
            <ul>
                <li><a href="#0">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Return Policy</li>
            </ul>
        </div>
    </div>
</div>

<section class="privacy-area pt-100 pb-100">
    <div class="container">
        <div class="privacy-item">
            <p>If you receive a damaged or incorrect item, please notify us immediately. DO NOT SEND THE PART BACK without contacting us first. The return of the part is the customer’s responsibility and must be completed as follows:</p>
        </div>

        
        <div class="privacy-item">
            <h2>1. Return Period and Process:</h2>
            <ul class="privacy-list">
                <li><i class='bx bx-chevron-right'></i> Items can be returned within 15 days (about 2 weeks) of delivery, based on the tracking number. It may take up to 25 days (about 3 and a half weeks) for a part to reach us once returned.</li>
                <li><i class='bx bx-chevron-right'></i> After we receive the part at our fulfillment center, allow up to seven business days for the refund to appear in your account.</li>
                <li><i class='bx bx-chevron-right'></i> Single items from a set cannot be returned individually.</li>
                <li><i class='bx bx-chevron-right'></i> Refunds will be applied to the original method of payment. If the original credit card is unavailable, store credit will be issued, which can be used for future purchases with Business Accounting Corp DBA Autovehicleparts.</li>
                <li><i class='bx bx-chevron-right'></i> Items that are damaged upon return may be denied a refund or exchange.</li>
            </ul>
        </div>

        <div class="privacy-item">
            <h2>2. Return Request and Shipping:</h2>
            <ul class="privacy-list">
                <li><i class='bx bx-chevron-right'></i> When your return request is accepted, we will send an email to your registered email address with the subject line “Return Assistance from Business Accounting Corp DBA Autovehicleparts.”</li>
                <li><i class='bx bx-chevron-right'></i> Ensure you ship the return by the date specified in this email to avoid delays or issues with the refund process.</li>
                <li><i class='bx bx-chevron-right'></i> Depending on the seller’s policy, you will either receive a return shipping label from the seller or be asked to purchase one directly from a carrier.</li>
                <li><i class='bx bx-chevron-right'></i> The seller pays for return shipping if they offer a free returns policy or if the item was damaged or faulty. The customer pays for return shipping if returning the item due to a change of mind, provided the seller’s return policy states that buyers are responsible for return shipping.</li>
                <li><i class='bx bx-chevron-right'></i> Use a carrier that provides tracking and upload the details to the return request.</li>
            </ul>
        </div>

        <div class="privacy-item">
            <h2>3. Return Address and Refunds:</h2>
            <ul class="privacy-list">
                <li><i class='bx bx-chevron-right'></i> The latest date to ship the return will be shown in an email sent to the buyer, as well as within the return request. If the buyer does not ship the return by the specified date, we may close the return request.</li>
                <li><i class='bx bx-chevron-right'></i> The return address will be provided at the conclusion of the contract and upon receipt of the RMA. Items returned to Business Accounting Corp DBA Autovehicleparts will be redirected to the correct address specified in the RMA instructions at your expense.</li>
                <li><i class='bx bx-chevron-right'></i> A refund will be issued as soon as we receive the goods. NO OPERATING COSTS are covered for any parts sold by Business Accounting Corp DBA Autovehicleparts.</li>
                <li><i class='bx bx-chevron-right'></i> If the part is found to be defective, we will first attempt to replace it. If a replacement cannot be sent, a full refund of the total sale will be issued. Goods must reach us before the warranty expires to be eligible for a refund. Return shipping charges are non-refundable.</li>
            </ul>
        </div>

        <div class="privacy-item">
            <p>For returns due to reasons other than those specified above (e.g., incorrect part ordered by the customer, part no longer needed), a 30% restocking fee and the original shipping cost may be deducted from the refund. Please consult with a mechanical specialist before ordering to ensure the correct part is selected. We strive to send the correct parts. Items returned after the warranty period has expired are non-refundable.</p>
        </div>
        
    </div>
</section>

@endsection
