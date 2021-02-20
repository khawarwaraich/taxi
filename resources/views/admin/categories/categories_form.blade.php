@extends('layouts.app', ['title' => __('Categories')])

@section('content')
@include('users.partials.header', [
'title' => __('Create Categories'),
'class' => 'col-lg-12',
])
<?php

if (isset($categories_data->id) && $categories_data->id != 0) {
  $submit_url = route('admin:categories.update', [$categories_data->id ?? '']);
} else {
  $submit_url = route('admin:categories.add');
}
?>
<div class="container-fluid mt--7">
  <form id="category-form" method="post" action="{{$submit_url}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-xl-8 col-md-8 col-sm-8">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <h3 class="col-12 mb-0">{{ __('Category Form') }}</h3>
            </div>
          </div>
          <div class="card-body">
            <fieldset>
              <h6 class="heading-small text-muted mb-4">Category Information</h6>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Category Name</label>
                    <input class="form-control form-control-alternative" type="text" value="{{$categories_data->name ?? ''}}" id="name" name="name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="form-group">
                    <label class="form-control-label"><span class="required-icon">* </span>Charges</label>
                    <input class="form-control form-control-alternative" type="text" value="{{$categories_data->charges ?? ''}}" id="charges" name="charges">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label"><span class="required-icon">* </span>Charges Type</label>
                      <select class="form-control form-control-alternative required" name="charges_type">
                        <option value="distance" <?php if ($categories_data->charges_type ?? '' == "distance") {
                                                  echo "selected";
                                                } ?>> Per (KM)</option>
                        <option value="fixed" <?php if ($categories_data->charges_type ?? '' == "fixed") {
                                                  echo "selected";
                                                } ?>> Fixed Charges</option>
                      </select>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control form-control-alternative" id="exampleFormControlTextarea1" rows="5" name="description">{{$categories_data->description ?? ''}}</textarea>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-4 col-sm-4">
        <div class="card bg-secondary shadow">
          <div class="card-header bg-white border-0">
            <div class="row align-items-center">
              <h3 class="col-12 mb-0">{{ __('Category Image') }}</h3>
            </div>
          </div>
          <div class="card-body">
            <fieldset>
              <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                  <div class="form-group text-center">
                    <label class="form-control-label" for="input-name">Image</label>
                    @php
                    if(isset($categories_data) && !empty($categories_data->image) && File::exists(public_path(ORIGNAL_IMAGE_PATH_CATEGORIES.$categories_data->image)))
                    {
                    $path = BASE_URL.ORIGNAL_IMAGE_PATH_CATEGORIES.$categories_data->image;
                    }else
                    {
                    $path = NO_IMAGE;
                    }
                    @endphp
                    <div style="display: flex;justify-content: center;">
                      <input type="file" name="image" class="dropify" data-default-file="{{$path}}" />
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <button class="btn btn-icon btn-warning" type="submit" id="save">
          <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
          <span class="btn-inner--text">Save</span>
        </button>
      </div>

    </div>
  </form>
  @include('layouts.footers.auth')
</div>

<script>
  $(document).ready(function() {
    $("#save").on('click', function() {
      $("#category-form").validate({
        rules: {
          name: {
            required: true,
          },
          charges: {
            number: true,
          },
        }
      });
    });
  });
</script>
@endsection
