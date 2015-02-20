@extends('layouts.template')


@section('css')
<style>
	.sale-wrapper {
	border: #e4e4e4;
	padding: 20px;
	border-radius: 4px;
	box-shadow: 0 0 8px #A3A3C2;
	margin-bottom: 35px;
	min-height: 250px;
	}

	#sale-thumbnail {
		max-width: 100px;
		max-height: 100px;
		min-height: 100px;
		min-width: 100px;
		float: right;
		margin-right: -200px;
		margin-top: -5px;
		margin-bottom: -10px;

	}

	#sale-row {
		margin-right: 0;
		margin-left: 0;
		margin-bottom: 0;
		margin-top: 0;
	}
</style>
@stop


@section('content')

<div class="container">
	<div class="col-md-7">
		<!-- Sale Wrapper -->
			<ul>
				@foreach ($sales as $sale) 
					<div class="sale-wrapper">

						<div id="sale-row" class="row">
						<div class="col-md-6">
						<h2><a href ="{{{ action('SalesController@show', $sale->id) }}}">{{{ $sale->sale_name }}}</a></h2>
						</div>


						<div class="col-md-1"
						>
						<? $i = 0; ?>
						@foreach ($sale->images as $image)
							<? $i++; ?>
							<? if ($i == 1): ?>
								<img class="img-circle" id="sale-thumbnail" src="{{ $image->img_path }}">
							<? endif; ?>
						@endforeach
						</div>
						</div>


						<hr>


						<p>{{{ date("F, d Y") }}} at {{{ date("g:ha", strtotime($sale->sale_date_time)) }}}</p>
						<p>{{{ $sale->description }}}</p>
						<p>{{{ $sale->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
						@foreach ($sale->tags as $tag)

							<small> {{{ $tag->name }}} </small>

						@endforeach
					</div>
				@endforeach	
			</ul>
		</div> 
		<!-- //Sale Wrapper// -->
		{{ $sales->appends(array('search' => Input::get('search')))->links() }}
	</div>
</div>

@stop
