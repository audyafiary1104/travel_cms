@extends('sales.master')
@section('content')
<form action="{{route('sales.add_hotel.post')}}" method="post">
@csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nama Hotel</label>
            <input type="text" name="nama_hotel" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Alamat Hotel</label>
            <input type="text" name="alamat_hotel" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Fax</label>
        <input type="text" name="fax" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Email Resevation</label>
        <input type="text" name="email_reservation" class="form-control" id="inputAddress2">
    </div>
    <div class="form-group">
        <label for="inputAddress2">country</label>
        <input type="text" name="country" class="form-control" id="inputAddress2">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputCity">Jumlah Unit</label>
            <input type="number" name="jumlah_unit" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Status Hotels</label>
            <select id="inputState" name="status"  class="form-control">
                <option value="non_refundable">Non Refundalble</option>
                <option value="cancellation">cancellation</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Check in</label>
            <input type="time" class="form-control" name="check_in">
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Check out</label>
            <input type="time" class="form-control"  name="check_out">
        </div>
    </div><br /><br />
    <div class="form-group">
        <label for="desc">Photos :</label>
        <div id="image-view" class="image_preview">
            <div class="add" onclick="document.getElementById('uploadFile').click();"><i class="fa fa-plus fa-5x"
                    aria-hidden="true"></i></div>
        </div>
        <br>
        <input type="file" id="uploadFile" style="display:none;" multiple accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
<script>
    $(function () {
        var photo = [];
        $("#uploadFile").change(function () {
            var total_file = document.getElementById("uploadFile").files.length;
            for (var i = 0; i < total_file; i++) {
                $('.add').before("<img src='" + URL.createObjectURL(event.target.files[i]) + "'width='200' height='100'>");
                photo.push(document.getElementById("uploadFile").files[i])
            }
        });
    $("form").submit(function (e) {
            e.preventDefault();
            var formData = new FormData($(this)[0])
            for (var i = 0; i < photo.length; i++) {
                formData.append('uploadFile[]', photo[i])
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            $.ajax({
                data: formData,
                async: false,
                cache: false,
                processData: false,
                contentType: false,
                url: "{{ route('sales.add_hotel.post') }}",
                type: "POST",
                dataType: 'json',
                success: function (result) {
                    if (result.success) {
                         window.location.replace("/hoteliers/my_hotels");
                    }
                }
            })
        });
    });
 </script>
@stop