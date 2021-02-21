@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-id-card"></i> สรุปข้อมูลการจองและข้อมูลผู้จอง</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('roommedias.index') }}">ชั้น 6</a></li>
                    <li><a href="{{ route('mediagroups.index') }}">ห้องสื่อศึกษากลุ่ม</a></li>
                    <li class="active">สรุปข้อมูล</li>
                </ul>   
            </div>
			<form action="{{ route('confirmmediagroups.store') }}" method="POST" >
            @csrf
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="panel panel-primary bg-danger">
							<div class="panel-body">
								<h1 class="text-center"><i class="fas fa-users"></i> ห้องสื่อศึกษากลุ่ม</h1>
								<h2 class="text-center">ชั้น 6</h2>
							</div>
						</div>

						<div class="panel panel-flat border-top-primary border-bottom-primary bg-primary">
							<div class="panel-heading" style="padding-top:5px; padding-bottom:5px;">
								<h6 class="panel-title text-center"> จำนวนคิวที่ต้องรอ</h6>
							</div>
							<div class="panel-body text-center">
								<h3 style="margin:2px;">1</h3>
							</div>
						</div>

						<div class="panel panel-flat border-top-primary border-bottom-primary bg-primary">
							<div class="panel-heading" style="padding-top:5px; padding-bottom:5px;">
								<h6 class="panel-title text-center"> เวลาที่ต้องรอโดยประมาณ</h6>
							</div>
							<div class="panel-body text-center">
								<h3 style="margin:2px;">ไม่สามารถดำเนินการได้</h3>
							</div>
						</div>
							
						<div class="panel panel-flat border-grey">
							<div class="panel-heading" style="padding-bottom:0px;">
								<h5 class="panel-title"><i class="fas fa-info-circle"></i> สื่อที่เลือกรับชม</h5>
							</div>
							<hr style="margin:15px 1 0 0;">
							<div class="form-group">
								<h6 class="panel-title text-center"><i class="fas fa-tv"></i> Netflix</h6>		
							</div>
						</div>
					</div>
					
					<div class="col-12 col-md-6">
						<div class="panel panel-flat border-grey">
							<div class="panel-heading" style="padding-bottom:0px;">
								<h5 class="panel-title"><i class="fas fa-user-tie"></i> ข้อมูลผู้ขอจองคิวให้ห้อง</h5>
							</div>
							<hr style="margin:15px 0 0 0;">
							<div class="panel-body">
								<input type="hidden" name="room_type" value="ห้องสื่อศึกษากลุ่ม">
								<input type="hidden" name="room_floor" value="ชั้น 6">
								<input type="hidden" name="book_status" value="รอการอนุมัติ">
								<!-- <div class="form-group">
									<strong>ห้อง:</strong>
									<select class="form-control" id="room_name" name="room_name">
										<option value="STV-01">STV-01</option>
										<option value="STV-02">STV-02</option>
										<option value="STV-03">STV-03</option>
									</select>  
								</div> -->
								<div class="form-group">
									<label class="text-semibold">บัญชีผู้ใช้:</label>
									<input type="text" class="form-control" readonly="readonly" name="username" value="{{ Auth::user()->username }}">
								</div>
								<div class="form-group">
									<label class="text-semibold">ชื่อ - นามสกุล:</label>
									<input type="text" class="form-control" readonly="readonly" name="user_fullname" value="{{ Auth::user()->user_fullname }}">
								</div>
								<legend class="text-bold"><i class="fas fa-comment-dots"></i> ข้อมูลเพื่อรับการแจ้งเตือนผ่าน E-Mail / SMS</legend>
								<div class="form-group">
									<label class="text-semibold">E-Mail Address:</label>
									<input type="email" class="form-control" name="user_email">
								</div>
								<div class="form-group">
									<label class="text-semibold">เบอร์โทรศัพท์มือถือ:</label>
									<input type="text" class="form-control" name="user_telnum">
								</div>	
							</div>
								
							<div class="col-xs-12 col-sm-12 col-md-12 text-center">
								<br>
								<button type="submit" class="btn btn-success btn-lg btn-block">ยืนยัน <i class="fas fa-check"></i></button>
							</div>
						</div>
					</div>
				</div>
			</form>	
		</div>
	</div>
@endsection