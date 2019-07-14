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
                                            <th>Status</th>
                                            <th>total</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @foreach($transaksi as $key => $value)
                                            <td>{{$c[$key]->agent_code}}</td>
                                            <td>{{$value->tax}}</td>
                                            <td>{{$b[$key]->nama_hotels}}</td>
                                            <td>{{$value->title}} {{$value->first_name}} {{$value->last_name}}</td>
                                            <td>{{$value->check_in}}</td>
                                            <td>{{$value->check_out}}</td>
                                            <td>{{$value->status}}</td>

                                            <td>{{$value->price}}</td>
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
