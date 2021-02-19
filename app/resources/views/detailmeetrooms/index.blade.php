@extends('layouts.userlayout')

@section('content')
<br>
	<div class="panel panel-white" style="margin-bottom:0px;">
        <div class="panel-heading">
            <h6 class="panel-title">รายละเอียดผู้ใช้</h6>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-dismiss="modal"></a></li>
                </ul>
            </div>
            <a class="heading-elements-toggle"></a>
        </div>
        <div class="panel-body">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count"><i class="fa fa-info"></i></span>
                    ข้อมูลผู้จองห้อง<small class="display-block">ข้อมูลการจองและสื่อที่จะรับชม</small>
            </h6>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-body">
                        <div class="media">
                        	<div class="media-left">
                              	<a href="javascript:;">
                                	<img src="{{ asset('images/unknown_user.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">
                              	</a>
                            </div>
                            <div class="media-body">
								<h5 class="media-heading text-bold ng-binding" style="color:#D35400">นัฐวัฒน์  อิ่มเทศ</h5>
								<p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b class="ng-binding">60160039</b></p>
								<p class="text-semibold" style="margin-bottom:2px;">ชั้น : <strong style="color:#F62459" class="ng-binding"> 3 </strong></p>
								<p class="text-semibold" style="margin-bottom:2px;">ห้อง : <strong style="color:#F62459" class="ng-binding"> 1 </strong></p>
								<p class="text-semibold" style="margin-bottom:2px;">เวลาเริ่มต้น : <strong style="color:#F62459" class="ng-binding">09.00 am.</strong></p>
								<p class="text-semibold" style="margin-bottom:2px;">เวลาสิ้นสุด  : <strong style="color:#F62459" class="ng-binding">10.00 am.</strong></p>
								<p class="text-semibold" style="margin-bottom:2px;">ระยะเวลา : <strong style="color:#F62459" class="ng-binding">1</strong></p>
							</div>
                        </div>
                    </div>
                </div>

                <div class="actions">
					<a href="{{ route('mybookings.index') }}" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">ปิด</a>
                </div>
           	</div>
        </div>
    </div>
@endsection 