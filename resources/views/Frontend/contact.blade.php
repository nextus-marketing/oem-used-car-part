
@extends('layouts.frontend')
@section('title') Contact Us | OEM Used Car Parts @endsection
@section('content')
        <div class="page-title-area">
            <img src="/frontend/assets/img/home-one/footer-car.png" alt="Title">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>

         <section class="contact-area pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="contact-item contact-left">
                            <h3>Contact Information</h3>
                            <p>Have questions or need assistance? Our friendly support team is ready to help you with anything you need.</p>
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    Address: 123 Fifth Avenue, New York – 10160, USA.
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                   <a href="mailto:info@oemusedcarpart.com">info@oemusedcarpart.com</a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:+18883707485">
                                        +1-888-370-7485
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-item contact-right">
                            <h3>Get In Touch</h3>
                            <form action="/contact-enquiry" enctype="multipart/form-data" method="POST" id="contactForm" data-wow-delay="0.5s">
                            @csrf
                                <div class="row justify-content-center">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="full_name" id="full_name" class="form-control"  data-error="Please enter your full name" placeholder="Please enter your full name">
                                            <div class="field_error" id="full_name-error" style="color:#ff0000;"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control"  data-error="Please enter your email" placeholder="Please enter your email">
                                            <div class="field_error" id="email-error" style="color:#ff0000;"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="mobile" id="mobile"  data-error="Please enter your number" class="form-control" placeholder="Please enter your number">
                                            <div class="field_error" id="mobile-error" style="color:#ff0000;"></div>
                                        </div>
                                    </div>
            
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="subject" class="form-control"  data-error="Please enter your subject" placeholder="Please enter your subject">
                                            <div class="field_error" id="subject-error" style="color:#ff0000;"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8"  data-error="Write your message" placeholder="Write your message.."></textarea>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="form-check agree-label">
                                                <input
                                                    name="gridCheck"
                                                    value="I agree to the terms and privacy policy."
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="gridCheck"
                                                    required >
                                                <label class="form-check-label" for="gridCheck">
                                                    By checking this box, I agree to receive SMS related to Order confirmation,
                                                    tracking information, and Order updates from Revive Pinnacle LLC.
                                                    Text <a href="tel:1-888-370-7485">STOP</a> to opt out. Messages and data rates may apply.
                                                    Message frequency will vary. Text <a href="tel:1-888-370-7485">HELP to 1-888-370-7485</a> for assistance.
                                                    For information, read our 
                                                    <a href="/privacy-policy" target="_blank">Privacy Policy</a> and 
                                                    <a href="/terms-and-conditions" target="_blank">SMS Terms & Conditions</a>.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                            <div style="display: flex; justify-content: center;">
                                                <div class="g-recaptcha" data-sitekey="6LfLrOsrAAAAABULR3YRPIY8CVq27wvLU1KNCNlF"></div>
                                            </div>
                                            <div id="captcha-error" class="field_error" style="color:#ff0000; text-align:center; margin-top:5px;"></div>
                                    </div>
                                     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <div class="col-md-12 col-lg-12">
                                        <button type="submit" class="contact-btn btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
       
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contactForm').submit(function(e) {
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
                                errorText); // Scoped to form
                        });

                        // Scroll to first error in this form only
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