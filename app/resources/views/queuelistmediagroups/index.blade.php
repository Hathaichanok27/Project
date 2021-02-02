@extends('layouts.adminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
			<div class="page-title">
				<h4><i class="fa fa-home"></i> <span class="text-semibold"> รายการคิว</span></h4>  
                <ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ route('adminroombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('adminroommediastaffs.index') }}">สำหรับเจ้าหน้าที่</a></li>
                    <li><a href="">ห้องสื่อศึกษา</a></li>
                    <li><a href="">ห้องสื่อศึกษากลุ่ม</a></li>
                    <li class="active">รายการคิว</li>
				</ul>
				<div class="heading-elements">
                    <a href="javascript:;" ng-click="enterRoom()" class="btn btn-lg btn-labeled btn-labeled-left bg-success heading-btn">เข้าห้อง <b><i class="icon-enter"></i></b></a>
                    <a href="javascript:;" ng-click="returnRoomById()" class="btn btn-lg btn-labeled btn-labeled-right bg-danger heading-btn">คืนห้อง <b><i class="icon-exit"></i></b></a>
                    <a href="javascript:;" ng-click="manageRoom()" class="btn btn-lg btn-labeled btn-labeled-right bg-primary heading-btn">จัดการห้อง <b><i class="icon-cog4"></i></b></a>
                </div>
			</div>
			
			<ul class="nav nav-tabs nav-tabs-highlight" style="margin-bottom: 0px;">
				<li class="active"><a href="#label-tab1" data-toggle="tab" aria-expanded="true">รอคิว <span class="label label-warning position-right ng-binding">0</span> </a></li>
				<li><a href="#label-tab2" data-toggle="tab">ใช้งานอยู่ <span class="label bg-success position-right ng-binding">0</span></a></li>
				<li><a href="#label-tab3" data-toggle="tab">คืนห้องแล้ว <span class="label bg-blue position-right ng-binding">0</span></a></li>
				<li class=""><a href="#label-tab4" data-toggle="tab" aria-expanded="false">ถูกยกเลิก <span class="label bg-danger position-right ng-binding">0</span></a></li>
			</ul>

		    <div class="panel panel-flat">
                <div class="datatable-header" style="padding:15px;">
                    <div id="qTable_filter" class="dataTables_filter">
                        <label>
                            <span>Filter:</span> 
                            <input type="search" class="ng-pristine ng-untouched ng-valid ng-empty" placeholder="Type to filter..." aria-controls="qTable" ng-model="searchFilterWaiting">
                        </label>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="bg-grey">
                        <th>คิวที่</th>
                        <th>บัญชีผู้ใช้</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>จองคิวเมื่อ</th>
                        <th>เวลาที่ต้องรอ</th>
                        <th>มาช้า</th>
                        <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ngRepeat: q in waitingQueueList | filter:searchFilterWaiting -->
                    </tbody>
                </table>
            </div>
@endsection 