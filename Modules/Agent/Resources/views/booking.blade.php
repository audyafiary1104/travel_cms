@extends('agent.master')
@section('content')
<div id="column-single">
<div class="result-page-numbers">
<div class="clear-l">&nbsp;</div>
</div>
<div id="export-options" style="display: none; position: relative; padding-bottom: 10px;">
<div class="box-section">
<div class="button-close" style="position: absolute; right: 10px;" title="Tutup">&nbsp;</div>
<form id="form-export" action="/exportbookings" method="post" target="_blank">
<h4>Opsi Ekspor</h4>
<div style="float: left; width: 360px; margin-top: 10px;">
<div id="mark-error-1" class="mark-error" style="display: none;">&nbsp;</div>
<div>Mulai dari hasil <input id="exp_begin" class="text" style="width: 46px; text-align: right;" maxlength="6" name="exp_begin" type="text" value="1" /> dan ekspor <input id="exp_count" class="text" style="width: 46px; text-align: right;" maxlength="6" name="exp_count" type="text" value="268" /> hasil.</div>
<div style="margin-top: 15px;">
<div style="float: left; margin: 2px 10px 0 0;">Pemisah Bidang :</div>
<div style="float: left;"><select id="exp_separator" class="select" style="width: 40px;" name="exp_separator">
<option selected="selected" value=",">,</option>
<option value=";">;</option>
<option value="|">|</option>
</select></div>
<div class="clear-l">&nbsp;</div>
<div class="optional" style="padding-top: 4px;">Cobalah untuk mengganti pemisah bidang apabila bidang tidak tampil dengan benar.</div>
</div>
<div style="margin-top: 15px;">
<div style="float: left; padding: 4px 2px 0 0;"><input id="exp_put_names" style="padding: 0;" name="exp_put_names" type="checkbox" value="1" /></div>
<div style="float: left; padding-top: 2px;"><label style="font-weight: normal; color: #373737; line-height: 17px;" for="exp_put_names">Masukkan nama bidang pada baris pertama.</label></div>
<div class="clear-l">&nbsp;</div>
</div>
</div>
<div style="float: left; width: 420px; margin-top: 10px;">
<div>Bidang :</div>
<div><select id="exp_fields" class="select" style="width: 161px; height: auto;" multiple="multiple" name="exp_fields[]" size="10">
<option selected="selected" value="Booking Time">Waktu Pemesanan</option>
<option selected="selected" value="Booking Reference">Referensi Pemesanan</option>
<option selected="selected" value="Your Reference">Referensi Anda</option>
<option selected="selected" value="Booking Status">Status Pemesanan</option>
<option selected="selected" value="Payment Status">Status Pembayaran</option>
<option selected="selected" value="Leader Name">Nama Pimpinan</option>
<option selected="selected" value="Nationality">Kebangsaan</option>
<option selected="selected" value="Check-in Date">Tanggal Check-in</option>
<option selected="selected" value="Check-out Date">Tanggal Check-out</option>
<option selected="selected" value="Amount">Jumlah</option>
<option selected="selected" value="Currency">Mata Uang</option>
<option selected="selected" value="Cancellation Deadline">Tenggat Pembatalan</option>
<option selected="selected" value="Hotel Name">Nama Hotel</option>
<option selected="selected" value="Hotel City Name">Nama Kota Hotel</option>
<option selected="selected" value="Hotel Country Code">Kode Negara Hotel</option>
<option selected="selected" value="Hotel Country Name">Nama Negara Hotel</option>
<option selected="selected" value="Hotel Confirmation">Hotel Confirmation</option>
</select></div>
<div class="optional" style="padding-top: 4px;">Untuk Windows: Tekan dan tahan tombol Control (Ctrl) untuk memilih atau menghapus beberapa bidang.<br />Untuk Mac: Tekan dan tahan tombol Command untuk memilih atau menghapus beberapa bidang.</div>
</div>
<div class="clear-l">&nbsp;</div>
<div style="margin-top: 10px;"><input class="button" type="submit" value="Ekspor" /> <input id="search" name="search" type="hidden" value="78da2b484c4fb535544bcc2db02ece2f2ab14d2ad14d01004a100717" /></div>
</form></div>
</div>
<table class="result-table">
<tbody>
<tr class="header">
<th>
<div title="Waktu Pemesanan"><a class="selected" href="?sort=bt-d">Waktu Pemesanan</a></div>
</th>
<th>
<div title="Referensi Pemesanan">Ref Pemesanan</div>
</th>
<th>
<div title="Referensi Anda">Referensi Anda</div>
</th>
<th>
<div title="Status Pemesanan">Status Pemesanan</div>
</th>
<th>
<div title="Status Pembayaran">Status Pembayaran</div>
</th>
<th>
<div><a href="?sort=ln-a">Nama Pimpinan</a></div>
</th>
<th>
<div>Harga Total</div>
</th>
<th>
<div><a href="?sort=dl-a">Tenggat Waktu</a></div>
</th>
<th>
<div><a href="?sort=ci-a">Check-in</a></div>
</th>
</tr>
<tr id="result-booking-1-56738276">
<td>
<div style="width: 88px; text-align: center;">19-08-16 16:08</div>
</td>
<td><a id="booking-1-56738276" class="booking-sum" style="width: 76px;" href="/bookingdetails?product=1&amp;booking_id=56738276&amp;search=78da2b484c4fb535544bcc2db02ece2f2ab14d2ad14d01004a100717">TL56738276</a></td>
<td>&nbsp;</td>
<td>
<div class="st-green" style="width: 70px;">Dikonfirmasi</div>
</td>
<td>
<div class="st-green" style="width: 70px;">Dibayar</div>
</td>
<td>
<div style="width: 130px;" title="JAY JONES">JAY JONES</div>
</td>
<td>
<div class="price">690.37 USD</div>
</td>
<td>
<div style="width: 72px; text-align: center;">15-08-2016</div>
</td>
<td>
<div style="width: 72px; text-align: center;">19-08-2016</div>
</td>
</tr>
</tbody>
</table>
<div id="tooltip">&nbsp;</div>
</div>
@stop