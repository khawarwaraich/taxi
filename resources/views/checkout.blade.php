@extends('layouts.web')

@section('content')

<!-- label white html start -->
<div class="container">
    <div class="page30-wrap">
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
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" value="{{ auth()->guard('web')->user()->name ?? ''}}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputemail1" class="col-sm-4 control-label2 control-label ">Email Address<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="email" class="form-control" name="email" id="inputemail1" placeholder="Email Address*" value="{{ auth()->guard('web')->user()->email ?? ''}}" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputnumber1" class="col-sm-4 control-label2 control-label ">Mobile Number<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="text" class="form-control" name="phone" placeholder="Mobile Number" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputnumber1" class="col-sm-4 control-label2 control-label ">Transaction#<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="text" class="form-control" name="transaction_no" placeholder="Transaction number of pickup item" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputcountry1" class="col-sm-4 control-label2 control-label" >Pickup Date<span>*</span></label>
                            <div class=" col-sm-8 completing-form">
                                <input type="datetime-local" class="form-control" value="2021-03-01T12:00" name="pickup_time" placeholder="Select pickup date and time" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label2 control-label"> Special note to the driver </label>
                            <div class=" col-sm-8 completing-form">
                                <textarea class="form-control" name="note" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label2 control-label"> Total Payable Amount </label>
                            <div class="col-sm-8 completing-form">
                                <h4>$<span class="fare"></span></h4>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-7 col-sm-5">
                            <div class="completing-form-btnwrap"><button type="submit" class="btn form-btn btn-block">Complete Booking</button></div>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 page30-form-wrapper">
                <div class="row">
                    <div class="add-wrap">
                        <div class="add-img"><a href=""><img class="img-responsive" src="{{ asset('front') }}/images/add1.jpg" alt=""/></a></div>
                        <div class="add-text"><a href=""><h2>Budget <br/>Car Rentals<br/> Intercity<br/> Taxi Hire</h2></a></div>
                    </div>
                    <div class="add-wrap">
                        <div class="add-img add-img2"><a href=""><img class="img-responsive" src="{{ asset('front') }}/images/add2.jpg" alt=""/></a></div>
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
