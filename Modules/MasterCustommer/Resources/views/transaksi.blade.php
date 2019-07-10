@extends('admin.master')
@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Master Transaksi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Agent Code</th>
                                            <th>Jumlah Transaksi</th>
                                            <th>Nama hotel</th>
                                            <th>Nama Guest</th>
                                            <th>check in </th>
                                            <th>check out</th>
                                            <th>Nomor Booking</th>
                                            <th>Status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AGT001</td>
                                            <td>$100.000</td>
                                            <td>Horison</td>
                                            <td>Audy Afiary</td>
                                            <td>19/07/2018</td>
                                            <td>20/07/2018</td>
                                            <td>329100310</td>
                                            <td>Paid</td>
                                            <td>Delete</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
@stop
