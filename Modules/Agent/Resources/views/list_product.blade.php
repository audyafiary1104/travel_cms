@extends('agent.booking')
@section('content')
<div class="row modify-search modify-hotel">
		<div class="container clear-padding">
			<form >
				<div class="col-md-4">

				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">

				</div>
				<div class="col-md-2 col-sm-6 col-xs-6">

					</div>
				</div>
				<div class="col-md-1 col-sm-6 col-xs-3">
					<div class="form-gp">

					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-9">
					<div class="form-gp">
					</div>
				</div>
			</form>
		</div>
	</div>
<!-- END: MODIFY SEARCH -->

<!-- START: LISTING AREA-->
<div class="row">
	<div class="container">
		<!-- START: FILTER AREA -->
		<div class="col-md-3 clear-padding">

		</div>
		<!-- END: FILTER AREA -->

		<!-- START: INDIVIDUAL LISTING AREA -->
		<div class="col-md-9 hotel-listing">

			<!-- START: SORT AREA -->
			<div class="sort-area col-sm-10">

				<div class="col-md-3 col-sm-3 col-xs-6 sort">

				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 sort">

				</div>
			</div>
			<!-- END: SORT AREA -->
			<div class="clearfix visible-xs-block"></div>
			<div class="col-sm-2 view-switcher">
				<div class="pull-right">

				</div>
			</div>
			<div class="clearfix"></div>
			<!-- START: HOTEL LIST VIEW -->
			<div class="switchable col-md-12 clear-padding">
                @foreach($product_info as $key => $product)
				<div  class="hotel-list-view">
					<div class="wrapper">
						<div class="col-md-4 col-sm-6 switch-img clear-padding">
						<img src="{{ asset('img/hotels_image/'.$product_image[$key]->image ) }}" alt="">
													</div>
						<div class="col-md-6 col-sm-6 hotel-info">
							<div>
								<div class="hotel-header">
									<h5><a href="http://shtheme.net/demosd/cruise/?hb_room=devlok-hotel-6">{{$product->nama_hotels}}</a> <span>
																					<i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i>
																			</span></h5>
									<p><i class="fa fa-map-marker"></i>{{$product->alamat_hotels}}, {{$product->city}} </p>
								</div>


							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-md-2 rating-price-box text-center clear-padding">
							<div class="rating-box">
								<div class="tripadvisor-rating">
									<img src="http://shtheme.net/demosd/cruise/wp-content/themes/cruise/assets/images/tripadvisor.png" alt="cruise"><span>4.5/5.0</span>
								</div>
								<div class="user-rating">
																				<i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i><i class="fa fa-star colored"></i>
																			<span>128 Guest Reviews</span>
								</div>
							</div>
							<div class="room-book-box">
								<div class="price">
								</div>
								<div class="book">
									<a href="{{route('details.agent',$product->id)}}">Book</a>
								</div>
							</div>
						</div>
					</div>
				</div>
@endforeach

				<!-- END: HOTEL LIST VIEW -->
			</div>
			<div class="clearfix"></div>
			<!-- START: PAGINATION -->
			<div class="bottom-pagination">
							</div>
			<!-- END: PAGINATION -->
		</div>
		<!-- END: INDIVIDUAL LISTING AREA -->
	</div>
</div>

@stop