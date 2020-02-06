@extends('layouts.dashboard')
@section('title') @lang('manage images') @endsection
@section('content')

	<div class="tile">
		<form class="row justify-content-center" action="{{route('image.upload')}}" method="post" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="owner_type" value="{{className($type)}}">
			<input type="hidden" name="owner_id" value="{{$id}}">

			<div class="col-md-5 form-group">
				<label for="available-count"> @lang('upload new images') </label>
				<input type="file" name="images[]" id="images" class="form-control" required multiple>
				<small class="text-info">
					هنگام انتخاب تصویر،
					میتوانید بیش از یک تصویر انتخاب کنید
				</small>
			</div>
			<hr class="w-100">
			<div class="col-md-2 form-group">
                <button type="submit" class="btn btn-primary btn-block"> <i class="material-icons">cloud_upload</i> آپلود تصاویر </button>
            </div>

		</form>
	</div>

	<div class="tile">

		<h3> تصاویر فعلی </h3>
		<hr>
		<div class="row">
			@if ($images->count())
				@foreach ($images as $image)
					<div class="col-md-4">
						<div class="card my-2">
							<div class="card-body py-3 p-1">
								<img src="{{asset($image->path)}}" class="img-fluid">
								<hr>
								<form class="text-center" action="{{route('image.destroy', $image->id)}}" method="post" enctype="multipart/form-data">
									@csrf
									@method('delete')
									<button type="button" class="btn btn-outline-danger delete"
										data-toggle="popover" data-content="@lang('delete')" data-trigger="hover">
										<i class="material-icons mr-1">delete</i>
									</button>
								</form>
							</div>
						</div>
					</div>
				@endforeach
			@else
				<div class="alert alert-warning col-md-6 text-center">
					<i class="material-icons icon">info</i>
					تصویری وجود ندارد
				</div>
			@endif
		</div>

	</div>

@endsection
