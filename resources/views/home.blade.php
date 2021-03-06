@extends('layouts.web')

@section('content')
<div class="google-image">
    <div class="bg-ground">
        <div class="main">
            <ul id="cbp-bislideshow" class="cbp-bislideshow">
                <li>
                    <div class="slider-img-wrap"><img src="https://miro.medium.com/max/3200/1*w2DBNHNdBQmSv9cisV95Tg.jpeg"/></div>
                    <div class="slider-text-content">
                        <h1>Quickest Delivery at the tap of a button</h1>
                    </div>
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
                                    <button type="submit" class="btn form-btn btn-lg btn-block">Request Drive</button>
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
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
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
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                <div class="row">
                    <div class="label-item">
                        <div class="containt-font">
                            <a href="#" class="img-circle"><img src="{{ asset('front') }}/images/customer.png" alt=""/></a>
                        </div>
                        <div class="containt-text">
                            <h3>Customer Service</h3>
                            <span>We ensure safest booking!</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 " data-uk-scrollspy="{cls:'uk-animation-fade', delay:300, repeat: true}">
                <div class="row float-right">
                    <div class="label-item ">
                        <div class="containt-font" >
                            <a href="#" class="img-circle"><img src="{{ asset('front') }}/images/hidden.png" alt=""/></a>
                        </div>
                        <div class="containt-text">
                            <h3>No Hidden Charges</h3>
                            <span>We ensure safest booking!</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio cidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- label white2 html Exit -->
@endsection
