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
                    <li><a href="{{ route('selectmediagroups.index') }}">เลือกสื่อ</a></li>
                    <li class="active">สรุปข้อมูล</li>
                </ul>   
            </div>
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
						<hr style="margin:15px 0 0 0;">
						<ul class="media-list">
							<li class="media bottom-line-dashed">
								<div class="media-left">
									<a href="javascript:;" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-xs"><i class="fab fa-youtube"></i></a>
								</div>
								<div class="media-body">
									<a href="javascript:;" class="text-success">นำสื่อมาด้วยตนเอง</a>
									<span class="display-block text-muted"><span class="status-mark border-red position-left"></span> Bring your own media</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			
				<div class="col-12 col-md-6">
					<div class="panel panel-flat border-grey">
						<div class="panel-heading" style="padding-bottom:0px;">
							<h5 class="panel-title"><i class="fas fa-user-tie"></i> ข้อมูลผู้ขอจองคิวให้ห้อง</h5>
						</div>
						<hr style="margin:15px 0 0 0;">
							
						<div class="panel-body">
							<div class="form-group">
								<label class="text-semibold">บัญชีผู้ใช้:</label>
								<input type="text" class="form-control" readonly="readonly" value="60160039" data-parsley-id="4">
							</div>
							<div class="form-group">
								<label class="text-semibold">ชื่อ - นามสกุล:</label>
								<input type="text" class="form-control" readonly="readonly" value="นัฐวัฒน์  อิ่มเทศ" data-parsley-id="6">
							</div>
								<input type="hidden" name="medialist" value="B34J2UHP1yxjgH0W5k9X2o/InyLTRswAhJW8KuAZRpJVy6qdIcTvFA==">
								<legend class="text-bold"><i class="fas fa-comment-dots"></i> ข้อมูลเพื่อรับการแจ้งเตือนผ่าน E-Mail / SMS</legend>
							<div class="form-group">
								<label class="text-semibold">E-Mail Address:</label>
								<input type="text" class="form-control" value="" name="email" data-parsley-id="8">
							</div>
							<input type="hidden" name="_csrf" value="34788679ec65c84f4971d341b76fc5fd7a7cc6216820e7b54bcc533b048e06e5">
							<div class="form-group">
								<label class="text-semibold">เบอร์โทรศัพท์มือถือ:</label>
								<input type="text" class="form-control" value="092-445-6992" name="telnum" data-mask="999-999-9999" data-parsley-pattern="/^\(?([0-9]{3})\)*-([0-9]{3})*-([0-9]{4})$/" data-parsley-id="10">
							</div>
						</div>
					</div>
					<button class="btn btn-success btn-lg btn-block" id="btnconfirm"> ยืนยันการจอง <i class="fas fa-check"></i></button>
				</div>
			</div>
		</div>
	</div>
@endsection