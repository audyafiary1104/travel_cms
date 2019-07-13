@extends('agent.booking')
@section('content')
<section id="body" class="">
    <div class="row page-title">
        <div class="container clear-padding text-center">
            <h3>Add Balance</h3>

        </div>
    </div>
    <div class="section section-blog">
        <div class="container">
            <div class="row">
                <legend>Mr. Sosa:</legend>
            </div>
            <!-- panel preview -->
            <div class="col-sm-5">
                <h4>Add Balance:</h4>
                <div class="panel panel-default">
                    <div class="panel-body form-horizontal payment-form">

                        <form action="{{route('agent.transfer_post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="amount" class="col-sm-3 control-label">Jumlah Balance</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="amount" name="amount">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date" class="col-sm-3 control-label">Uploud Bukti Transfer</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="date" name="buti_tf">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-3 control-label">Pajak</label>
                                <div class="col-sm-9">
                                    <input type="dibayar"  class="form-control" id="pajak" name="date" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-3 control-label">Biaya Admin</label>
                                <div class="col-sm-9">
                                    <input type="dibayar" value="2000" class="form-control" id="admin" name="date" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class="col-sm-3 control-label">Yang Harus Dibayar</label>
                                <div class="col-sm-9">
                                    <input type="text" disabled class="form-control" id="dbayar" name="date" >
                                </div>
                            </div>

                    </div>
                </div>
            </div> <!-- / panel preview -->
            <div class="col-sm-7">
                <h4>Transfer To bank:</h4>
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Bank name</th>
                                    <th>Account Name</th>
                                    <th>Account No</th>
                                    <th>Routing No</th>
                                    <th>Type</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($get_bank as $get)
                                <tr>
                                    <td>{{$get->bank_name}}</td>
                                    <td>{{$get->account_name}}</td>
                                    <td>{{$get->account_no}}</td>
                                    <td>{{$get->routing_no}}</td>
                                    <td>{{$get->type}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <hr style="border:1px dashed #dddddd;">
                        <button type="submit" class="btn btn-primary btn-block">Submit all and finish</button>
                    </div>
                    <form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /blog -->
    <!-- side column -->

    <!-- /side-column -->
    </div>
    </div>
    </div>
    <!-- /Section: Blog -->
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
    $("#amount").on("keyup", function () {
        var i = $(this).val();
        var jumlah = parseInt((i * 10) / 100);
        var pjk =  parseInt( $("#pajak").attr("value",+jumlah));    
        var admin = $("#admin").val();
        var k = +jumlah + +admin + +i;
        parseInt($("#dbayar").attr("value",+k));    

    });
});
</script>
@stop