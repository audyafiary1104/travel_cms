@extends('sales.master')

@section('content')

<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Transaksi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama Guest</th>
                                            <th>Booking Code</th>
                                            <th>Nama Hotels</th>
                                            <th>Type kamar</th>
                                            <th>Jumlah Kamar</th> 
                                            <th>Chek in </th> 
                                            <th>Chek out </th> 
                                            <th>status pembayaran</th> 
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AUdy Afiary</td>
                                            <td>0099310</td>
                                            <td>Whyadam Casablanca</td>
                                            <td>Deluxe</td>
                                            <td>1</td>
                                            <td>12-09-2001</td>
                                            <td>12-09-2003</td>
                                            <td>Paid</td>
                                            <td>view details</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
