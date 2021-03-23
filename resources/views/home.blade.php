@extends('layouts.web')

@section('content')

        <div class="banner_area position-relative" id="book">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="delivery_form_area">
                            <h3>Fast and Confident way of Delivery</h3>
                            <p>Greater comfort. Stronger perforance. Improved
                                Safely. No compromise</p>

                            <div class="deli_form">
                                <form action="{{ route('request-drive') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="single_banner_form position-relative">
                                        <input type="text" id="location" placeholder="From" name="from_location" autocomplete>
                                        <span><img src="{{ asset('front_v2') }}/assets/img/marker.svg" alt=""></span>
                                    </div>
                                    <div class="single_banner_form position-relative">
                                        <input type="text" id="location2" placeholder="To" name="to_location" autocomplete>
                                        <span><img src="{{ asset('front_v2') }}/assets/img/men_icon.svg" alt=""></span>
                                    </div>
                                    <div class="form_submit">
                                        <button type="submit">Book Your Transfer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how_works_area position-relative" id="how_works_area" style="background-image: url('{{ asset('front_v2') }}/assets/img/section-_2.png');">
            <div class="works_abs_img">
                <img class="works_abs_img_1 abs_img" src="{{ asset('front_v2') }}/assets/img/Pinky.png" alt="">
                <img class="works_abs_img_2 abs_img" src="{{ asset('front_v2') }}/assets/img/pinky_car.svg" alt="">
                <img class="works_abs_img_3 abs_img" src="{{ asset('front_v2') }}/assets/img/dd.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center mb-40">
                            <h3>How it works</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="step_1 text-center">
                            <span class="count_step">1</span>
                            <h4>Book your transfer</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="step_1 text-center">
                            <span class="count_step">2</span>
                            <h4>Pick your place</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="step_1 text-center">
                            <span class="count_step">3</span>
                            <h4>Make payment</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service_area position-relative" id="services">
            <div class="service_abs_imgs">
                <img class="top_left_img abs_img" src="{{ asset('front_v2') }}/assets/img/service_shape_1.svg" alt="">
                <!-- <img class="top_right_img abs_img" src="assets/img/service_shape_2.svg" alt=""> -->
                <img class="top_bottom_img abs_img" src="{{ asset('front_v2') }}/assets/img/service_shape_3.svg" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="section_title text-center mb-150">
                        <h3>Our Services</h3>
                        <p>We provide best services to our clients</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <div class="service_item_wrapper">

                            <div class="single_service_area">
                                <div class="service_thumb_area">
                                    <img src="{{ asset('front_v2') }}/assets/img/service.svg" alt="">
                                </div>
                                <div class="service_title">
                                    <h6>No Hidden Fees/Charges</h6>
                                    <p>We ensure safest booking!</p>
                                </div>

                                <div class="service_content">
                                    <p>Integrity and transparency are our core values at Quick Delivery Service. Delivery charges are based on the distance to be covered from the point of pickup to the destination. We notify you of your due charges immediately after you book a delivery.</p>

                                </div>

                                <div class="view_bt_area text-end">
                                    <a href="" class="view_more">View More</a>
                                </div>
                            </div>

                            <div class="ex_pad_ma">
                                <div class="single_service_area ">
                                    <div class="service_thumb_area">
                                        <img src="{{ asset('front_v2') }}/assets/img/service_icon_2.svg" alt="">
                                    </div>
                                    <div class="service_title">
                                        <h6>Secure Booking                                        </h6>
                                        <p>We ensure safest booking!
                                        </p>
                                    </div>

                                    <div class="service_content">
                                        <p>We prioritize the security of our clients’ parcels and goods. We have an elaborate and secure booking system that ensures your package is matched with an order number unique to you. The booking process is discreet as well. </p>

                                    </div>

                                    <div class="view_bt_area text-end">
                                        <a href="" class="view_more">View More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6">
                        <div class="service_item_wrapper">

                            <div class="single_service_area mt-160">
                                <div class="service_thumb_area">
                                    <img src="{{ asset('front_v2') }}/assets/img/service.svg" alt="">
                                </div>
                                <div class="service_title">
                                    <h6>No Hidden Fees/Charges</h6>
                                    <p>We ensure safest booking!</p>
                                </div>

                                <div class="service_content">
                                    <p>Integrity and transparency are our core values at Quick Delivery Service. Delivery charges are based on the distance to be covered from the point of pickup to the destination. We notify you of your due charges immediately after you book a delivery.</p>

                                </div>

                                <div class="view_bt_area text-end">
                                    <a href="" class="view_more">View More</a>
                                </div>
                            </div>

                            <div class="ex_pad_ma">
                                <div class="single_service_area ">
                                    <div class="service_thumb_area">
                                        <img src="{{ asset('front_v2') }}/assets/img/service.svg" alt="">
                                    </div>
                                    <div class="service_title">
                                        <h6>No Hidden Fees/Charges</h6>
                                        <p>We ensure safest booking!</p>
                                    </div>

                                    <div class="service_content">
                                        <p>Integrity and transparency are our core values at Quick Delivery Service. Delivery charges are based on the distance to be covered from the point of pickup to the destination. We notify you of your due charges immediately after you book a delivery.</p>

                                    </div>

                                    <div class="view_bt_area text-end">
                                        <a href="" class="view_more">View More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
