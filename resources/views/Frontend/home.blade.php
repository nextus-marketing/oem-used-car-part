@extends('layouts.frontend')
@section('title') Buy OEM Used Engines And Transmissions | OEM Used Car Part @endsection
@section('meta')
<meta name="description" content="Find quality OEM used engines & transmissions online — certified, affordable, and delivered fast across the USA. Get the right part today!">
@endsection

@section('content')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AutoPartsStore",
      "name": "OEM Used Car Part",
      "url": "https://oemusedcarpart.com",
      "logo": "https://oemusedcarpart.com/frontend/my-img/old-logo.webp",
      "image": "https://oemusedcarpart.com/frontend/assets/img/home-one/banner-car.png",
      "description": "Buy quality OEM used engines and transmissions in the USA. Affordable, reliable auto parts with warranty and fast nationwide shipping.",
      "telephone": "+1-888-370-7485",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Fifth Avenue",
        "addressLocality": "New York",
        "postalCode": "10160",
        "addressCountry": "US"
      },
      "openingHours": "Mo-Fr 11:00-19:30",
      "areaServed": {
        "@type": "Country",
        "name": "United States"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "OEM Used Engines and Transmissions",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Product",
              "name": "Used OEM Engine",
              "category": "Engines",
              "description": "Shop used OEM engines in the U.S. — high-quality, tested, affordable replacements for all makes with fast nationwide shipping and warranty backed.",
              "url": "https://oemusedcarpart.com/engine"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Product",
              "name": "Used OEM Transmission",
              "category": "Transmissions",
              "description": "Browse quality OEM used transmissions with fast U.S. shipping. Affordable, tested, and ready for a wide range of vehicle makes — restore your ride with confidence.",
              "url": "https://oemusedcarpart.com/transmission"
            }
          }
        ]
      }
    }
</script>
 <!-- Banner -->
    <div class="banner-area">
      <div class="banner-img">
          <img src="/frontend/my-img/home-engine.webp" alt="Banner">
          <img class="wow fadeInRightBig" src="/frontend/my-img/banner-car.webp" alt="Banner">
      </div>
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="banner-text">
                      <h1>Genuine OEM Partss</h1>
                      <p>Upgrade your vehicle with 100% original OEM parts. Reliable, durable,</br> and designed to match your car’s exact specifications because your</br> car deserves nothing less.</p>
                      <div class="cmn-btn">
                          <a class="banner-btn-left" href="tel:+18883707485">
                                <i class='bx bx-phone-call' ></i>
                                +1-888-370-7485
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
        <!-- End Banner -->
<section class="blog-details-area pt-100 pb-70">
  <div class="container">
    <div class="blog-details-form">
      <h3>Find Auto Parts</h3>

      <form action="/auto-enquiry" enctype="multipart/form-data" method="POST" id="autoForm" data-wow-delay="0.5s">
        @csrf

        <!-- Row 1 -->
        <div class="form-group">
          <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Full Name" />
          <div class="field_error" id="full_name-error" aria-live="polite"></div>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Phone Number" />
          <div class="field_error" id="mobile-error" aria-live="polite"></div>
        </div>

        <div class="form-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" />
          <div class="field_error" id="email-error" aria-live="polite"></div>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" />
          <div class="field_error" id="zip-error" aria-live="polite"></div>
        </div>

        <!-- Row 2 -->
        <div class="form-group">
          <select class="form-control" name="vehicle_year" id="vehicle_year">
            <option value="">-- Select Year --</option>
            <option value="2025">2025</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
          </select>
          <div class="field_error" id="vehicle_year-error" aria-live="polite"></div>
        </div>

        <div class="form-group">
          <select class="form-control" name="make" id="make">
            <option value="">-- Select Vehicle Make --</option>
            <option value="Acura">Acura</option>
            <option value="Alfa Romeo">Alfa Romeo</option>
            <option value="AMC">AMC</option>
            <option value="Aston Martin">Aston Martin</option>
            <option value="Avanti">Avanti</option>
            <option value="BMW">BMW</option>
            <option value="Bentley">Bentley</option>
            <option value="Buick">Buick</option>
            <option value="Cadillac">Cadillac</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Chrysler">Chrysler</option>
            <option value="Daewoo">Daewoo</option>
            <option value="Daihatsu">Daihatsu</option>
            <option value="Datsun">Datsun</option>
            <option value="DeLorean">DeLorean</option>
            <option value="Dodge">Dodge</option>
            <option value="Eagle">Eagle</option>
            <option value="Ferrari">Ferrari</option>
            <option value="FIAT">FIAT</option>
            <option value="Fikser">Fikser</option>
            <option value="Ford">Ford</option>
            <option value="Freightliner">Freightliner</option>
            <option value="GEO">GEO</option>
            <option value="GMC">GMC</option>
            <option value="Honda">Honda</option>
            <option value="HUMMER">HUMMER</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Infiniti">Infiniti</option>
            <option value="Isuzu">Isuzu</option>
            <option value="Jeep">Jeep</option>
            <option value="Jaguar">Jaguar</option>
            <option value="Kia">Kia</option>
            <option value="Lamborghini">Lamborghini</option>
            <option value="Lancia">Lancia</option>
            <option value="Land Rover">Land Rover</option>
            <option value="Lexus">Lexus</option>
            <option value="Lincoln">Lincoln</option>
            <option value="Lotus">Lotus</option>
            <option value="Maserati">Maserati</option>
            <option value="Mazda">Mazda</option>
            <option value="Maybach">Maybach</option>
            <option value="McLaren">McLaren</option>
            <option value="Mercedes-Benz">Mercedes-Benz</option>
            <option value="Mercury">Mercury</option>
            <option value="Mini">Mini</option>
            <option value="Mitsubishi">Mitsubishi</option>
            <option value="Oldsmobile">Oldsmobile</option>
            <option value="Peugeot">Peugeot</option>
            <option value="Plymouth">Plymouth</option>
            <option value="Pontiac">Pontiac</option>
            <option value="Porsche">Porsche</option>
            <option value="Renault">Renault</option>
            <option value="Rolls-Royce">Rolls-Royce</option>
            <option value="Rover">Rover</option>
            <option value="Saab">Saab</option>
            <option value="Saturn">Saturn</option>
            <option value="Scion">Scion</option>
            <option value="Smart">Smart</option>
            <option value="SRT">SRT</option>
            <option value="Sterling">Sterling</option>
            <option value="Subaru">Subaru</option>
            <option value="Suzuki">Suzuki</option>
            <option value="Tesla">Tesla</option>
            <option value="Toyota">Toyota</option>
            <option value="Triumph">Triumph</option>
            <option value="Volkswagen">Volkswagen</option>
            <option value="Volvo">Volvo</option>
            <option value="Yugo">Yugo</option>
            <option value="Other">Other</option>
            <option value="Audi">Audi</option>
          </select>
          <div class="field_error" id="make-error" aria-live="polite"></div>
        </div>

        <div class="form-group">
          <select name="vehicle_part" id="vehicle_part" class="form-control">
            <option value="">-- Select Part Type --</option>
            <option value="Engine">Engine</option>
            <option value="Transmission">Transmission</option>
          </select>
          <div class="field_error" id="vehicle_part-error" aria-live="polite"></div>
        </div>

        <div class="form-group" style="margin-top: -5px !important;">
          <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" placeholder="Vehicle Model" />
          <div class="field_error" id="vehicle_model-error" aria-live="polite"></div>
        </div>

        <!-- Checkbox Section -->
        <div class="form-group" style="grid-column: 1 / -1;">
          <div class="form-check agree-label">
            <input
              name="gridCheck"
              value="I agree to the terms and privacy policy."
              class="form-check-input"
              type="checkbox"
              id="gridCheck"
              required
            />
            <label class="form-check-label" for="gridCheck">
              By checking this box, I agree to receive SMS related to Order confirmation,
              tracking information, and Order updates from Revive Pinnacle LLC.
              Text <a href="tel:1-888-370-7485">STOP</a> to opt out. Messages and data rates may apply.
              Message frequency will vary. Text <a href="tel:1-888-370-7485">HELP</a> for assistance.
              For information, read our
              <a href="/privacy-policy" target="_blank">Privacy Policy</a> and
              <a href="/terms-and-conditions" target="_blank">SMS Terms & Conditions</a>.
            </label>
          </div>
        </div>

        <!-- reCAPTCHA Centered -->
        <div class="form-group" style="grid-column: 1 / -1; text-align: center;">
          <div class="d-inline-block">
            <div class="g-recaptcha" data-sitekey="6LfLrOsrAAAAABULR3YRPIY8CVq27wvLU1KNCNlF"></div>
            <div class="field_error" id="captcha-error" style="color:#ff0000; margin-top:5px;"></div>
          </div>
        </div>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Submit Button -->
        <div class="form-group" style="grid-column: 1 / -1; text-align: center;">
          <button type="submit" class="default-btn">
            Submit Now
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
<style>
  .blog-details-form * { box-sizing: border-box; }

  /* Form Grid */
  .blog-details-form form {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  @media (max-width: 991px) { .blog-details-form form { grid-template-columns: repeat(2, 1fr); } }
  @media (max-width: 575px) { .blog-details-form form { grid-template-columns: 1fr; } }

  .blog-details-form .form-control {
    width: 100%;
    padding: 12px;
    border: 1px solid #f6b400;
    border-radius: 4px;
    outline: none;
    font-size: 14px;
    background: #fff;
  }
  .blog-details-form .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 6px rgba(0,123,255,0.12);
  }

  .blog-details-form .field_error {
    color: #ff0000;
    font-size: 12px;
    margin-top: 6px;
    line-height: 1;
  }

  .default-btn {
    background-color: #f6b400;
    border: none;
    color: white;
    font-weight: 600;
    padding: 12px 30px;
    border-radius: 5px;
    transition: all 0.3s ease;
    cursor: pointer;
  }
  .default-btn:hover { background-color: #d99a00; }

  /* Checkbox & Label Alignment */
  .blog-details-form .form-check {
    display: flex !important;
    align-items: flex-start !important;
    gap: 12px;
    margin-top: 10px;
    width: 100%;
  }
  .blog-details-form .form-check-input {
    width: 18px !important;
    height: 18px !important;
    margin-top: 2px; /* vertically align checkbox */
    flex-shrink: 0;
    accent-color: #007bff;
  }
  .blog-details-form .form-check-label {
    flex: 1;
    font-size: 14px;
    color: #333;
    line-height: 1.5;
    display: inline-block;
  }
  .blog-details-form .form-check-label a {
    color: #fdb819;
    text-decoration: none;
  }
  .blog-details-form .form-check-label a:hover {
    text-decoration: underline;
  }

  .blog-details-form h3 {
    margin-bottom: 25px;
    font-weight: 700;
  }
</style>

        <!-- Process -->
  <section class="process-area pt-100 pb-70">
    <div class="process-shape">
        <img src="/frontend/assets/img/home-one/car-shadow.png" alt="Shape">
    </div>

    <div class="section-title">
      <span class="sub-title">process</span>
      <h2>How We Work</h2>
      <p>Simple, fast, and reliable — from selection to delivery.</p>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        
        <!-- Left Column -->
        <div class="col-lg-4">
          <div class="process-item">
            <div class="process-inner process-one">
              <i class='bx bxs-cog'></i>
              <h3>Genuine Parts</h3>
              <p>We source only trusted engine and transmission parts.</p>
            </div>
            <div class="process-inner">
              <i class='bx bxs-car-wash'></i>
              <h3>Quality Check</h3>
              <p>Every part is tested for strength and reliability.</p>
            </div>
          </div>
        </div>

        <!-- Center Image -->
        <div class="col-lg-4">
          <div class="process-item">
            <div class="process-img">
            <img src="/frontend/my-img/home-engine.webp" alt="Process"
              style="width:390px; height:326px; object-fit:cover; object-position:center; display:block;">
            </div>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-4">
          <div class="process-item">
            <div class="process-inner process-two">
              <i class='bx bxs-right-arrow-circle'></i>
              <h3>Packed & Shipped</h3>
              <p>Secure packaging ensures safe delivery.</p>
            </div>
            <div class="process-inner process-three">
              <i class='bx bxs-rocket'></i>
              <h3>Fast Delivery</h3>
              <p>Quick dispatch to get you back on the road.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="parts-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>Explore Our Parts Inventory</h2>
                </div>
                <div class="sorting-menu">
                    <ul> 
                       <li class="filter active" data-filter="all">all</li>
                       <li class="filter" data-filter=".engine">Engine</li>
                       <li class="filter" data-filter=".transmission">Transmission</li>
                    </ul>
                </div>
                <div id="Container" class="row">
                    <div class="col-sm-6 col-lg-3 mix ui engine">
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
                    <div class="col-sm-6 col-lg-3 mix branding transmission">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/hyundai.webp" alt="Parts">
                            </div>
                            <h3>Hyundai Transmission</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                    Call Us Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix ui transmission">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/bmw.webp" alt="Parts">
                            </div>
                            <h3>BMW Transmission</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                   Call Us Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix ux engine">
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
                    <div class="col-sm-6 col-lg-3 mix engine">
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
                    <div class="col-sm-6 col-lg-3 mix ui transmission">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/chevrolate.jpg" alt="Parts">
                            </div>
                            <h3>Chevrolate Transmission</h3>
                            <div class="cmn-btn">
                                <a class="banner-btn-left" href="tel:+18883707485">
                                  <i class='bx bx-phone-call' ></i>
                                   Call Us Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mix ux engine">
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
                    <div class="col-sm-6 col-lg-3 mix ui transmission">
                        <div class="parts-item">
                            <div class="parts-top">
                                <img src="/frontend/my-img/transmission/bentley.webp" alt="Parts">
                            </div>                           
                            <h3>Bentley Transmission</h3>
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


  <!-- Quality -->
  <section class="quality-area">
      <div class="quality-img">
          <img src="/frontend/assets/img/home-one/quality-shape.png" alt="Quality">
          <img src="/frontend/assets/img/home-one/quality-shape.png" alt="Quality">
          <img src="/frontend/my-img/folt-card.webp" alt="folt-card">
          

      </div>
      <div class="container">
          <div class="quality-content">
              <div class="section-title">
                  <h2>Precision. Power. Performance</h2>
                  <p>We specialize exclusively in premium <strong>engine</strong> and <strong>transmission parts</strong> that redefine quality and dependability. Each component is built to OEM standards or higher, ensuring unmatched efficiency, smoother operation, and long-lasting performance for every vehicle. From powerful engine rebuild kits to precision transmission components we deliver excellence that drives results.</p>
              </div>
              <div class="cmn-btn">
                  <a class="banner-btn-center" href="tel:+18883707485">
                      <i class='bx bx-phone-call' ></i>
                        24/7 Customer Support
                  </a>
              </div>  
          </div>
      </div>
  </section>
  <!-- End Quality -->

  <!-- Work -->
  <section class="work-area pt-100 pb-70">
      <div class="container">
          <div class="section-title">
              <span class="sub-title">Parts</span>
              <h2>Explore Our Latest Engine & Transmission Parts</h2>
              <p>Discover premium-grade engine and transmission components designed to deliver exceptional performance, durability, and reliability.</p>
          </div>
          
          <div id="Container" class="row">
              
              <div class="col-sm-6 col-lg-6 mix ui branding">
                  <div class="work-item">
                      <img src="/frontend/my-img/made-in-china.webp" alt="Work" style="width: 100%; height: 389px; object-fit: cover; object-position: center; display: block; border-radius: 10px;">
                      <div class="cmn-btn">
                            <a class="banner-btn-left" href="/engine">
                              View More About Engine
                              <i class='bx bx-right-arrow-alt'></i>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-lg-6 mix ui branding">
                  <div class="work-item">
                      <img src="/frontend/my-img/transmission.webp" alt="Work" style="width: 100%; height: 389px; object-fit: cover; object-position: center; display: block; border-radius: 10px;">

                      <div class="cmn-btn">
                            <a class="banner-btn-left" href="/transmission">
                              View More About Transmission
                              <i class='bx bx-right-arrow-alt'></i>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End Work -->

  <!-- Review -->
  <div class="review-area">
      <div class="review-shape">
          <img src="/frontend/assets/img/home-one/review/review-shape.png" alt="Review">
      </div>
      <div class="container-fluid p-0">
          <div class="row m-0 justify-content-center">
              <div class="col-lg-6 ptb-100">
                  <div class="review-slider owl-theme owl-carousel">
                      <div class="review-item">
                          <i class='bx bxs-quote-right'></i>
                          <p>I ordered a complete engine rebuild kit, and the quality blew me away. Everything fit perfectly, and my car runs smoother than ever. Shipping was fast, and customer support helped me pick the right components. Highly recommend these guys for genuine engine parts!</p>
                          <div class="review-inner">
                              <h3>Michael R</h3>
                          </div>
                      </div>
                      <div class="review-item">
                          <i class='bx bxs-quote-right'></i>
                          <p>Finding reliable transmission parts used to be a hassle until I came across this site. The torque converter I bought was OEM-grade and worked flawlessly. I’ve already recommended them to my garage clients — top-notch quality and service!</p>
                          <div class="review-inner">
                              <h3>Sandra L.</h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="review-bg">
                      <img src="public/frontend/my-img/testimonials.jpg" alt="Review">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Review -->
           

  <section class="blog-area pt-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Get Quote</span>
            <h2>Get Your Custom Quote Today</h2>
            <p>At <strong>OEM</strong>, we specialize in genuine engine and transmission parts for all vehicles. Fill out the form below to receive a personalized quote from our experts, or call us directly for immediate support and guidance.</p>
            <br>
            <div class="cmn-btn">
    <a class="banner-btn-left" href="/contact" 
       style="display:inline-flex;align-items:center;justify-content:center;width:180px;height:50px;text-align:center;">
        <i class='bx bx-meteor' style="margin-right:8px;"></i>                       
        Request a Quote
    </a>
    <a class="banner-btn-left" href="tel:+18883707485" 
       style="display:inline-flex;align-items:center;justify-content:center;width:180px;height:50px;text-align:center;">
        <i class='bx bx-phone-call' style="margin-right:8px;"></i>
        Call Us Today
    </a>
    </div>
        </div>
    </div>
  </section>


<style>
 .blog-area {
    padding-bottom: 0px;
}
.pt-100 {
    padding-top: 75px;
}
</style>
@endsection