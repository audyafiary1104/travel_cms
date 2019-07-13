@extends('agent.index')
@section('content')
<div class="row vertical-search">

    <div class="container clear-padding">

        <div class="search-section">

            <div role="tabpanel">

                <div class="col-md-2 col-sm-2 vertical-tab">

                    <!-- BEGIN: CATEGORY TAB -->

                    <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">




                    </ul>

                    <!-- END: CATEGORY TAB -->

                </div>

                <div class="col-md-10 col-sm-10 vertical-tab-pannel">

                    <!-- BEGIN: TAB PANELS -->

                    <div class="tab-content">

                        <!-- BEGIN: FLIGHT SEARCH -->



                        <div role="tabpanel" class="tab-pane active" id="hotel">

                            <div class="col-md-8">

                                <form action="{{route('list_hotels.agent')}}" method="post">
                                    @csrf
                                    <div class="col-md-12 product-search-title">Book Hotel Rooms</div>

                                    <div class="col-md-12 col-sm-12 search-col-padding">

                                        <label>I Want To Go</label>

                                        <div class="input-group">

                                        <input id="search" name="search" type="text" class="form-control" placeholder="Search" />

                                        </div>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="col-md-6 col-sm-6 search-col-padding">

                                        <label>Check - In</label>

                                        <div class="input-group">

                                            <input type="date" name="check_in" class="form-control"
                                                placeholder="DD/MM/YYYY">

                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-sm-6 search-col-padding">

                                        <label>Check - Out</label>

                                        <div class="input-group">

                                            <input type="date" name="check_out"      class="form-control"
                                                placeholder="DD/MM/YYYY">


                                        </div>

                                    </div>

                                    <div class="clearfix"></div>


                                    <div class="clearfix"></div>

                                    <div class="col-md-12 search-col-padding">

                                        <button type="submit" class="search-button btn transition-effect">Search
                                            Hotels</button>

                                    </div>

                                    <div class="clearfix"></div>

                                </form>

                            </div>

                            <div class="offer-box col-md-4">

                            </div>

                            <div class="clearfix"></div>

                        </div>



                    </div>

                </div>
<script>
 $(document).ready(function() {
    $( "#search" ).autocomplete({

        source: function(request, response) {
            $.ajax({
            url: "{{route('search.agent')}}",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.city;
               });

               response(resp);
            }
        });
    },
    minLength: 1
 });
});

</script>
                @stop
