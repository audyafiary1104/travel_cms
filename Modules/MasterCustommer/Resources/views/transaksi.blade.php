@extends('admin.master')
@section('content')
<div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Master Transaksi Hotels</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Agent Code</th>
                                            <th>Pajak</th>
                                            <th>Nama hotel</th>
                                            <th>Nama Guest</th>
                                            <th>check in </th>
                                            <th>check out</th>
                                            <th>Nomor Booking</th>
                                            <th>Status</th>
                                            <th>total</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transaksi as $t)
                                        <tr>
                                            <td>{{$t->agent_code}}</td>
                                            <td>{{$t->jumlah_dibayar}}</td>
                                            <td>Audy Afiary</td>
                                            <td>{{$t->title}} {{$t->firstname}} {{$t->last_name}}</td>
                                            <td>19/07/2018</td>
                                            <td>20/07/2018</td>
                                            <td>329100310</td>
                                            <td>Paid</td>
                                            <td>Delete</td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
@stop
