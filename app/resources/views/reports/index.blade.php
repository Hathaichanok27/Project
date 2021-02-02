@extends('layouts.adminlayout')

@section('content')
	<div class="page-container">
		<div class="container" style="padding-top:50px;">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<form action="" method="post" accept-charset="utf-8">
						<div class="col-md-11">
							<select name="month" class="form-control">
								<option value="01" selected="">มกราคม</option>
								<option value="02">กุมภาพันธ์</option>
								<option value="03">มีนาคม</option>
								<option value="04">เมษายน</option>
								<option value="05">พฤษภาคม</option>
								<option value="06">มิถุนายน</option>
								<option value="07">กรกฏาคม</option>
								<option value="08">สิงหาคม</option>
								<option value="09">กันยายน</option>
								<option value="10">ตุลาคม</option>
								<option value="11">พฤศจิกายน</option>
								<option value="12">ธันวาคม</option>
							</select>
						</div>
						
						<div class="col-md-1">
							<button type="submit" class="btn btn-danger">OK</button>
						</div>
     	 			</form>
      				<br>
					<h1>ห้องสื่อศึกษากลุ่ม</h1>
					<table class="table table-hover table-striped table-bordered">
						<thead>
							<tr class="bg-primary">
							<th>วันที่</th>
							<th>จำนวนการใช้</th>
							</tr>
						</thead>
						<tbody>

						</tbody>
						<tfoot>
							<tr class="bg-danger">
								<td><h4>รวมการใช้งานทั้งหมด</h4></td>
								<td><h4>0</h4></td>
							</tr>
						</tfoot>
					</table>
<br>
<br>
<hr>
<br>
<br>
				<h1>ห้องสื่อศึกษาเดี่ยว</h1>
				<table class="table table-hover table-striped table-bordered">
					<thead>
						<tr class="bg-primary">

							<th>วันที่</th>
							<th>จำนวนการใช้</th>
						</tr>
					</thead>
					<tbody>
					
					</tbody>
					<tfoot>
						<tr class="bg-danger">
							<td><h4>รวมการใช้งานทั้งหมด</h4></td>
							<td><h4>0</h4></td>
						</tr>
					</tfoot>
				</table>
    		</div>
  		</div>
	</div>
@endsection 