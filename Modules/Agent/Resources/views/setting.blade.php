@extends('agent.master')
@section('content')

<div id="column-2">
	<h1>Edit Detail Pengguna Anda</h1>
	<form id="form-edit-user" action="/useradmin" method="post">
		<div class="box-section">
			<div class="form-two-cols">
				<div class="form-left"><label>Nama Pengguna &nbsp;:</label></div>
				<div class="form-right">travelmaker1</div>
			</div>
			<div class="form-two-cols">
				<div class="form-left"><label>Tipe Akun &nbsp;:</label></div>
				<div class="form-right">Operator</div>
			</div>
			<div class="form-two-cols">
				<div class="form-left"><label for="firstname"><span class="mandatory">*</span> Nama Depan &nbsp;:</label></div>
				<div class="form-right">
					<div style="float:left;width:56px">
<select id="persontitle" name="persontitle" class="select" style="width:54px">
<option value="Mr." selected="selected">Mr.</option>
<option value="Mrs.">Mrs.</option>
<option value="Miss">Miss</option>
</select>
					</div>
					<div style="float:left;width:208px;overflow:hidden">
<input type="text" id="firstname" name="firstname" value="ahmed" maxlength="100" class="text" style="width:204px">
					</div>
				</div>
			</div>
			<div class="form-two-cols">
				<div class="form-left"><label for="lastname"><span class="mandatory">*</span> Nama Belakang &nbsp;:</label></div>
				<div class="form-right">
<input type="text" id="lastname" name="lastname" value="abdallah" maxlength="100" class="text" style="width:260px">
				</div>
			</div>
			<div class="form-two-cols">
				<div class="form-left"><label for="position">Posisi &nbsp;:</label></div>
				<div class="form-right">
<input type="text" id="position" name="position" value="admin" maxlength="100" class="text" style="width:260px">
				</div>
			</div>
			<div class="form-two-cols">
				<div class="form-left"><label for="email"><span class="mandatory">*</span> Alamat Email &nbsp;:</label></div>
				<div class="form-right">
<input type="text" id="email" name="email" value="Reservations@travelmakerhousing.com" maxlength="100" class="text" style="width:260px">
<span class="verified">Diverivikasi</span>				</div>
			</div>
			<div>
				<div class="form-left"></div>
				<div class="form-right" style="margin-top:4px">
<input type="submit" value="Terapkan Perubahan" class="button-ok">
				</div>
			</div>
			<div class="clear-l"></div>
		</div>
<input type="hidden" id="task" name="task" value="save-edit">
	</form>
</div>
<div class="clear-l"></div>
			</div>
		</div>
@stop