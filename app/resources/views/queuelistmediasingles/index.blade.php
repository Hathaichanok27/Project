@extends('layouts.adminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
			<div class="page-title">
				<h4><i class="fa fa-home"></i> <span class="text-semibold"> รายการคิว</span></h4>
				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ route('adminroombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('adminroommediastaffs.index') }}">สำหรับเจ้าหน้าที่</a></li>
                    <li><a href="">ห้องสื่อศึกษาเดี่ยว</a></li>
                    <li class="active">รายการคิว</li>
				</ul>
			</div>
        </div>
    </div>
@endsection 