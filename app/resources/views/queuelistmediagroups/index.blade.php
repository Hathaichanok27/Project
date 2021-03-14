@extends('layouts.adminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
			<div class="page-title">
				<h5><i class="fa fa-home"></i> <span class="text-semibold"> รายการคิว</span></h5>  
                <ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ route('adminroombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('adminroommediastaffs.index') }}">สำหรับเจ้าหน้าที่</a></li>
                    <li><a href="">ห้องสื่อศึกษา</a></li>
                    <li><a href="">ห้องสื่อศึกษากลุ่ม</a></li>
                    <li class="active">รายการคิว</li>
				</ul>
				<div class="heading-elements">
                    <a href="" data-toggle="modalheading" data-target="#myModalheading1" class="btn btn-lg btn-labeled btn-labeled-left bg-success heading-btn">เข้าห้อง <b><i class="fas fa-sign-in-alt"></i></b></a>
                    <a href="" data-toggle="modalheading" data-target="#myModalheading2" class="btn btn-lg btn-labeled btn-labeled-right bg-danger heading-btn">คืนห้อง <b><i class="fas fa-sign-out-alt"></i></b></a>
                    <a href="" data-toggle="modalheading" data-target="#myModalheading3" class="btn btn-lg btn-labeled btn-labeled-right bg-primary heading-btn">จัดการห้อง <b><i class="fas fa-cog"></i></b></a>
                </div>
			</div>
        </div>
        <div class="page-content">
			<div class="content-wrapper">
			    <div class="tabbable">   
                    <ul class="nav nav-tabs nav-tabs-highlight" style="margin-bottom: 0px;">
                        <li class="active"><a href="#label-tab1" data-toggle="tab">รอคิว <span class="label label-warning position-right ng-binding">0</span> </a></li>
                        <li><a href="#label-tab2" data-toggle="tab">ใช้งานอยู่ <span class="label bg-success position-right ng-binding">0</span></a></li>
                        <li><a href="#label-tab3" data-toggle="tab">คืนห้องแล้ว <span class="label bg-blue position-right ng-binding">0</span></a></li>
                        <li><a href="#label-tab4" data-toggle="tab">ถูกยกเลิก <span class="label bg-danger position-right ng-binding">0</span></a></li>
                    </ul>
                    <div class="tab-model">
                        <!-- Modal01 -->
                        
                    </div>
                    <div class="tab-content">
                        <!-- Tab1 -->
				    	<div class="tab-pane active" id="label-tab1" style="padding:0px;">
                            <div class="panel panel-flat">
                                <div class="datatable-header" style="padding:12px;">
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
                                        @foreach($confirmmediagroups as $confirmmediagroup)
                                            <tr>
                                                <td style="text-align:center">{{ ++$i }}</td>
                                                <td><a href="#myModal1_{{ $i }}" data-toggle="modal">{{ $confirmmediagroup->username }}</td>
                                                <td>{{ $confirmmediagroup->user_fullname }}</td>
                                                <td>
                                                <?php 
                                                    $origin = date_create($confirmmediagroup->created_at->format('H:i'));
                                                    $target = date_create('now');
                                                    $interval = date_diff($origin, $target);
                                                    echo $interval->format('%H.%i นาทีที่แล้ว');
                                                    // echo $target->format('H:i');
                                                ?>
                                                <!-- <BR>{{ $confirmmediagroup->created_at->format('d-m-Y H:i') }}  -->
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $i }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                <li><a href="" data-toggle="modal" data-target="#myModal2_{{ $i }}"><i class="fas fa-comment-dots"></i> ส่งข้อความแจ้งเตือน</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="" data-toggle="modal" data-target="#myModal3_{{ $i }}" style="color:#26A65B;"><i class="fas fa-sign-in-alt"></i> เข้าห้อง</a></li>                                                                
                                                                <li class="divider"></li>
                                                                <li><a href="" data-toggle="modal" data-target="#myModal6_{{ $i }}" style="color:#e74c3c;"><i class="fas fa-times"></i> ยกเลิกการจอง</a></li>                                                                
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Tab2 -->
				    	<div class="tab-pane" id="label-tab2" style="padding:0px;">
                            <div class="panel panel-flat">
                                <div class="datatable-header" style="padding:12px;">
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
                                            <th>เริ่มใช้งานเมื่อ</th>
                                            <th>หมดเวลาในอีก</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($confirmmediagroups as $confirmmediagroup)
                                            <tr>
                                                <td style="text-align:center">{{ ++$i }}</td>
                                                <td><a href="#myModal1_{{ $i }}" data-toggle="modal">{{ $confirmmediagroup->username }}</td>
                                                <td>{{ $confirmmediagroup->user_fullname }}</td>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $i }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Tab3 -->
				    	<div class="tab-pane" id="label-tab3" style="padding:0px;">
                            <div class="panel panel-flat">
                                <div class="datatable-header" style="padding:12px;">
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
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($confirmmediagroups as $confirmmediagroup)
                                            <tr>
                                                <td style="text-align:center">{{ ++$i }}</td>
                                                <td><a href="#myModal1_{{ $i }}" data-toggle="modal">{{ $confirmmediagroup->username }}</td>
                                                <td>{{ $confirmmediagroup->user_fullname }}</td>
                                                <td>{{ $confirmmediagroup->created_at->format('d-m-Y H:i') }}</td>
                                                <td></td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $i }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Tab4 -->
				    	<div class="tab-pane" id="label-tab4" style="padding:0px;">
                            <div class="panel panel-flat">
                                <div class="datatable-header" style="padding:12px;">
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
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($confirmmediagroups as $confirmmediagroup)
                                            <tr>
                                                <td style="text-align:center">{{ ++$i }}</td>
                                                <td><a href="#myModal1_{{ $i }}" data-toggle="modal">{{ $confirmmediagroup->username }}</td>
                                                <td>{{ $confirmmediagroup->user_fullname }}</td>
                                                <td>{{ $confirmmediagroup->created_at->format('d-m-Y H:i') }}</td>
                                                <td></td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $i }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                        
                    </div> 
                    <div class="tab-content-model">
                        <?php $o=1?>
                            @foreach($confirmmediagroups as $confirmmediagroup)
                                <!-- Modal1 -->
                                <div class="modal fade" id="myModal1_<?php echo $o?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body" style="padding:0px;">
                                                <div class="panel panel-white" style="margin-bottom:0px;">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title">รายละเอียดผู้ใช้</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="form-wizard-title text-semibold">
                                                        <span class="form-wizard-count"><i class="fa fa-info"></i></span>
                                                        ข้อมูลผู้จองห้อง
                                                        <small class="display-block">ข้อมูลการจอง</small>
                                                    </h6>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-body">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img src="{{ asset('images/unknown_user.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediagroup->user_fullname }}</h5>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediagroup->username }}</b></p>
                                                                        <!-- <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $confirmmediagroup->created_at->format('H:i') }}</p> -->
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%i นาทีที่แล้ว') }}</p>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediagroup->id }}</strong></p>
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                                </div>
                                            </div>                       
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal2 -->
                                <div class="modal fade" id="myModal2_<?php echo $o?>" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body" style="padding:0px;">
                                                <div class="panel panel-primary" style="margin-bottom:0px;">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title"><i class="fas fa-envelope"></i> ส่งข้อความแจ้งเตือนถึงผู้ใช้</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <img src="{{ asset('images/unknown_user.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                        </div>
                                                        <div class="media-body">
                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediagroup->user_fullname }}</h5>
                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediagroup->username }}</b></p>
                                                            <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%i นาทีที่แล้ว') }}</p>
                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediagroup->id }}</strong></p>  
                                                        </div>  
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="content-group">
                                                        <label for="message-text" class="content-group">ข้อความที่ต้องการส่ง:</label>
                                                        <textarea rows="4" cols="4" class="form-control" id="message-text" placeholder="การจองห้องจะได้รับบริการในเวลา ... โปรดติดต่อเจ้าหน้าที่ชั้น 6 ค่ะ"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link" data-dismiss="modal">ปิด</button>
                                                    <button type="submit" class="btn btn-primary" data-dismiss="modal" ng-click="doSendMsg(bookInfo.book.book_id)">ส่งข้อความ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal3 -->
                                <div class="modal fade" id="myModal3_<?php echo $o?>" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body" style="padding:0px;">
                                                <div class="panel panel-white" style="margin-bottom:0px;">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title" id="myModalLabel">การดำเนินการ</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="form-wizard-title text-semibold">
                                                        <span class="form-wizard-count">1</span>
                                                        ข้อมูลผู้จองห้อง
                                                        <small class="display-block">ข้อมูลการจอง</small>
                                                    </h6>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-body">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img src="{{ asset('images/unknown_user.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediagroup->user_fullname }}</h5>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediagroup->username }}</b></p>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%i นาทีที่แล้ว') }}</p>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediagroup->id }}</strong></p>
                                                                    </div>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal" disabled="">ย้อนกลับ</button>
                                                    <button type="button" class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#myModal4_<?php echo $o?>">ถัดไป</button>
                                                </div>
                                            </div>                       
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal4 --><!-- TAB CONTENT Model3 -->
                                <div class="modal" id="myModal4_<?php echo $o?>" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body" style="padding:0px;">
                                                <div class="panel panel-white" style="margin-bottom:0px;">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title" id="myModalLabel">การดำเนินการ</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="form-wizard-title text-semibold">
                                                        <span class="form-wizard-count">2</span>
                                                        เลือกห้องที่จะให้บริการ
                                                        <small class="display-block">เลือกห้องที่มีสถานะ "ว่าง" เพื่อให้บริการแก่ผู้ใช้</small>
                                                    </h6>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-body">
                                                                <div class="media">
                                                                    <!-- <div class="media-left">
                                                                        <img src="{{ asset('images/unknown_user.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediagroup->user_fullname }}</h5>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediagroup->username }}</b></p>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%i นาทีที่แล้ว') }}</p>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediagroup->id }}</strong></p>
                                                                    </div>  
                                                                    <hr> -->
                                                                    <input type="text" id="myText" name="input" value="">
                                                                    <div class="selectroom">
                                                                        <!-- STV-01 -->
                                                                        <?php for($s=1;$s<=9;$s++){?>
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item" id="div_media<?php echo $s?>" onclick="myFunction(<?php echo $s?>)">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-0<?php echo $s?></h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                            <?php }?>
                                                                        <!-- STV-02 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-02</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- STV-03 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-03</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- STV-04 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-04</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- STV-05 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-05</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- STV-06 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-06</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- STV-07 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-07</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- STV-08 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-08</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- STV-09 -->
                                                                        <div class="col-md-4">
                                                                            <div class="panel panel-body room-item">
                                                                                <div class="media">
                                                                                    <div class="media-body">
                                                                                        <div class="media-right">
                                                                                            <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                                                                                    'label-success':room.room_status == 1,
                                                                                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                                                                                        </div>
                                                                                        <h6 class="media-heading">STV-09</h6>
                                                                                        <span class="text-muted countdown" data-endtime="2020-12-29 17:29:21">00 : 00 : 00</span>
                                                                                        <ul class="icons-list bottom-right-menu">
                                                                                            <li class="dropdown">
                                                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                                                                                <ul class="dropdown-menu dropdown-menu-right border-grey dropdown-menu-xs">
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#8e44ad;" ng-show="room.room_status==0" class="ng-hide"><i class="fas fa-random"></i> คืนสถานะ</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#2980b9;" ng-show="room.room_status==2" class="ng-hide"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                                                    <li><a href="" onclick="myFunction()" style="color:#D91E18;" ng-show="room.room_status==1 || room.room_status==2"><i class="fas fa-ban"></i> งดใช้งาน</a></li>
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal" data-target="#myModal4_{{ $i }}">ย้อนกลับ</button>
                                                    <button type="button" class="btn btn-info" data-dismiss="modal" data-target="#myModal5_{{ $i }}">ถัดไป</button>
                                                </div>
                                            </div>                       
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal5 --><!-- TAB CONTENT Model4 -->
                                <div class="modal" id="myModal5_<?php echo $o?>" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body" style="padding:0px;">
                                                <div class="panel panel-white" style="margin-bottom:0px;">
                                                    <div class="panel-heading">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h5 class="modal-title" id="myModalLabel">การดำเนินการ</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-body">
                                                    <h6 class="form-wizard-title text-semibold">
                                                        <span class="form-wizard-count">3</span>
                                                        ยืนยันการทำรายการ
                                                        <small class="display-block">ตรวจสอบความถูกต้องและยืนยันการทำรายการ</small>
                                                    </h6>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-body">
                                                                <div class="media">
                                                                    <div class="media-left">
                                                                        <img src="{{ asset('images/unknown_user.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediagroup->user_fullname }}</h5>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediagroup->username }}</b></p>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%i นาทีที่แล้ว') }}</p>
                                                                        <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediagroup->id }}</strong></p>
                                                                    </div>  
                                                                    
                

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">ย้อนกลับ</button>
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">ยืนยัน</button>
                                                </div>
                                            </div>                       
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal6 -->
                                <div class="modal fade" id="myModal6_<?php echo $o?>" role="dialog">
                                    <div class="sweet-alert showSweetAlert visible" data-custom-class="" data-has-cancel-button="true" data-has-confirm-button="true" data-allow-outside-click="false" data-has-done-function="true" data-animation="pop" data-timer="null" style="display: block; margin-top: -145px;">
                                        <div class="sa-icon sa-error" style="display: none;">
                                            <span class="sa-x-mark">
                                                <span class="sa-line sa-left"></span>
                                                <span class="sa-line sa-right"></span>
                                            </span>
                                        </div>
                                        <div class="sa-icon sa-warning pulseWarning" style="display: block;">
                                            <span class="sa-body pulseWarningIns"></span>
                                            <span class="sa-dot pulseWarningIns"></span>
                                        </div>
                                        <div class="sa-icon sa-custom" style="display: none;"></div>
                                        <h2>Confirmation</h2>
                                        <p>ยกเลิกการจองของ {{ $confirmmediagroup->user_fullname }} ?</p>
                                        <div class="sa-button-container">
                                            <!-- <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                            <button type="button" class="confirm" data-dismiss="modal">ใช่, ยกเลิกการจอง</button> -->
                                            <button type="button" onclick="document.getElementById('$id').style.display='none'" class="cancelbtn">ไม่ใช่</button>
                                            <button type="button" onclick="document.getElementById('$id').style.display='none'" class="deletebtn">ใช่, ยกเลิกการจอง</button>
                                            <!-- <button type="button" onclick="myFunction({{ $confirmmediagroup->id }})">ใช่, ยกเลิกการจอง</button> -->
                                            <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">ใช่, ยกเลิกการจอง</button>-->
                                        </div>
                                    </div>
                                </div>
                            <?php $o++;?>
                        @endforeach
                    </div>
                </div>  
            </div>
        </div> 
    </div> 
@endsection 

<script>
function myFunction(input) {
    document.getElementById("myText").value = input;
    document.getElementById("div_media"+input).style.backgroundColor = "#00bcd46e";
  <?php for($s=1;$s<=9;$s++){?>
  if(input != <?php echo $s?>){ 
    document.getElementById("div_media<?php echo $s?>").style.backgroundColor = "transparent";
  }
  <?php }?>
  //div_media
  //alert(input);
}
// Get the modal
var modal = document.getElementById('$id');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!-- <script type="text/javascript">
function myFunction(id) {
    alert(id)
        $.ajax({type: "GET",url: '/queuelistmediagroups/'+id,
	    success: function(response){
            if(response == 1){
                document.getElementById("img"+Users_Quarter_Id+'_'+Users_Sub_Quarter_Id).innerHTML = '<img src="/theme/icon/check(24).png">';
            }
	    }
    });
}
</script> -->
<!-- <script type="text/javascript">
    function deleteConfirmation(myModal6_<?php echo $o?>) {
        swal({
            title: "Delete?",
            text: "ยกเลิกการจองของ {{ $confirmmediagroup->user_fullname }} ?",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/users')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Done!", results.message, "success");
                        } else {
                            swal("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script> -->