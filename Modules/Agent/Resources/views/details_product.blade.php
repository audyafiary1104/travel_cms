@extends('agent.booking')
@section('content')
@foreach($hotels as $key => $hotel)

    <div class="row page-title">
        <div class="container clear-padding text-center">
            <h3>
                <div class="title">
                    <h4>
                        <a href="http://shtheme.net/demosd/cruise/?hb_room=devlok-hotel">{{$hotel->nama_hotels}}</a>
                    </h4>
                </div>
            </h3>
            <h5>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </h5>
            <p>

                <div class="price">
                    <span class="title-price">Price:</span>

                    <span class="price_value price_min">&#36;150.0</span>

                    <span class="unit">/ Night</span>
                </div>
            </p>
        </div>
    </div>
    <!--================End Breadcrumb Area =================-->

    <!--================Room Details Area =================-->
    <div class="row hotel-detail hb_single_room">
        <div class="container">
            <div class="product-brief-info">
                <div class="col-md-8 clear-padding">

                    <div class="room_details">

                        <div class="hb_room_gallery camera_wrap camera_emboss" id="camera_wrap_380">
                        @foreach($image_id[$key + 1] as $key => $image)
                          
                            <div data-thumb="{{ "/img/hotels_image/".$image->image }}"
                                data-src="{{ "/img/hotels_image/".$image->image }}">
                            </div>
                            @endforeach
                        
                           
                        </div>

                        <script type="text/javascript">
                            (function ($) {
                                "use strict";
                                $(document).ready(function () {
                                    $('#camera_wrap_380').camera({
                                        height: '470px',
                                        loader: 'none',
                                        pagination: false,
                                        thumbnails: true
                                    });
                                });
                            })(jQuery);

                        </script>

                    </div>

                </div>

                <div class="col-md-4 detail clear-padding">
                    <div class="review sidebar-item">
                        <h4><i class="fa fa-comments"></i> {{$hotel->nama_hotels}}</h4>
                        <div class="sidebar-item-body text-center">
                            <div class="rating-box">
                                <div class="col-md-6 col-sm-6 col-xs-6 clear-padding tripadvisor">
                                    <img src="http://shtheme.net/demosd/cruise/wp-content/themes/cruise/assets/images/tripadvisor.png"
                                        alt="cruise"><br>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h5>4.0/5.0 Based on 12 Reviews</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                                    <i class="fa fa-users"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <h5>Based on 128 Guest Reviews</h5>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="guest-say rating-box">
                                <h2><i class="fa fa-check-circle"></i> Perfect</h2>
                                <div>
                                    <p>Address : {{$hotel->alamat_hotels}}, {{$hotel->city}}</p>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5 clear-padding user-img">

                                </div>

                                <p class="hb-submit">
				            <button class="main_btn" onclick="window.location.href='{{route('select_rooms.agent',$hotel->id)}}'"  type="submit">Select  room</button>
				                  </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row product-complete-info">
                <div class="container">
                    <div class="col-md-8 main-content">

                        <div class="hb_single_room_details">

                            <ul class="hb_single_room_tabs">
                                <li>
                                    <a href="#hb_room_description">
                                        Description </a>
                                </li>

                            </ul>


                            <div class="hb_single_room_tabs_content">

                                <div id="hb_room_description" class="hb_single_room_tab_details">


                                    <h4>ABOUT GRAND LILLY</h4>
                                    <p></p>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        &#8216;Content here, content here&#8217;, making it look like readable English.
                                        Many desktop publishing packages and web page editors now use Lorem Ipsum as
                                        their default model text, and a search for &#8216;lorem ipsum&#8217; will
                                        uncover many web sites still in their infancy. Various versions have evolved
                                        over the years, sometimes by accident, sometimes on purpose (injected humour and
                                        the like).</p>

                                </div>
                                @endforeach

@stop