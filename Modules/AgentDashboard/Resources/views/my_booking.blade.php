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
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $key => $value)
                            <tr>
                                <td>{{$product_hoteliers[$key]->nama_hotels}}</td>
                                <td>{{$type_room[$key]->type_room}}</td>
                                <td>{{$value->check_in}}</td>
                                <td>{{$value->check_out}}</td>
                                <td>{{$value->status}}</td>
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