@extends('layouts.app', ['title' => __('Riders')])

@section('content')
@include('users.partials.header', [
'title' => __('Register Rider'),
'class' => 'col-lg-12',
])
<?php
      if (isset($user_data->id) && $user_data->id != 0) {
          $submit_url = route('admin:user.update', [$user_data->id ?? '']);
      } else {
          $submit_url = route('admin:user.add');
      }
    ?>
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <h3 class="col-12 mb-0">{{ __('Rider Registration Form') }}</h3>
          </div>
        </div>
        <div class="card-body">
          <form id="user_form" method="post" action="{{$submit_url}}" enctype="multipart/form-data">
            @csrf
            <fieldset>
              <h6 class="heading-small text-muted mb-4">Rider Information</h6>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Full Name</label>
                    <input class="form-control form-control-alternative" type="text" value="{{$user_data->name ?? ''}}" placeholder="eg. Jhon" id="name" name="name">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Username</label>
                    <input class="form-control form-control-alternative" type="text" value="{{$user_data->username ?? ''}}" placeholder="Unique username" id="username" name="username" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Email</label>
                    <input class="form-control form-control-alternative" type="email" value="{{$user_data->email ?? ''}}" placeholder="example@abc.com" id="email" name="email">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                  @if(!isset($user_data->password))
                    <label class="form-control-label"><span class="required-icon">* </span>Password</label>
                    <input class="form-control form-control-alternative" type="password" id="password" name="password">
                  @endif
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Phone#</label>
                    <input class="form-control form-control-alternative" type="text" value="{{$user_data->phone ?? ''}}" placeholder="+92123456789" id="phone" name="phone">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Gender</label>
                    <select class="form-control form-control-alternative" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Not Specified">Not Specified</option>
                      </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Country</label>
                    <input class="form-control form-control-alternative" type="text" value="{{$user_data->country ?? ''}}" id="country" name="country">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label"><span class="required-icon">* </span>City</label>
                      <input class="form-control form-control-alternative" type="text" value="{{$user_data->city ?? ''}}" id="city" name="city">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                      <label class="form-control-label"><span class="required-icon">* </span>Address</label>
                      <textarea rows="1" class="form-control form-control-alternative" name="address" id="address">{{$user_data->address ?? ''}}</textarea>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-4">
                  <div class="form-group text-center">
                    <label class="form-control-label" for="input-name">Profile Picture</label>
                    @php
                      if(isset($user_data) && !empty($user_data->profile_image) && File::exists(public_path(ORIGNAL_IMAGE_PATH_USERS.$user_data->profile_image)))
                      {
                        $path = BASE_URL.ORIGNAL_IMAGE_PATH_USERS.$user_data->profile_image;
                      }else
                      {
                        $path = '';
                      }
                    @endphp
                    <div style="display: flex;justify-content: center;">
                      <input type="file" name="profile_image" class="dropify" data-default-file="{{$path}}" data-show-loader="true"/>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <div class="row">
            <div class="col-lg-2 col-md-2">
                <a class="btn btn-icon btn-success" href="{{route('admin:users')}}" id="back">
                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                  <span class="btn-inner--text">Back</span>
                </a>
              </div>
              <div class="col-lg-2 col-md-2 offset-lg-8">
                <button class="btn btn-icon btn-success" type="submit" id="save">
                  <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                  <span class="btn-inner--text">Save</span>
                </button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.footers.auth')
</div>

<script>
  $(document).ready(function() {
    $("#save").on('click', function() {
      $("#user_form").validate({
        rules: {
          name: {
            required: true,
          },
          username: {
            required: true,
          },
          address: {
            required: true,
          },
          country: {
            required: true,
          },
          city: {
            required: true,
          },
          company: {
            required: true,
          },
          email: {
            required: true,
            email: true
          }
        }
      });
    });

    $('#type').on('change', function()
    {
        var type = $('#type option:selected').text();
        if(type == "Vendor")
        {
            $("#vehicle-box").css("display", "none");
            $("#outlet-box").css("display", "block");
        }
        else if(type == "Driver"){
            $("#outlet-box").css("display", "none");
            $("#vehicle-box").css("display", "block");
        }
        else
        {
            $("#vehicle-box").css("display", "none");
            $("#outlet-box").css("display", "none");
        }

    });


    var type = $('#type option:selected').text();
        if(type == "Vendor")
        {
            $("#vehicle-box").css("display", "none");
            $("#outlet-box").css("display", "block");
        }
        else if(type == "Driver"){
            $("#outlet-box").css("display", "none");
            $("#vehicle-box").css("display", "block");
        }
        else
        {
            $("#vehicle-box").css("display", "none");
            $("#outlet-box").css("display", "none");
        }

});

</script>


@endsection
