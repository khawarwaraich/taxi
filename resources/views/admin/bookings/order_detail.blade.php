@extends('layouts.app', ['title' => __('Order Detail')])

@section('content')
    @include('users.partials.header', [
        'title' => __('Booking Details'),
        'class' => 'col-lg-7'
    ])
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12">
            <br>
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">#{{$booking->id}} - {{$booking->created_at}}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin:bookings')}}" class="btn btn-sm btn-primary">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="heading-small text-muted mb-4">Customer Information</h6>
                    <div class="pl-lg-4">
                        <h3>{{$booking->full_name}}</h3>
                        <h4>{{$booking->email}}</h4>
                        <h4>{{$booking->phone}}</h4>
                    </div>
                    <hr class="my-4">
                    <h6 class="heading-small text-muted mb-4">Order Information</h6>
                    <div class="pl-lg-4">
                        <h4><strong>Transaction# :</strong> {{$booking->transaction_no ?? ''}}</h4>
                        <h4><strong>Pickup Time :</strong> {{$booking->pickup_time ?? ''}}</h4>
                        <h4><strong>Pickup Location:</strong> {{$booking->from_location ?? ''}}</h4>
                        <h4><strong>Drop Location:</strong> {{$booking->to_location ?? ''}}</h4>
                        <h4><strong>Order Note:</strong> {{$booking->note ?? "N/A"}}</h4>
                    </div>
                    <hr>
                    <h3>TOTAL: ${{$booking->order_total ?? 0.00}}</h3>
                    <hr>
                    <h4>Payment method: Credit Card</h4>
                    @if($booking->payment_status == 1)
                    <i class="bg-success"></i>
                    <h4>Payment status: <span class="status badge badge-success badge-pill"> Paid</span></h4>
                    @else
                    <i class="bg-danger"></i>
                    <h4>Payment status: <span class="status badge badge-danger badge-pill"> Unpaid</span></h4>
                    @endif
                </div>
                <div class="card-footer py-4">
                    <h6 class="heading-small text-muted mb-4">Actions</h6>
                    <nav class="justify-content-end" aria-label="...">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#modal-time-to-prepare">Accept</button>
                        <a href="#"
                            class="btn btn-danger">Reject</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
        </div>
    </footer>
</div>
@endsection
