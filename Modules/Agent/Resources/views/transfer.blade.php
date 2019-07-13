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


                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Jumlah Balance</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Uploud Bukti Transfer</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="date" name="date">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Yang Harus Dibayar</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="date" name="date">
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
                                <tr>
                                    <td>Bank name</td>
                                    <td>Account Name</td>
                                    <td>Account No</td>
                                    <td>Routing No</td>
                                    <td>Type</td>

                                </tr></tbody> <!-- preview content goes here-->
                        </table>
                    </div>
                </div>

            <div class="row">
                <div class="col-xs-12">
                    <hr style="border:1px dashed #dddddd;">
                    <button type="button" class="btn btn-primary btn-block">Submit all and finish</button>
                </div>
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
@stop
