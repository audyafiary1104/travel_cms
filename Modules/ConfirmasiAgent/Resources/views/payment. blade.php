@extends('admin.master')
@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Master Transaski</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Agent Code</th>
                                            <th>Guest name</th>
                                            <th>Jumlah Balance</th>    
                                            <th>Bukti pembayaran</th>                                            
                                            <th>Harga</th>      
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AGT001</td>
                                            <td>Audy Aiary</td>
                                            <td>1.000</td>
                                            <td>Afiaryadu@adsada.com</td>
                                            <td>$50</td>
                                            <td>Konfimasi</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
@stop
