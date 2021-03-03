@extends('layouts.web')

@section('content')

<!-- label white html start -->
<div class="container">
    <div class="page30-wrap">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="item-details-wrap">
                        <div class="item-details-wrap-header"></div>
                        <div class="item-details-wrap-container">
                            <div class="item-details-content">
                                @php
                                $path = BASE_URL.SMALL_IMAGE_PATH_CATEGORIES.$category->image;
                                $check_exist = File::exists(public_path().SMALL_IMAGE_PATH_CATEGORIES.$category->image);
                                if($check_exist == 1 && $category->image != '')
                                {
                                  $image = $path;
                                }else{
                                  $image = NO_IMAGE;
                                }
                                @endphp
                                <div class="item-details-content2"><a href=""><img src="{{$image}}" alt=""/></a></div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="service-wrap1"><span>Car Type:</span></div>
                                    <div class="service-wrap2"><span>{{$category->name}}</span></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="service-wrap1"><span>From:</span></div>
                                    <div class="service-wrap2"><span class="from"></span></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="service-wrap1"><span>Destination:</span></div>
                                    <div class="service-wrap2"><span class="to"></span></div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-sm-12">
                                    <div class="service-wrap1"><span>Traveling Date:</span></div>
                                    <div class="service-wrap2"><span class="date_time"></span></div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="Roundtrip-Fare">
                            <h4>Total Fare Amount:</h4>
                            <h3 class="fare"></h3>
                            <p>(Inclusive of All Taxes)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 page30-form-wrapper">
                <div class="row Transfer">
                <h3>Your Transfer Details</h3>
                <h5>Give complete transfer details</h5>
                    <form class="form-horizontal" action="{{ route('book-ride') }}" method="POST" id="checkout-form">
                        @csrf
                        <input type="hidden" name="order_data" id="order_data">
                        <div class="form-group">
                            <label for="inputname1" class="col-sm-4 control-label2 control-label">Full Name<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputemail1" class="col-sm-4 control-label2 control-label ">Email Address<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="email" class="form-control" name="email" id="inputemail1" placeholder="Email Address*" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputnumber1" class="col-sm-4 control-label2 control-label ">Mobile Number<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="text" class="form-control" name="phone" placeholder="Mobile Number" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcountry1" class="col-sm-4 control-label2 control-label" >Country<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="text" class="form-control" name="country" placeholder="Country" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label2 control-label"> Special note to the driver </label>
                            <div class=" col-sm-8 completing-form">
                                <textarea class="form-control" name="note" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-7 col-sm-5">
                            <div class="completing-form-btnwrap"><button type="submit" class="btn form-btn  btn-block">Complete Booking</button></div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 page30-form-wrapper">
                <div class="row">
                    <div class="add-wrap">
                        <div class="add-img"><a href=""><img class="img-responsive" src="images/add1.jpg" alt=""/></a></div>
                        <div class="add-text"><a href=""><h2>Budget <br/>Car Rentals<br/> Intercity<br/> Taxi Hire</h2></a></div>
                    </div>
                    <div class="add-wrap">
                        <div class="add-img add-img2"><a href=""><img class="img-responsive" src="images/add2.jpg" alt=""/></a></div>
                        <div class="add-text"><a href=""><h2>I Wish I Could <br/> Drive A Different <br/> Car Everyday</h2></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- label white html exit -->

@endsection
<script src="{{ asset('front/js/menu/jquery.min.js') }}"></script>
<script defer>
$( document ).ready(function() {
    booking_arr = localStorage.getItem('booking_arr');
    $('#order_data').val(booking_arr);
    booking_arr = JSON.parse(booking_arr)
    $('.from').text(booking_arr[0].start);
    $('.to').text(booking_arr[0].end);
    $('.fare').text(booking_arr[0].order_amount);
});
</script>
