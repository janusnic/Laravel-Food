@extends ('layouts.master')

@section ('content')
	<h1>{{ $recipe->name }}</h1>
	<a href="{{ $recipe->recipeCategory->getUrl() }}">{{ trans('laravel-food::messages.recipes.details.back') }}</a>
	<p>{{ $recipe->description }}</p>
	@include ('laravel-food::partials.recipe_essentials')
	{{ $recipe->getMainImage(array('size' => 'large')) }}
	<p class="nutritional_info">
		{{ trans('laravel-food::messages.recipes.details.per_serving') }}
		{{ $recipe->nutritional_info }}
	</p>
	@include ('laravel-food::partials.recipe_ingredients')
	@include ('laravel-food::partials.recipe_method')
	@include ('laravel-food::partials.recipe_product')
	@include ('laravel-food::partials.other_recipes')
@stop