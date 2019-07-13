@extends('agent.booking')
@section('content')
<section id="body" class="">

    <!-- Section: Blog -->
    <div class="row page-title">
        <div class="container clear-padding text-center">
            <h3>Hotel Checkout</h3>

        </div>
    </div>
    <div class="section section-blog">
        <div class="container">
            <div class="row">
                <!-- blog -->
                <div class="col-md-9 col-blog-posts" class="post-374 page type-page status-publish hentry">


                    <div id="hotel-booking-payment">

                        <form name="hb-payment-form" id="hb-payment-form" method="post" action="">
                            <h3>Booking Rooms</h3>
                            <table class="hb_table">
                                <thead>
                                    <tr>
                                        <th class="hb_room_type">Room type</th>
                                        <th class="hb_capacity">Capacity</th>
                                        <th class="hb_quantity">Quantity</th>
                                        <th class="hb_check_in">Check - in</th>
                                        <th class="hb_check_out">Check - out</th>
                                        <th class="hb_night">Night</th>
                                        <th class="hb_gross_total">Gross Total</th>
                                    </tr>
                                </thead>


                                <tr class="hb_checkout_item" data-cart-id="56fdef1b0fbae513da7a830a3444d24b">
                                    <td class="hb_room_type">
                                        <a href="http://shtheme.net/demosd/cruise/?hb_room=devlok-hotel-2">Devlok Hotel
                                            2 (1)</a>
                                    </td>
                                    <td class="hb_capacity">1 adult </td>
                                    <td class="hb_quantity">1</td>
                                    <td class="hb_check_in">July 20, 2019</td>
                                    <td class="hb_check_out">July 27, 2019</td>
                                    <td class="hb_night">7</td>
                                    <td class="hb_gross_total">
                                        &#36;1,150.0 </td>
                                </tr>



                                <tr class="hb_sub_total">
                                    <td colspan="7">Sub Total <span class="hb-align-right hb_sub_total_value">
                                            &#36;5,450.0 </span>
                                    </td>
                                </tr>

                                <tr class="hb_advance_tax">
                                    <td colspan="7">
                                        Tax <span class="hb-align-right">&#36;545.0</span>
                                    </td>
                                </tr>

                                <tr class="hb_advance_grand_total">
                                    <td colspan="7">
                                        Grand Total <span
                                            class="hb-align-right hb_grand_total_value">&#36;5,995.0</span>
                                    </td>
                                </tr>


                            </table>


                            <h3>Customer Details</h3>

                            <div class="hb-customer clearfix">


                                <div class="hb-order-new-customer" id="hb-order-new-customer">
                                    <div class="hb-col-padding hb-col-border">
                                        <h4>New Customer</h4>
                                        <ul class="hb-form-table col-2">
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Title <span
                                                        class="hb-required">*</span> </label>

                                                <div class="hb-form-field-input">
                                                    <select name="title" required>
                                                        <option value="">Select</option>
                                                        <option value="mr">Mr.</option>
                                                        <option value="ms">Ms.</option>
                                                        <option value="mrs">Mrs.</option>
                                                        <option value="miss">Miss.</option>
                                                        <option value="dr">Dr.</option>
                                                        <option value="prof">Prof.</option>
                                                    </select> </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">First name <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="first_name" value=""
                                                        placeholder="First name" required />
                                                </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Last name <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="last_name" value="" placeholder="Last name"
                                                        required />
                                                </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Address <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="address" value="" placeholder="Address"
                                                        required />
                                                </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">City <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="city" value="" placeholder="City"
                                                        required />
                                                </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">State <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="state" value="" placeholder="State"
                                                        required />
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="hb-form-table col-2">
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Postal Code <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="postal_code" value=""
                                                        placeholder="Postal code" required />
                                                </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Country <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <select name="country" required>
                                                        <option value="">Country</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="&#197;land Islands">&#197;land Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belau">Belau</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint
                                                            Eustatius and Saba</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory</option>
                                                        <option value="British Virgin Islands">British Virgin Islands
                                                        </option>
                                                        <option value="Brunei">Brunei</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo (Brazzaville)">Congo (Brazzaville)</option>
                                                        <option value="Congo (Kinshasa)">Congo (Kinshasa)</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cura&Ccedil;ao">Cura&Ccedil;ao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and McDonald Islands">Heard Island
                                                            and McDonald Islands</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Republic of Ireland">Republic of Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Ivory Coast">Ivory Coast</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Laos">Laos</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao S.A.R., China">Macao S.A.R., China</option>
                                                        <option value="Macedonia">Macedonia</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles
                                                        </option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palestinian Territory">Palestinian Territory
                                                        </option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russia">Russia</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barth&eacute;lemy">Saint Barth&eacute;lemy
                                                        </option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin (French part)">Saint Martin (French
                                                            part)</option>
                                                        <option value="Saint Martin (Dutch part)">Saint Martin (Dutch
                                                            part)</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon</option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="S&atilde;o Tom&eacute; and Pr&iacute;ncipe">
                                                            S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia/Sandwich Islands">South
                                                            Georgia/Sandwich Islands</option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syria">Syria</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                                                        <option value="United States (US)">United States (US)</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Vatican">Vatican</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Western Samoa">Western Samoa</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select> </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Phone <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="phone" value="" placeholder="Phone Number"
                                                        required />
                                                </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Email <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="email" name="email" value=""
                                                        placeholder="Email address" required />
                                                </div>
                                            </li>
                                            <li class="hb-form-field">
                                                <label class="hb-form-field-label">Fax</label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="fax" value="" placeholder="Fax" />
                                                </div>
                                            </li>
                                        </ul>
                                        <input type="hidden" name="existing-customer-id" value="" />
                                    </div>
                                </div>
                            </div>
                            <div class="hb-col-margin"></div>

                            <div class="hb-payment-form">
                                <div class="hb-col-padding hb-col-border">
                                    <h4>Payment Method</h4>
                                    <ul class="hb-payment-methods">
                                        <li>
                                            <label>
                                                <input type="radio" name="hb-payment-method" value="paypal" checked />
                                                Balance </label>
                                            <div class="hb-payment-method-form paypal">
                                                Balance Agency </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="hb-addition-information">
                                <div class="hb-col-padding hb-col-border">
                                    <h4>Additional Information</h4>
                                    <textarea name="addition_information"></textarea>
                                </div>
                            </div> <input type="hidden" id="hb_customer_place_order_field"
                                name="hb_customer_place_order_field" value="102f15a2c7" /><input type="hidden"
                                name="_wp_http_referer" value="/demosd/cruise/?page_id=374" />
                            <input type="hidden" name="hotel-booking" value="place_order" />
                            <input type="hidden" name="action" value="hotel_booking_place_order" />
                            <input type="hidden" name="total_advance" value="2997.5" />
                            <input type="hidden" name="total_price" value="5995" />
                            <input type="hidden" name="currency" value="USD">
                            <p>
                                <label>
                                    <input type="checkbox" name="tos" value="1" />
                                    I agree with <a href="http://shtheme.net/demosd/cruise/?page_id=377"
                                        target="_blank">Terms and Conditions</a> </label>
                            </p>
                            <p>
                                <button type="submit" class="hb_button">Check out</button>
                            </p>

                        </form>
                    </div>

                </div>
                <!-- /blog -->
                <!-- side column -->


                <!-- /side-column -->
            </div>
        </div>
    </div>
    <!-- /Section: Blog -->

</section>
@stop
