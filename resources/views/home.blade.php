@extends('layouts.web')

@section('content')
<div class="google-image">
    <div class="bg-ground">
        <div class="main">
            <ul id="cbp-bislideshow" class="cbp-bislideshow">
                <li>
                    <div class="slider-img-wrap"><img src="https://miro.medium.com/max/3200/1*w2DBNHNdBQmSv9cisV95Tg.jpeg"/></div>
                    <div class="slider-text-content">
                        <h1>Local taxis at the tap of a button</h1>
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

<!-- label white html start -->
<div class="label-white2 white-lable-m">
    <div class="container">
        <div class="row">
            <div class="car-item-wrap">
                <div class="car-type">
                    <div class="car-wrap"><img class="private-car" src="{{ asset('front') }}/images/private-car.png" alt=""/></div>
                    <h5>Private Car</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                     <div class="car-wrap"><img class="morotbike-car" src="{{ asset('front') }}/images/motorbike.png" alt=""/></div>
                    <h5>Motorbike</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="minicar-car" src="{{ asset('front') }}/images/minicar.png" alt=""/></div>
                    <h5>Minicar</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="mini-track-car" src="{{ asset('front') }}/images/mini-track.png" alt=""/></div>
                    <h5>Mini Truck</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="boat-car" src="{{ asset('front') }}/images/boat.png" alt=""/></div>
                    <h5>Boat</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="snow-car" src="{{ asset('front') }}/images/snow-bike.png" alt=""/></div>
                    <h5>Snow Bike</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="tractor-car" src="{{ asset('front') }}/images/tractor.png" alt=""/></div>
                    <h5>Tractor</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="vihicel-car" src="{{ asset('front') }}/images/vihicel.png" alt=""/></div>
                    <h5>Large Vehicle</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="morotbike-car" src="{{ asset('front') }}/images/motorbike.png" alt=""/></div>
                    <h5>Motorbike</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

                <div class="car-type">
                    <div class="car-wrap"> <img class="big-track-car" src="{{ asset('front') }}/images/big-track.png" alt=""/></div>
                    <h5>Big Truck</h5>
                    <div class="car-type-btn">
                        <a href="Results_3.html" class="btn car-btn btn-lg">BOOK NOW</a>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
<!-- label white html exit -->

<!-- label yellow html start -->
<div class="yellow-label-wrapper2">
    <div class="label-yellow stellar"  data-stellar-background-ratio="0.5" data-stellar-vertical-offset="" >
        <div class="container">
            <div class="row">
                <div class="destination">
                    <h2>Destinations You'd Love</h2>
                    <h4>Look at the wonderful places</h4>
                </div>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="slider-btn">
                        <a class="right-cursor1" href="#carousel-example-generic" data-slide="prev"></a>
                        <a class="left-cursor1" href="#carousel-example-generic" data-slide="next"></a>
                    </div>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item ">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider1.jpg"/></div>
                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item ">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider2.jpg"/></div>

                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item homepage-sllider-m">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider3.jpg"/></div>

                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item ">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider4.jpg"/></div>
                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item ">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider5.jpg"/></div>
                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item homepage-sllider-m">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider6.jpg"/></div>

                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item ">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider7.jpg"/></div>
                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item ">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider8.jpg"/></div>

                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="slider-item homepage-sllider-m">
                                        <div class="slider-img"><img class="img-responsive" alt="First slide" src="{{ asset('front') }}/images/slider/slider9.jpg"/></div>
                                        <div class="slider-text-hover">
                                            <div class="slider-hover-content"></div>
                                            <div class="Orange">
                                                <div class="slider-hover-content2">
                                                    <h4>Orange Skies</h4>
                                                    <p>Save upto 50%</p>
                                                </div>
                                                <div class="slider-hover-content3">
                                                    <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slider-text">
                                            <div class="slider-text1">
                                                <h4>Orange Skies</h4>
                                                <p>Save upto 50%</p>
                                            </div>
                                            <div class="slider-text2">
                                                <a href="#" class="btn slide-btn btn-lg">Avail Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- label yellow html exit -->

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
