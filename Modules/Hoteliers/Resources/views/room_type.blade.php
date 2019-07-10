@extends('sales.master')
@section('content')
<div class="profile-overview row">
                        <div class="profile col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Room Type</h4> <table class="product-view table table-bordered">
                                        <tr>
                                            <th>Room Image</th>
                                            <th>Room Info</th>
                                            <th>action</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="clearfix">
                                                    <img class="product_image_preview_first" src="{{ asset('img/product/') }}" alt="Product name"
                                                    />
                                            </td>
                                            <td>
                                                <p class="card-title"><strong>Room Name : </strong></p>
                                                <p class="card-text"><strong> Type Room : </strong></p>
                                                <p class="card-text"><strong> Harga Room : </strong></p>
                                            </td>
                                            <td>
                                                edit 
                                            delete
                                            </td>
                                        </tr>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@stop