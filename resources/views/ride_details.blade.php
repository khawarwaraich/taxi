@extends('layouts.web')

@section('content')

@php
$start = $from_location['lat'].','.$from_location['lng'];
$end = $to_location['lat'].','.$to_location['lng'];
@endphp
    <input type="hidden" id="start" value="{{$start}}">
    <input type="hidden" id="end" value="{{$end}}">
    <input type="hidden" id="from" value="{{$from_location['address']}}">
    <input type="hidden" id="to" value="{{$to_location['address']}}">
        <div id="map-canvas"></div>
        <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-m-4 col-sm-12 col-xs-12 bg-taxi">
                <div class="address text-center">
                    <h4><strong>Location</strong></h4>
                    <hr>
                    <h5><strong>From: {{$from_location['address']}}</strong></h5>
                    <h5><strong>To: {{$to_location['address']}}</strong></h5>
                </div>
            </div>
            <div class="col-lg-4 col-m-4 col-sm-12 col-xs-12 bg-taxi">
                <div class="duration text-center">
                    <h4><strong>Expected Time</strong></h4>
                    <hr>
                    <h5><strong> {{$duration}}</strong></h5>
                </div>
            </div>
            <div class="col-lg-4 col-m-4 col-sm-12 col-xs-12 bg-taxi">
                <div class="distance text-center">
                    <h4><strong>Distance</strong></h4>
                    <hr>
                    <h5><strong> {{$distance}}</strong></h5>
                </div>
            </div>
        </div>
    </div>
<hr>
    <div class="container">
		<div class="row page25-container">
			<div class="col-sm-12">
				<div class="row">
                    @if(isset($categories) && !empty($categories))
                    @foreach($categories as $value)
                    @php
                    $path = BASE_URL.SMALL_IMAGE_PATH_CATEGORIES.$value->image;
                    $check_exist = File::exists(public_path().SMALL_IMAGE_PATH_CATEGORIES.$value->image);
                    if($check_exist == 1 && $value->image != '')
                    {
                      $image = $path;
                    }else{
                      $image = NO_IMAGE;
                    }
                    @endphp
					<div class="page25-content mt-5">
						<div class="page25-content-header"></div>
						<div class="col-sm-2">
							<div class="row">
								<div class="p25-minicar-wrap">
									<div class="p25-minicar"><img style="height: 100px;" src="{{$image}}"/></div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="Proin-text-wrap">
									<a href=""><h6>{{$value->name ?? ''}}</h6></a>
									<p>{{$value->description ?? '-'}}</p>
								</div>
							</div>
						</div>
						<div class="col-sm-2">
						</div>
						<div class="col-sm-2">
							<div class="row">
								<div class="pa28-text-wrap" style="margin-top: 38px;">
									<h2>${{$value->amount ?? 0.00}}</h2>
									<p>Fare</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="pa25-btn-wrapper">
									<div class="pa25-btn-wrap">
										<a href="javascript:void(0)" class="btn pa25-btn btn-lg book-now" data-catID="{{$value->id ?? ''}}" data-userID="{{auth()->id() ?? 0}}" data-fare="{{$value->amount ?? 0.00}}">BOOK NOW</a>
									</div>
								</div>
							</div>
						</div>
					</div>
                    @endforeach
                    @endif
				</div>
			</div>
		</div>
	</div>


@endsection
