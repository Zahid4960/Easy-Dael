{{-- extends master layout --}}
@extends('Frontend.Layout.LayoutMaster')

@section('content')

@include('Frontend.Layout.LayoutPartials.LayoutSidebar')

	{{-- content area --}}
	<div class="col-md-9">
		<div class="widget">
			<hr>
			<h3 class="featured-product-text-center"><strong >All Products</strong></h3>
			<hr>
			<div class="row">
				<div class="col-md-3" style="margin-top: 1%;">
					{{-- card view --}}
					<div class="card card-hover">
							<img class="card-img-top" src="{{ asset('images/products/watch.jpeg') }}" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Watch</h5>
								<p class="card-text">Rolex beautiful watch</p>
								<p class="card-text">BDT-5000/-</p>
								<a class="btn btn-outline-success" href="">Add to card</a>
							</div>
					</div>
					{{-- end of card view --}}
				</div>
			</div>
		</div>
	</div>
	{{-- end of content area --}}
</div>
</div>
@endsection
