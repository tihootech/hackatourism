@extends('layouts.dashboard')
@section('title')
    @lang('artisans')
@endsection
@section('content')

	<div class="tile text-center">
		<a href="{{route('artisan.create')}}" class="btn btn-outline-primary"> <i class="material-icons">add</i> @lang('new artisan') </a>
	</div>

    <div class="tile">

		@if ($artisans->count())

			<div class="table-responsive-lg">
                <table class="table table-hovered table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"> # </th>
                            <th scope="col"> @lang('full name') </th>
                            <th scope="col"> @lang('mobile') </th>
                            <th scope="col"> @lang('city') </th>
                            <th scope="col"> @lang('activity type') </th>
                            <th scope="col"> @lang('address') </th>
                            <th scope="col"> @lang('active') </th>
                            <th scope="col" colspan="2"> @lang('actions') </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artisans as $i => $artisan)
                            <th scope="row"> {{$i+1}} </th>
                            <td> {{$artisan->full_name}} </td>
                            <td> {{$artisan->mobile}} </td>
                            <td> {{$artisan->city}} </td>
                            <td> {{$artisan->activity}} </td>
                            <td> {{short($artisan->address)}} </td>
                            <td> {{$artisan->active ? __('yes') : __('no')}} </td>
                            <td>
                                <a href="{{route('artisan.edit', $artisan->id)}}" class="btn btn-outline-success btn-sm">
                                    <i class="material-icons mr-1">edit</i>
                                </a>
                            </td>
                            <td>
                                <form class="d-inline" action="{{route('artisan.destroy', $artisan->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-outline-danger btn-sm delete">
                                        <i class="material-icons mr-1">delete</i>
                                    </button>
                                </form>
                            </td>
                        @endforeach
                    </tbody>
                </table>
            </div>

		@else
			@include('includes.no_result')
		@endif

    </div>

@endsection
