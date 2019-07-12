@extends('agent.master')
@section('content')
<div id="column-single"><a id="link-dl-pdf" style="margin-top: 2px;"
        href="/hoteloffer?hotel_id=2841671&amp;offer_opt[]=457682671" target="_blank" rel="noopener">Download PDF
        Offer</a>
    <div><a id="return-results-link"
            href="/searchresults?searchid=11231941#previd=2841671&amp;page=1&amp;sort=rc-a"><span
                style="font-family: Verdana;">&laquo;</span> Kembali ke Hasil Pencarian</a></div>
    <div class="box-section" style="margin-top: 10px;">
        <div style="margin-bottom: 8px;">
            <div style="float: left; width: 14px; height: 32px; background-image: url('/image/check-1.png');">&nbsp;
            </div>
            <div
                style="float: left; height: 24px; padding: 8px 0 0 3px; background-color: #ff6600; color: #ffffff; font-size: 14px;">
                Silakan periksa nama dan alamat hotel yang ingin Anda pesan dilengkapi dengan rincian pemesanan lainnya.
            </div>
            <div style="float: left; width: 14px; height: 32px; background-image: url('/image/check-2.png');">&nbsp;
            </div>
            <div class="clear-l">&nbsp;</div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Hotel &nbsp;:</label></div>
            <div class="form-right"><a class="hotel-name-link"
                    href="/searchresults?searchid=11231941#hotelid=2841671&amp;page=1&amp;sort=rc-a" target="_blank"
                    rel="noopener">HARRIS SUITES FX SUDIRMAN</a></div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Alamat &nbsp;:</label></div>
            <div class="form-right" style="width: 620px;">JL. JEND SUDIRMAN 10270 JAKARTA</div>
            <div class="clear-l">&nbsp;</div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Tanggal Check-in &nbsp;:</label></div>
            <div class="form-right">25-07-2019<span style="margin-left: 8px; font-weight: normal;"><span
                        style="color: #5c54bf;">[</span> 13 hari lagi <span style="color: #5c54bf;">]</span></span>
            </div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Tanggal Check-out &nbsp;:</label></div>
            <div class="form-right">26-07-2019</div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Kamar &nbsp;:</label></div>
            <div class="form-right">1 kamar untuk 1 dewasa</div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Jenis Akomodasi &nbsp;:</label></div>
            <div class="form-right">Hanya Kamar</div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Harga Total &nbsp;:</label></div>
            <div class="form-right" style="font-weight: bold;">58.77 EUR</div>
        </div>
        <div class="form-two-cols">
            <div class="form-left"><label>Status &nbsp;:</label></div>
            <div class="form-right" style="font-weight: bold;"><span class="rq-0">Tersedia</span></div>
        </div>
    </div>
    <h3>Kebijakan Pembatalan</h3>
    <div class="box-section">
        <div class="form-two-cols">
            <div class="form-left"><label>Tenggat Pembatalan &nbsp;:</label></div>
            <div class="form-right">19-07-2019 17:00 UK Time<span style="margin-left: 8px; font-weight: normal;"><span
                        style="color: #5c54bf;">[</span> 7 hari lagi <span style="color: #5c54bf;">]</span></span></div>
        </div>
        <div>
            <ul>
                <li>Dari 19-07-2019 17:00 UK Time sejumlah 1 Malam akan dikenakan.</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Untuk menghindari denda, pembatalan harus dilakukan sebelum pukul 17:00 GMT pada tenggat pembatalan.
                </li>
            </ul>
        </div>
    </div>
    <h3>Informasi Penting</h3>
    <div id="mark-error-6" class="mark-error" style="display: none;">&nbsp;</div>
    <div class="box-section">
        <div>
            <ul>
                <li>Important notices: In case of any amendment please contact us to check the rates and conditions as
                    these could change - Hotel will invoice the total amount of this booking in case of no show / En
                    caso de modificacion, por favor contacten con nosotros para verificar las tarifas y condiciones de
                    la reserva ya que podrian ser diferentes - En caso de no show el hotel se reserva el derecho de
                    aplicar gastos del 100%</li>
            </ul>
        </div>
    </div>
    <h3>Harga Kamar</h3>
    <div class="box-section">
        <div class="result-room">
            <div class="room-name">Double Single Use</div>
            <div class="room-icon"><img src="/image/icon-adult.png" alt="" width="11" height="13" /></div>
            <div class="room-price">58.77 EUR</div>
        </div>
        <div class="room-breakdown">&nbsp;</div>
        <div class="clear-l">&nbsp;</div>
    </div>
    <form id="form-booking" action="/startbooking" method="post">
        <h3>Rincian Penumpang</h3>
        <div id="mark-error-1" class="mark-error" style="display: none;">&nbsp;</div>
        <div class="box-section">
            <div class="form-two-cols">
                <div class="form-left"><label>Kebangsaan &nbsp;:</label></div>
                <div class="form-right">United States</div>
            </div>
            <div class="form-two-cols">
                <div class="form-left"><label>Kamar &nbsp;&nbsp;</label></div>
                <div class="form-right">
                    <div style="float: left; width: 70px;"><label>Gelar</label></div>
                    <div style="float: left; width: 180px;"><label>Nama Depan</label></div>
                    <div style="float: left; width: 180px;"><label>Nama Belakang</label></div>
                </div>
            </div>
            <div class="form-two-cols">
                <div class="form-left" style="white-space: nowrap; overflow: hidden;"><label
                        for="first_name_ad_0_0_0">Double Single Use &nbsp;:</label></div>
                <div class="form-right">
                    <div style="float: left; width: 70px;"><select id="title_ad_0_0_0" class="select"
                            style="width: 58px;" name="title_ad_0_0_0">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Miss">Miss</option>
                        </select></div>
                    <div style="float: left; width: 180px;"><input id="first_name_ad_0_0_0" class="text"
                            style="width: 164px;" maxlength="50" name="first_name_ad_0_0_0" type="text" value="" />
                    </div>
                    <div style="float: left; width: 180px;"><input id="last_name_ad_0_0_0" class="text"
                            style="width: 164px;" maxlength="50" name="last_name_ad_0_0_0" type="text" value="" /></div>
                    <label><span class="optional">Ketua</span></label>
                </div>
            </div>
        </div>
        <h3>Preferensi dan Pembayaran</h3>
        <div id="mark-error-2" class="mark-error" style="display: none;">&nbsp;</div>
        <div class="box-section">
            <div class="form-two-cols">
                <div class="form-left"><label for="agency_reference"><span class="optional">(Opsional)</span> Referensi
                        Anda &nbsp;:</label></div>
                <div class="form-right"><input id="agency_reference" class="text" style="width: 234px;" maxlength="30"
                        name="agency_reference" type="text" value="" /></div>
            </div>
            <div class="form-two-cols">
                <div class="form-left"><label for="late_checkin">Check-in Terlambat &nbsp;:</label></div>
                <div class="form-right">
                    <div style="float: left; padding: 4px 2px 0 0;"><input id="late_checkin" style="padding: 0;"
                            name="late_checkin" type="checkbox" value="1" /></div>
                    <div style="float: left; padding-top: 2px;">&nbsp;</div>
                    <div id="late_checkin_box" style="float: left;">
                        <div class="optional" style="float: left; margin: 3px 5px 0 5px;">Silakan pilih waktu check-in:
                        </div>
                        <div style="float: left;"><select id="late_checkin_time" class="select" style="width: 168px;"
                                name="late_checkin_time">
                                <option value="">Silakan Pilih...</option>
                                <option value="1">Between 18:00 - 20:00</option>
                                <option value="2">Between 21:00 - 24:00</option>
                                <option value="3">After Midnight</option>
                            </select></div>
                    </div>
                    <div class="clear-l">&nbsp;</div>
                </div>
            </div>
            <div id="payment-cc" style="display: block;">
                <div class="form-two-cols">
                    <div class="form-left"><label>Jumlah Pembayaran &nbsp;:</label></div>
                    <div class="form-right">
                        <div style="float: left; margin-right: 8px;">58.77 EUR<span class="cc_amex_amount"
                                style="display: none;"> <span style="font-size: 16px; line-height: 15px;">&rArr;</span>
                                <strong>52.81 GBP</strong></span></div>
                        <div class="clear-l">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin: 15px 0 0 218px;"><input class="button" style="height: 29px; padding: 4px 15px;"
                type="submit" value="Lanjutkan" /></div>
        <input id="option_id" name="option_id" type="hidden" value="457682671" /> <input id="page" name="page"
            type="hidden" value="1" /> <input id="sort" name="sort" type="hidden" value="rc-a" />
    </form>
</div>
@stop