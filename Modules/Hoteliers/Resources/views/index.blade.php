@extends('sales.master')

@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">My Hotel</strong>
                </div>
                <div class="card-header">
add                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Hotel</th>
                                <th>Alamat Hotel</th>
                                <th>Jumlah Unit Disewakan</th>
                                <th>Foto Hotel</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Horison</td>
                                <td>Jakarta</td>
                                <td>10</td>
                                <td>foto</td>
                                <td><a href="{{route('sales.room')}}" class="icon-block">
                                        <i class="fa  fa-eye"></i>
                                    </a>
                                    <a href="/admin" class="icon-block">
                                        <i class="fa  fa-pencil"></i>
                                    </a>
                                    <a href="/admin" class="icon-block">
                                        <i class="fa  fa-trash"></i>
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