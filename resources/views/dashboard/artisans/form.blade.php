@extends('layouts.dashboard')
@section('title') @lang('artisans') @endsection
@section('content')

    <div class="tile">

		<form class="row justify-content-center" action="{{$artisan->id ? route('artisan.update', $artisan->id) : route('artisan.store')}}" method="post">
            @csrf
            @if ($artisan->id)
                @method('PUT')
            @endif

            <div class="col-md-3 form-group">
                <label for="first-name"> <span class="calibri">*</span> @lang('first name') </label>
                <input type="text" name="first_name" value="{{$artisan->first_name ?? old('first_name')}}" id="first-name" class="form-control" required>
            </div>

            <div class="col-md-3 form-group">
                <label for="last-name"> <span class="calibri">*</span> @lang('last name') </label>
                <input type="text" name="last_name" value="{{$artisan->last_name ?? old('last_name')}}" id="last-name" class="form-control" required>
            </div>

            <div class="col-md-3 form-group">
                <label for="mobile"> <span class="calibri">*</span> @lang('mobile') </label>
                <input type="text" name="mobile" value="{{$artisan->mobile ?? old('mobile')}}" id="mobile" class="form-control" required>
            </div>

            <div class="w-100"></div>

            <div class="col-md-3 form-group">
                <label for="city"> <span class="calibri">*</span> @lang('city') </label>
                <select class="select2" name="city_id" id="city" required>
                    @foreach ($cities as $city)
                        <option value="{{$city->id}}" @if($city->id == $artisan->city_id) selected @endif>
                            {{$city->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-3 form-group">
                <label for="activity-type"> <span class="calibri">*</span> @lang('activity type') </label>
                <select class="form-control" name="activity_type" id="activity-type" required>
                    <option value="1" @if($artisan->activity == 1) selected @endif>صنایع دستی</option>
                    <option value="2" @if($artisan->activity == 2) selected @endif>سوغات</option>
                </select>
            </div>

            <div class="col-md-12 form-group">
                <label for="address"> <span class="calibri">*</span> @lang('address') </label>
                <input type="text" name="address" value="{{$artisan->address ?? old('address')}}" id="address" class="form-control" required>
            </div>

            <div class="col-md-12 form-group">
                <label for="info"> @lang('info') </label>
                <textarea name="info" rows="4" class="form-control" name="info" id="info">{{$artisan->info ?? old('info')}}</textarea>
            </div>

            <div class="col-md-2 form-group">
                <button type="submit" class="btn btn-primary btn-block"> <i class="material-icons">check</i> تایید </button>
            </div>

        </form>

    </div>

@endsection
