@extends('agent.booking')
@section('content')
<section id="body" class="">
    <div class="row page-title">
        <div class="container clear-padding text-center">
            <h3>Hotel Cart</h3>

        </div>
    </div>
    <div class="section section-blog">
        <div class="container">
            <div class="row">
                <!-- blog -->
                <div class="col-md-9 col-blog-posts" class="post-373 page type-page status-publish hentry">

                    <div id="hotel-booking-cart">

                        <form id="hb-cart-form" method="post">

                            <h3>Cart</h3>

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
                            <p>
                                <a href="{{route('checkout.agent',$cart->id)}}"
                                    class="hb_button hb_checkout">Check Out</a>
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
