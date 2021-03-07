@extends('layouts.web')

@section('content')
<div class="google-image">
    <div class="bg-ground">
        <div class="main">
            <ul id="cbp-bislideshow" class="cbp-bislideshow">
                <li>
                    <div class="slider-img-wrap"><img src="{{ asset('front') }}/images/cover.jpg"/></div>
                </li>
            </ul>
        </div>
    </div>
</div>


<!-- Booking now form wrapper html start -->
<div class="booking-form-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="form-wrap ">
                        <div class="form-headr"></div>
                        <h2>Fill in the Details Below to Book Your Transfer.</h2>
                        <div class="form-select">
                            <form action="{{ route('request-drive') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12 custom-select-box tec-domain-cat5">
                                            <div class="row" >
                                                <input class="form-control custom-select-box tec-domain-cat5" id="location" type="text" placeholder="From Location" name="from_location" autocomplete/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 custom-select-box tec-domain-cat8">
                                            <div class="row" >
                                                <input class="form-control custom-select-box tec-domain-cat8" id="location2" type="text" placeholder="To Location" name="to_location" autocomplete/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-button">
                                    <button type="submit" class="btn form-btn btn-lg btn-block">Book Your Transfer Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking now form wrapper html Exit -->


<!-- label white2 html start -->
<div class="label-white white-lable-m">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                <div class="row">
                    <div class="label-item">
                        <div class="containt-font">
                            <a href="#" class="img-circle"><img src="{{ asset('front') }}/images/lock.png" alt=""/></a>
                        </div>
                        <div class="containt-text">
                            <h3>Secure Booking</h3>
                            <span>We ensure safest booking!</span>
                            <p>We prioritize the security of our clients’ parcels and goods. We have an elaborate and secure booking system that ensures your package is matched with an order number unique to you. The booking process is discreet as well. Utmost precaution is taken during the delivery of orders to ensure no mix-ups occur. In case of any loss or damage of goods in transit, we have an insurance cover to cater for immediate compensation or replacement. Our booking system is also optimized for multiple deliveries to ensure precision.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                <div class="row">
                    <div class="label-item">
                        <div class="containt-font">
                            <a href="#" class="img-circle"><img src="{{ asset('front') }}/images/reliable.png" alt=""/></a>
                        </div>
                        <div class="containt-text">
                            <h3>Reliable Service</h3>
                            <span>We ensure safest booking!</span>
                            <p>Our reliability is what sets us apart as a delivery service. We adhere to strict time schedules to ensure that orders are picked and delivered on time. This enables us to relieve you of the pressure of worrying about whether deliveries have been fulfilled. We provide real-time tracking options as well so that you can check the status of your orders anytime you wish to do so. Our delivery service also notifies you immediately a delivery is fulfilled. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                <div class="row">
                    <div class="label-item">
                        <div class="containt-font">
                            <a href="#" class="img-circle"><img src="{{ asset('front') }}/images/lock.png" alt=""/></a>
                        </div>
                        <div class="containt-text">
                            <h3>No Hidden Fees/Charges</h3>
                            <span>We ensure safest booking!</span>
                            <p>Integrity and transparency are our core values at Quick Delivery Service. Delivery charges are based on the distance to be covered from the point of pickup to the destination. We notify you of your due charges immediately after you book a delivery, after which you will not have to pay anything extra. This enables you to work on your planned budget without having to cover any unexpected costs or fees.  </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                <div class="row">
                    <div class="label-item">
                        <div class="containt-font">
                            <a href="#" class="img-circle"><img src="{{ asset('front') }}/images/reliable.png" alt=""/></a>
                        </div>
                        <div class="containt-text">
                            <h3>Customer Service</h3>
                            <span>We ensure safest booking!</span>
                            <p>Our entire business is hinged on ensuring customer satisfaction by providing the highest quality of service possible. We know it’s essential for our customers’ packages to be delivered on time and at an affordable cost. We value our client’s trust, time, and money and strive to meet and exceed their expectations.
                                Therefore, we endeavor to give our customers a fantastic delivery service experience by not only saving them time and money but also providing a host of other value-added services such as subscriptions for clients with frequent delivery service needs like businesses. We do this through scheduled delivery bookings. Our quick delivery service also caters to urgent delivery requirements issued on short notice to help our customers fulfill their time-constrained obligations.
                                Entrust us to be your preferred delivery service today and enjoy the benefits of the most reliable transport logistics partner with whom to work.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- label white2 html Exit -->
@endsection
