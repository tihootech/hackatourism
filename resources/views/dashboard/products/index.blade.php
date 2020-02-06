@extends('layouts.dashboard')
@section('title')
    @lang('products')
@endsection
@section('content')

	@onlyartisan
        <div class="tile text-center">
    		<a href="{{route('product.create')}}" class="btn btn-outline-primary"> <i class="material-icons">add</i> @lang('new product') </a>
    	</div>
    @endonlyartisan

    <div class="tile">

		@if ($products->count())

			<div class="table-responsive-lg">
                <table class="table table-hovered table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"> # </th>
                            @master
                            <th scope="col"> @lang('artisan') </th>
                            @endmaster
                            <th scope="col"> @lang('title') </th>
                            <th scope="col"> @lang('price') </th>
                            <th scope="col"> @lang('discount') </th>
                            <th scope="col"> @lang('cost with discount') </th>
                            <th scope="col"> @lang('available count') </th>
                            <th scope="col"> @lang('images') </th>
                            <th scope="col" colspan="3"> @lang('actions') </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $i => $product)
                            <tr>
                                <th scope="row"> {{$i+1}} </th>
                                @master
                                    <td> <a href="#">{{$product->artisan->full_name}}</a> </td>
                                @endmaster
                                <td> {{$product->title}} </td>
                                <td class="calibri"> {{nf($product->price)}} </td>
                                <td class="calibri"> {{$product->discount ?? 0}} </td>
                                <td class="calibri"> {{nf($product->cost)}} </td>
                                <td class="calibri"> {{$product->available_count}} </td>
                                <td class="calibri"> {{$product->images->count()}} </td>
                                <td>
                                    <a href="{{route('image.manage', ['product', $product->id])}}" class="btn btn-outline-primary btn-sm"
                                        data-toggle="popover" data-content="@lang('manage images')" data-trigger="hover">
                                        <i class="material-icons mr-1">photo</i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-outline-success btn-sm"
                                        data-toggle="popover" data-content="@lang('edit')" data-trigger="hover">
                                        <i class="material-icons mr-1">edit</i>
                                    </a>
                                </td>
                                <td>
                                    <form class="d-inline" action="{{route('product.destroy', $product->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-outline-danger btn-sm delete"
                                            data-toggle="popover" data-content="@lang('delete')" data-trigger="hover">
                                            <i class="material-icons mr-1">delete</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
            </div>

		@else
			@include('includes.no_result')
		@endif

    </div>

@endsection
