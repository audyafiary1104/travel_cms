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

                    <form id="hb-cart-form" action="{{route('checkout.agent_post')}}" method="post">
                           @csrf <h3>Booking Rooms</h3>
                            <table class="hb_table">
                                <thead>
                                    <tr>
                                        <th class="hb_room_type">Room type</th>
                                        <th class="hb_capacity">Capacity</th>
                                        <th class="hb_quantity">breakfest</th>
                                        <th class="hb_check_in">Check - in</th>
                                        <th class="hb_check_out">Check - out</th>
                                        <th class="hb_night">Night</th>
                                        <th class="hb_gross_total">Per night</th>
                                        <th class="hb_gross_total">Gross Total</th>
                                    </tr>
                                </thead>

                                <tr class="hb_checkout_item" >
                                  
                                    <td class="hb_room_type">
                                        {{$cart->type_room}}
                                    </td>
                                    <td class="hb_capacity">{{$cart->persons}}}</td>
                                    <td class="hb_quantity">
                                        <p>1</p>
                                    </td>
                                    <td class="hb_check_in">{{ Session::get('check_in')}}</td>
                                    <td class="hb_check_out">{{ Session::get('check_out')}}</td>
                                    <td class="hb_night">{{$night}}</td>
                                    <td class="hb_night">{{$cart->harga}}</td>
                                    <td class="hb_gross_total">{{$grand}} </td>
                                </tr>




                                <tr class="hb_sub_total">
                                    <td colspan="8">Sub Total <span class="hb-align-right hb_sub_total_value">
                                            &#36;{{$grand}}</span>
                                    </td>
                                </tr>
                                <tr class="hb_advance_tax">
                                    <td colspan="8">
                                        Tax <span class="hb-align-right">10%</span>
                                    </td>
                                </tr>
                                <tr class="hb_advance_grand_total">
                                    <td colspan="8">
                                        Grand Total <span
                                            class="hb-align-right hb_grand_total_value">&#36;{{$all}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <input type="hidden" id="hb_cart_field" name="hb_cart_field"
                                        value="941688e145" /><input type="hidden" name="_wp_http_referer"
                                        value="/demosd/cruise/?page_id=373" /> </tr>
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
                                                <label class="hb-form-field-label">Phone Number <span
                                                        class="hb-required">*</span></label>

                                                <div class="hb-form-field-input">
                                                    <input type="text" name="city" value="" placeholder="Phone Number"
                                                        required />
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
                            </div> 
                            <input type="hidden" name="type_room" value="{{$cart->id}}" />
                            <input type="hidden" name="harga_permalam" value="{{$cart->harga}}" />
                            <input type="hidden" name="total_price" value="{{$all}}" />
                            <input type="hidden" name="night" value="{{$night}}">
                            <p>
                                <label>
                                    <input type="checkbox" name="tos" value="1" />
                                    I agree with <a href="#"
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
