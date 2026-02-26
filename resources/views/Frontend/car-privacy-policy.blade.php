@extends('layouts.frontend')
@section('title') Privacy Policy | OEM Used Car Parts @endsection
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
            <h2>Privacy Policy</h2>
            <ul>
                <li><a href="#0">Home</a></li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</div>

<section class="privacy-area pt-100 pb-100">
    <div class="container">
        <div class="privacy-item">
            <p>At OEM, accessible from <b>OEM Used Car Parts</b>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by OEM and how we use it.</p>
            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to <a href="tel:+18883707485">contact us</a>.</p>
            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in OEM. This policy is not applicable to any information collected offline or via channels other than this website.</p>
        </div>

        <div class="privacy-item">
            <h2>Consent</h2>
            <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
        </div>

        <div class="privacy-item">
            <h2>Information We Collect</h2>
            <p>Sms consent and personal information will not be shared, sold or disclosed with any third party or any other individuals.</p>
            <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
            <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
            <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
            <p>We do not disclose your personal information to third parties. By using our website, you consent to receiving SMS notifications, phone calls, and emails related to our automobile services.</p>
        </div>

        <div class="privacy-item">
            <h2>How We Use Your Information</h2>
            <p>We use the information we collect in various ways, including to:</p>
            <ul class="privacy-list">
                <li><i class='bx bx-chevron-right'></i> Provide, operate, and maintain our website</li>
                <li><i class='bx bx-chevron-right'></i> Improve, personalize, and expand our website</li>
                <li><i class='bx bx-chevron-right'></i> Understand and analyze how you use our website</li>
                <li><i class='bx bx-chevron-right'></i> Develop new products, services, features, and functionality</li>
                <li><i class='bx bx-chevron-right'></i> Communicate with you, either directly or through partners</li>
                <li><i class='bx bx-chevron-right'></i> Send you emails</li>
                <li><i class='bx bx-chevron-right'></i> Find and prevent fraud</li>
            </ul>
        </div>

        <div class="privacy-item">
            <h2>Log Files</h2>
            <p>OEM follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services’ analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users’ movement on the website, and gathering demographic information.</p>
        </div>
        <div class="privacy-item">
            <h2>Third Party Privacy Policies</h2>
            <p>OEM’s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>
            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers’ respective websites.</p>
        </div>
        <div class="privacy-item">
            <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
            <p>Under the CCPA, among other rights, California consumers have the right to:</p>
            <ul>
                <li>Request that a business that collects a consumer’s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</li>
                <li>Request that a business delete any personal data about the consumer that a business has collected.</li>
                <li>Request that a business that sells a consumer’s personal data, not sell the consumer’s personal data.</li>
            </ul>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
        </div>
        <div class="privacy-item">
            <h2>GDPR Data Protection Rights</h2>
            <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
            <ul>
                <li>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</li>
                <li>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</li>
                <li>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</li>
                <li>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</li>
                <li>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</li>
                <li>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</li>
            </ul>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
        </div>

        <div class="privacy-item">
            <h2>Children’s Information</h2>
            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
            <p>OEM does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
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
