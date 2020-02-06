@master

<li>
	<a class="app-menu__item @if(rn() == 'artisan.index') active @endif" href="{{route('artisan.index')}}">
		<i class="ml-2 material-icons">people</i>
		<span class="app-menu__label"> @lang('artisans') </span>
	</a>
</li>
<li>
	<a class="app-menu__item @if(rn() == 'message.index') active @endif" href="{{route('message.index')}}">
		<i class="ml-2 material-icons">email</i>
		<span class="app-menu__label"> @lang('text messages') </span>
	</a>
</li>

@endmaster

@artisan
<li>
	<a class="app-menu__item @if(rn() == 'product.index') active @endif" href="{{route('product.index')}}">
		<i class="ml-2 material-icons">storefront</i>
		<span class="app-menu__label"> @lang('products') </span>
	</a>
</li>
@endartisan
