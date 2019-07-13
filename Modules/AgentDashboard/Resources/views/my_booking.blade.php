@extends('agent_dashboard.master')

@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">My Booking</strong>
                </div>
                <div class="card-header">
                
                                                        </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Hotel</th>
                                <th>Type Room</th>
                                <th>Check in</th>
                                <th>Check out</th>
                                <th>Status</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Spring Lake Room cozy</td>
                                <td>Shyahid grand city</td>
                                <td>2%</td>
                                <td>2%</td>
                                <td>2%</td>

                                <td>
                                    </a>
                                    <a href="/admin" class="icon-block">
                                        <i class="fa  fa-pencil"></i>
                                        Cetak Vocher
                                    </a>
                                   
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@stop