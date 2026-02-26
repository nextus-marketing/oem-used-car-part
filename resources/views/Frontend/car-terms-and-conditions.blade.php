@extends('layouts.frontend')
@section('title') Terms and Conditions | OEM Used Car Parts @endsection
@section('content')


<style>
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

@media (max-width: 1200px) {
    .lead-btn {
   
    margin-left: 580px;
}
}

@media only screen and (max-width: 767px) {
    .mean-container a.meanmenu-reveal {
        color: #fdb819;
        display: none !important;
    }
    .mobile-nav .logo {
            position: absolute;
            left: 40%;
            transform: translateX(-50%);
        }
}
</style>


<div class="page-title-area">
    <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
    <div class="container">
        <div class="page-title-content">
            <h2>Terms and Conditions</h2>
            <ul>
                <li><a href="#0">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Terms and Conditions</li>
            </ul>
        </div>
    </div>
</div>

<section class="terms-area pt-100 pb-100">
    <div class="container">

        

        <div class="terms-item">
            <h3>Interpretation</h3>
            <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>

            <h3>Definitions</h3>
            <ul>
                <li><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where “control” means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>
                <li><strong>Country</strong> refers to: New York, United States</li>
                <li><strong>Company</strong> (referred to as either “the Company”, “We”, “Us” or “Our”) refers to OEM, 7101 Kaiser Pl Falls Church VA-22042.</li>
                <li><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>
                <li><strong>Service</strong> refers to the Website.</li>
                <li><strong>Terms and Conditions</strong> (also referred as “Terms”) mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service.</li>
                <li><strong>Third-party Social Media Service</strong> means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</li>
                <li><strong>Website</strong> refers to OEM, accessible from <b>OEM Used Car Parts</b> </li>
                <li><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
            </ul>
        </div>

        <div class="terms-item">
            <h4>Acknowledgment</h4>
            <ul>
                <li>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company.</li>
                <li>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions.</li>
                <li>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms, You may not access the Service.</li>
                <li>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</li>
                <li>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company.</li>
            </ul>
        </div>

        <div class="terms-item">
            <h4>Links to Other Websites</h4>
            <ul>
                <li>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</li>
                <li>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third-party web sites or services.</li>
                <li>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</li>
            </ul>
        </div>

        <div class="terms-item">
            <h4>Termination</h4>
            <ul>
                <li>We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including if You breach these Terms.</li>
                <li>Upon termination, Your right to use the Service will cease immediately.</li>
            </ul>
        </div>

        <div class="terms-item">
            <h4>Limitation of Liability</h4>
            <ul>
                <li>The entire liability of the Company and any of its suppliers under any provision of this Terms shall be limited to the amount actually paid by You through the Service or 100 USD if You haven’t purchased anything through the Service.</li>
                <li>To the maximum extent permitted by law, the Company shall not be liable for any special, incidental, indirect, or consequential damages.</li>
                <li>The Service is provided “AS IS” and “AS AVAILABLE” without warranty of any kind.</li>
            </ul>
        </div>

        <div class="terms-item">
            <h4>Governing Law</h4>
            <p>The laws of the Country, excluding its conflicts of law rules, shall govern these Terms and Your use of the Service.</p>
        </div>

        <div class="terms-item">
            <h4>Disputes Resolution</h4>
            <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p>
        </div>

        <div class="terms-item">
            <h4>European Union (EU) Users</h4>
            <p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident.</p>
        </div>

        <div class="terms-item">
            <h4>United States Legal Compliance</h4>
            <p>You represent and warrant that (i) You are not located in a country that is subject to US government embargo or designated as “terrorist supporting”, and (ii) You are not listed on any US government list of prohibited or restricted parties.</p>
        </div>

        <div class="terms-item">
            <h3>Severability and Waiver</h3>
            <h4>Severability</h4>
            <p>If any provision of these Terms is held to be unenforceable or invalid, the remaining provisions will continue in full force and effect.</p>
            <h3>Waiver</h3>
            <p>The failure to exercise a right or to require performance under these Terms shall not affect a party’s ability to exercise such right later.</p>
        </div>

        <div class="terms-item">
            <h4>Translation Interpretation</h4>
            <p>These Terms may have been translated. The original English text shall prevail in the case of a dispute.</p>
        </div>

        <div class="terms-item">
            <h4>Changes to These Terms and Conditions</h4>
            <ul>
                <li>We reserve the right to modify or replace these Terms at any time. Material changes will be notified at least 30 days prior.</li>
                <li>By continuing to access or use Our Service after revisions, You agree to be bound by the revised terms.</li>
            </ul>
        </div>

        <div class="terms-item">
            <h4>Contact Us</h4>
            <p>If you have any questions about these Terms and Conditions, You can contact us:</p>
            <p>Email: <a href="mailto:info@oemusedcarpart.com">info@oemusedcarpart.com</a></p>
        </div>

    </div>
</section>


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
                                <li><a href="/car-terms-and-conditions"> Terms & Conditions</a></li>
                                <li><a href="/car-privacy-policy"> Privacy Policy</a></li>
                            </ul>
                        </div>

                        <!-- Column 2 -->
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li><a href="#0">Shipping Policy</a></li>
                                <li><a href="#0"> Return Policy</a></li>
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

@endsection
