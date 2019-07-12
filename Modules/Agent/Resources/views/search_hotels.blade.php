@extends('agent.master')
@section('content')
            <div style="float:left;width:420px">
                <h3>Formulir Pencarian Hotel</h3>
                <link type="text/css" href="/image/redmond/jquery-ui-1.12.1.min.css" rel="stylesheet">
                <script type="text/javascript" src="/script/jquery-ui-1.12.1.min.js"></script>
                <div id="hotel-search-form">
                    <div class="search-error">Anda harus memasukan tanggal check-in untuk memulai pencarian.</div>
                    <form id="form-search-hotel" action="/startsearch" method="get">
                        <div style="clear:left;height:44px">
                            <div style="height:16px"><label for="city">Tujuan</label></div>
                            <div style="height:26px">
                                <input type="text" id="city" name="city" value="Jakarta, Indonesia" class="text"
                                    style="width:267px" autocomplete="off">
                                <div style="position:relative">
                                    <div id="dest-search"></div>
                                </div>
                            </div>
                        </div>
                        <div style="clear:left;height:44px">
                            <div style="float:left">
                                <div style="height:16px"><label for="checkinday">Tanggal Check-in</label></div>
                                <div style="height:26px">
                                    <input type="date">
                                </div>
                            </div>

                        </div>
                        <div style="clear:left;height:44px">
                            <div style="height:16px"><label for="checkoutday">Tanggal Check-out</label></div>
                            <div style="height:26px">


                                <input type="date">
                            </div>
                        </div>



                        <div style="clear:left;padding-top:10px;height:29px">
                            <div style="float:left;padding-right:20px"><input type="submit" value="Cari" class="button"
                                    style="height:29px;padding:4px 15px"></div>

                            <div class="clear-l"></div>
                        </div>
                        <input type="hidden" name="return" value="/hotels">
                    </form>
                </div>
                <script type="text/javascript" src="/script/searchform.js?v=170111"></script>
            </div>
            <div style="float:left;width:538px">
                <h3>Ringkasan Akun</h3>
                <div id="account-summary">
                    <div class="item">
                        <div class="item-l">Metode Pembayaran :</div>
                        <div class="item-r">Prabayar</div>
                        <div class="tip-box-link"
                            title="Anda harus melakukan transfer bank untuk pemesanan Anda sebelum tenggat waktu pembatalan.">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-l">Metode Alternatif :</div>
                        <div class="item-r">Kartu Kredit</div>
                        <div class="tip-box-link"
                            title="Anda juga bisa membayar dengan kartu kredit pada saat atau setelah melakukan pemesanan.">
                        </div>
                    </div>
                </div>
                <div style="margin-top:15px">
                    <p style="text-align: center;"></p>

                    <p><strong style="font-size: 14px;">Please find below our bank details:</strong></p>

                    <p><strong>TRAVELLANDA LTD – </strong>HSBC Bank, 21 King’s Mall Street, London W6 0QF</p>

                    <table border="1" cellpadding="1" cellspacing="1" style="width:100%;">
                        <tbody>
                            <tr>
                                <td><span style="color:#FF8C00;"><strong>GBP Account</strong></span></td>
                                <td><span style="color:#FF8C00;"><strong>EURO Account</strong></span></td>
                            </tr>
                            <tr>
                                <td>New Iban:&nbsp; GB38HBUK40032101871676</td>
                                <td>New Iban:&nbsp; GB33HBUK40127670317442</td>
                            </tr>
                            <tr>
                                <td>New Swift:&nbsp; HBUKGB4106P</td>
                                <td>New Swift:&nbsp; HBUKGB4B</td>
                            </tr>
                            <tr>
                                <td><span style="color:#FF8C00;"><strong>USD Account</strong></span></td>
                                <td><span style="color:#FF8C00;"><strong>HKD/SGD&nbsp; (unchanged)</strong></span></td>
                            </tr>
                            <tr>
                                <td>New Iban:&nbsp; GB95HBUK40127670606356</td>
                                <td>Account No: <a href="tel:652-146051-838">652-146051-838</a>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>New Swift:&nbsp; HBUKGB4B</td>
                                <td>SWIFT: HSBCHKHHHKH</td>
                            </tr>
                        </tbody>
                    </table>

                    <p><span style="font-size: 14px; color: rgb(255, 0, 0);">Please&nbsp;</span><strong
                            style="font-size: 16px; color: rgb(255, 0, 0);"><u>do not share</u></strong><span
                            style="font-size: 14px; color: rgb(255, 0, 0);">&nbsp;your Travellanda user name and
                            password with anybody.&nbsp;</span></p>

                    <p><strong><span style="font-size:16px;"><u><a href="/tutorials">Click here to access our video
                                        tutorials</a></u></span></strong></p>
                </div>
            </div>
            <div class="clear-l"></div>
      @stop