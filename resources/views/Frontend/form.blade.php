<style>
.blog-details-item .blog-details-form .form-group .form-control {
    height: 35px;
    border-radius: 0;
    border: 1px solid #fdb819;
    padding-left: 15px;
    font-size: 14px;
}
.blog-details-form-btn {
    background-color: #fdb819;
    border: none;
    color: #fff;
    padding: 8px 20px;
    font-size: 14px;
    cursor: pointer;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="blog-details-item">
                <div class="blog-details-form">
                    <h3>Need Help With Your Part?</h3>
                    <form action="/auto-enquiry" enctype="multipart/form-data" method="POST" id="autoForm"
                     data-wow-delay="0.5s">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Your Full Name">
                                    <div class="field_error" id="full_name-error" style="color:#ff0000; font-size:12px;">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Phone Number">
                                    <div class="field_error" id="mobile-error" style="color:#ff0000; font-size:12px;">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <div class="field_error" id="email-error" style="color:#ff0000; font-size:12px;">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
                                    <div class="field_error" id="zip-error" style="color:#ff0000; font-size:12px;">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <select  name="vehicle_year" id="vehicle_year" class="form-control">
                                        <option value="" disabled selected>-- Select Year --</option>
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
                                    <div class="field_error" id="vehicle_year-error"
                                         style="color:#ff0000; font-size:12px;"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <select name="make" id="make" class="form-control">
                                    <option value="" disabled selected>-- Select Vehicle Make --</option>
                                    <option value="Acura">Acura</option>
                                    <option value="Alfa Romeo">Alfa Romeo</option>
                                    <option value="AMC">AMC</option>
                                    <option value="Aston Martin">Aston Martin</option>
                                    <option value="Audi">Audi</option>
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
                                    </select>
                                    <div class="field_error" id="make-error" style="color:#ff0000; font-size:12px;">
                                     </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="vehicle_model" name="vehicle_model" placeholder="Vehicle Model">
                                     <div class="field_error" id="vehicle_model-error"
                                    style="color:#ff0000; font-size:12px;"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                            <div class="form-group">
                            <select  name="vehicle_part" id="vehicle_part" class="form-control">
                                <option value="" disabled selected>-- Select Part Type --</option>
                                <option value="engine">Engine</option>
                                <option value="transmission">Transmission</option>
                                
                            </select>
                            <div class="field_error" id="vehicle_part-error"
                                    style="color:#ff0000; font-size:12px;"></div>
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
                                        required
                                    >
                                    <label class="form-check-label" for="gridCheck">
                                    By checking this box, I agree to receive SMS related to Order confirmation,
                                    tracking information, and Order updates from Revive Pinnacle LLC.
                                    Text <a href="tel:1-888-370-7485">STOP</a> to opt out. Messages and data rates may apply.
                                    Message frequency will vary. Text <a href="tel:1-888-370-7485">HELP to 1-888-370-7485</a> for assistance.
                                    For information, read our 
                                    <a href="/privacy-policy" target="_blank">Privacy Policy</a> and 
                                    <a href="/sms-terms" target="_blank">SMS Terms & Conditions</a>.
                                    </label>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12 mt-0">
                            <div style="display: flex; justify-content: center;">
                                <div class="g-recaptcha" data-sitekey="6LfLrOsrAAAAABULR3YRPIY8CVq27wvLU1KNCNlF"></div>
                            </div>
                            <div id="captcha-error" class="field_error" style="color:#ff0000; text-align:center; margin-top:5px;"></div>
                        </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn blog-details-form-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
