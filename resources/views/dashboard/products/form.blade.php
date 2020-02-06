@extends('layouts.dashboard')
@section('title') @lang('products') @endsection
@section('content')

    <div class="tile">

		<form class="row justify-content-center" action="{{$product->id ? route('product.update', $product->id) : route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($product->id)
                @method('PUT')
            @endif

            <div class="col-md-3 form-group">
                <label for="title"> <span class="calibri">*</span> @lang('title') </label>
                <input type="text" name="title" value="{{$product->title ?? old('title')}}" id="title" class="form-control" required>
            </div>

            <div class="col-md-3 form-group">
                <label for="price"> <span class="calibri">*</span> @lang('price') </label>
                <input type="number" name="price" value="{{$product->price ?? old('price')}}" id="price" class="form-control" required>
            </div>

            <div class="col-md-3 form-group">
                <label for="discount"> @lang('discount') </label>
                <input type="text" name="discount" value="{{$product->discount ?? old('discount')}}" id="discount" class="form-control">
            </div>

            <div class="col-md-3 form-group">
                <label for="available-count"> <span class="calibri">*</span> @lang('available count') </label>
                <input type="number" name="available_count" value="{{$product->available_count ?? old('available_count')}}" id="available-count" class="form-control" required>
            </div>

            @unless ($product->id)
                <div class="col-md-5 form-group">
                    <label for="available-count"> @lang('images') </label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                    <small class="text-info">
                        هنگام انتخاب تصویر،
                        میتوانید بیش از یک تصویر انتخاب کنید
                    </small>
                </div>
            @endunless

            <div class="col-md-12 form-group">
                <label for="info"> @lang('info') </label>
                <textarea name="info" rows="4" class="form-control" name="info" id="info">{{$product->info ?? old('info')}}</textarea>
            </div>

            <div class="col-md-2 form-group">
                <button type="submit" class="btn btn-primary btn-block"> <i class="material-icons">check</i> تایید </button>
            </div>

        </form>

    </div>

@endsection
