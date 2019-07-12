@extends('agent.master')
@section('content')
<link rel="stylesheet" type="text/css" href="/image/jquery.lightbox-2.10.0.min.css">
<div id="column-1">
	<div id="search-filter-wrapper">
		
		
		<div style="height:15px"></div>
		
		
		<div id="poi-wrapper" style="display: block;">
			<div style="height:15px"></div>
			
			
		</div>
	</div>
	<div id="hotel-info-wrapper" style="display: none;">
		<a id="return-results-link" href="#" style="margin-bottom:20px"><span style="font-family:Verdana">«</span> Kembali ke Hasil Pencarian</a>
		<div id="hotel-info-filter"></div>
	</div>
</div>
<div id="column-2">
	
	<div id="results">
		<div id="results-loader" style="display: none;"><div class="image"><img src="/image/loader-balls.gif" width="40" height="40" alt=""></div></div>
		<div id="results-display">
<div class="result-hotels">
	<div id="result-hotel-57340947" class="result-hotel">
	<div class="hotel-name">
		<a href="#hotelid=57340947&amp;page=1&amp;sort=ds-a" class="hotel-name-link">Teduh Hostel Jakarta</a>
<img src="/image/star-2.png" alt="" class="hotel-stars">
		<div class="clear-l"></div>
	</div>
	<div>
		<div class="hotel-photo-t"><a href="#hotelid=57340947&amp;page=1&amp;sort=ds-a"><img data-original="/photo/hotel/32643e596403d3a8/5d/5da0bb8268eb8d39/01-t.jpg" src="/photo/hotel/32643e596403d3a8/5d/5da0bb8268eb8d39/01-t.jpg" alt="" class="lazy" style="display: inline;"></a></div>
		<div class="result-hotel-info">
			<div class="location" style="font-weight:bold"><span>Jarak ke Jakarta Kota Railway Station:</span> 225 m</div>
<div class="address"><span>Alamat:</span> Jalan Pintu Besar Selatan 82m Jakarta Barat</div>
			<div class="location"><span>Lokasi:</span> <a href="javascript:showHotelMap('57340947', 'Teduh Hostel Jakarta', -6.13962, 106.81396)" class="see-on-map">lihat di peta</a></div>
			<div class="description">This hostel welcomes guests in Jakarta.

Services and facilities include a baggage storage service and a library. Wireless internet access in public areas allows guests to stay connected. A bicycle hire service gives guests the opportunity to explore ... <a href="#hotelid=57340947&amp;page=1&amp;sort=ds-a">info lain</a></div>
		</div>
		<div class="clear-l"></div>
	</div>
		<div class="result-options">
			<div class="result-option">
				<div class="result-rooms">
					<div class="result-room">
						<div class="room-name">Single Bed in Mixed Dormitory Room</div>
						<div class="room-icon">
<img src="/image/icon-adult.png" width="11" height="13" alt="">						</div>
						<div class="room-price">6.43 EUR</div>
					</div>
						<div class="room-breakdown">
							<div id="link-breakdown-3443772515-1" class="link-breakdown"></div>
							<div id="show-breakdown-3443772515-1" class="show-breakdown"></div>
						</div>
					<div class="clear-l"></div>
				</div>
				<div class="option-info">
					<div class="board-name">Sarapan</div>
					<div class="availability"><span class="rq-0">Tersedia</span></div>
					<div class="option-price">6.43 EUR</div>
					<div class="option-book"><a href="/book?option_id=3443772515&amp;page=1&amp;sort=ds-a" onclick="bookClick(this)" class="button-book button-text">Pesan Sekarang</a></div>
					<div class="clear-l"></div>
				</div>
			</div>
@stop