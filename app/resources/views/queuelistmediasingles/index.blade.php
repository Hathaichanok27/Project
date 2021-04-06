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
        <div class="page-content">
			<div class="content-wrapper">
			    <div class="tabbable">   
                    <ul class="nav nav-tabs nav-tabs-highlight" style="margin-bottom: 0px;">
                        <li class="active"><a href="#label-tab1" data-toggle="tab">รอคิว <span class="label label-warning position-right">{{$count1}}</span> </a></li>
                        <li><a href="#label-tab2" data-toggle="tab">ใช้งานอยู่ <span class="label bg-success position-right">{{$count2}}</span></a></li>
                        <li><a href="#label-tab3" data-toggle="tab">คืนห้องแล้ว <span class="label bg-blue position-right">{{$count3}}</span></a></li>
                        <li><a href="#label-tab4" data-toggle="tab">ถูกยกเลิก <span class="label bg-danger position-right">{{$count4}}</span></a></li>
                    </ul>

                    <div class="tab-content">
                        <!-- Tab1 -->
				    	<div class="tab-pane active" id="label-tab1" style="padding:0px;">
                            <div class="panel panel-flat">
                                <div class="datatable-header" style="padding:12px;">
                                    <div id="qTable_filter" class="dataTables_filter">
                                        <label>
                                            <span>Filter:</span> 
                                            <input type="search" id="myInput1" type="text" placeholder="Type to filter...">
                                        </label>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="bg-grey">
                                            <th class="text-center">คิวที่</th>
                                            <th class="text-center">บัญชีผู้ใช้</th>
                                            <th class="text-center">ชื่อ - นามสกุล</th>
                                            <th class="text-center">จองคิวเมื่อ</th>
                                            <th class="text-center">เวลาที่ต้องรอ</th>
                                            <th class="text-center">มาช้า</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable1">
                                        <?php if($confirmmediasingles1){?>
                                            @foreach($confirmmediasingles1 as $confirmmediasingle)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $confirmmediasingle->id }}</td>
                                                    <td><a href="#myModal1_{{ $confirmmediasingle->id }}" data-toggle="modal">{{ $confirmmediasingle->username }}</td>
                                                    <td>{{ $confirmmediasingle->user_fullname }}</td>
                                                    <td class="text-center">
                                                        <?php 
                                                            $origin = date_create($confirmmediasingle->created_at->format('d-m-Y H:i'));
                                                            $target = date_create('now');
                                                            $interval = date_diff($origin, $target);
                                                            echo $interval->format('%h ชั่วโมง %i นาทีที่แล้ว');
                                                        ?>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $confirmmediasingle->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal2_{{ $confirmmediasingle->id }}"><i class="fas fa-comment-dots"></i> ส่งข้อความแจ้งเตือน</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal3_{{ $confirmmediasingle->id }}" style="color:#26A65B;"><i class="fas fa-sign-in-alt"></i> เข้าห้อง</a></li>                                                                
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal6_{{ $confirmmediasingle->id }}" style="color:#e74c3c;"><i class="fas fa-times"></i> ยกเลิกการจอง</a></li>                                                                
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        <?php }?>
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
                                            <input type="search" id="myInput2" type="text" placeholder="Type to filter...">
                                        </label>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="bg-grey">
                                            <th class="text-center">คิวที่</th>
                                            <th class="text-center">บัญชีผู้ใช้</th>
                                            <th class="text-center">ชื่อ - นามสกุล</th>
                                            <th class="text-center">เริ่มใช้งานเมื่อ</th>
                                            <th class="text-center">หมดเวลาในอีก</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable2">
                                        <?php $i = 0; ?>
                                        <?php if($confirmmediasingles2){?>
                                            @foreach($confirmmediasingles2 as $confirmmediasingle)
                                                <tr>  
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $confirmmediasingle->id }}</td>
                                                    <td><a href="#myModal7_{{ $confirmmediasingle->id }}" data-toggle="modal">{{ $confirmmediasingle->username }}</td>
                                                    <td>{{ $confirmmediasingle->user_fullname }}</td>
                                                    <td class="text-center">{{ formatDateThat($confirmmediasingle->book_starttime) }}</td>
                                                    <td class="text-center">{{ formatDateThat($confirmmediasingle->book_endtime) }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal7_{{ $confirmmediasingle->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal8_{{ $confirmmediasingle->id }}" style="color:#0275d8;"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        <?php }?>
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
                                            <input type="search" id="myInput3" type="text" placeholder="Type to filter...">
                                        </label>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="bg-grey">
                                            <th class="text-center">คิวที่</th>
                                            <th class="text-center">บัญชีผู้ใช้</th>
                                            <th class="text-center">ชื่อ - นามสกุล</th>
                                            <th class="text-center">จองคิวเมื่อ</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable3">
                                        <?php $i = 0; ?>
                                        <?php if($confirmmediasingles3){?>
                                            @foreach($confirmmediasingles3 as $confirmmediasingle)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $confirmmediasingle->id }}</td>
                                                    <td><a href="#myModal9_{{ $confirmmediasingle->id }}" data-toggle="modal">{{ $confirmmediasingle->username }}</td>
                                                    <td>{{ $confirmmediasingle->user_fullname }}</td>
                                                    <td class="text-center">{{ formatDateThat($confirmmediasingle->created_at) }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal9_{{ $confirmmediasingle->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        <?php }?>
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
                                            <input type="search" id="myInput4" type="text" placeholder="Type to filter...">
                                        </label>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="bg-grey">
                                            <th class="text-center">คิวที่</th>
                                            <th class="text-center">บัญชีผู้ใช้</th>
                                            <th class="text-center">ชื่อ - นามสกุล</th>
                                            <th class="text-center">จองคิวเมื่อ</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable4">
                                        <?php $i = 0; ?>
                                        <?php if($confirmmediasingles4){?>
                                            @foreach($confirmmediasingles4 as $confirmmediasingle)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $confirmmediasingle->id }}</td>
                                                    <td><a href="#myModal10_{{ $confirmmediasingle->id }}" data-toggle="modal">{{ $confirmmediasingle->username }}</td>
                                                    <td>{{ $confirmmediasingle->user_fullname }}</td>
                                                    <td class="text-center">{{ formatDateThat($confirmmediasingle->created_at) }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal10_{{ $confirmmediasingle->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 

                    <div class="tab-content-modal">
                        <?php $o=1?>
                            <?php if($confirmmediasingles1){?>
                                @foreach($confirmmediasingles1 as $confirmmediasingle)
                                    <?php 
                                        $origin = date_create($confirmmediasingle->created_at->format('d-m-Y H:i'));
                                        $target = date_create('now');
                                        $interval = date_diff($origin, $target);
                                    ?>
                                    <!-- Tab1 Modal1 -->
                                    <div class="modal" id="myModal1_{{ $confirmmediasingle->id }}" role="dialog">
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
                                                            <span class="form-wizard-count"><b>i</b></span>
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediasingle->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediasingle->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%h ชั่วโมง %i นาทีที่แล้ว') }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediasingle->id }}</strong></p>
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
                                    <div class="modal" id="myModal2_{{ $confirmmediasingle->id }}" role="dialog">
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
                                                                <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediasingle->user_fullname }}</h5>
                                                                <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediasingle->username }}</b></p>
                                                                <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%h ชั่วโมง %i นาทีที่แล้ว') }}</p>
                                                                <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediasingle->id }}</strong></p>  
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel-body">
                                                                <div class="content-group">
                                                                    <label for="message-text" class="content-group">ข้อความที่ต้องการส่ง:</label>
                                                                    <textarea rows="4" cols="4" class="form-control" id="message-text" placeholder="การจองห้องจะได้รับบริการในเวลา ... โปรดติดต่อเจ้าหน้าที่ชั้น 6 ค่ะ"></textarea>
                                                                </div>
                                                            </div>
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
                                    <div class="modal" id="myModal3_{{ $confirmmediasingle->id }}" role="dialog" aria-labelledby="myModalLabel">
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediasingle->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediasingle->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%h ชั่วโมง %i นาทีที่แล้ว') }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediasingle->id }}</strong></p>
                                                                        </div>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" disabled="">ย้อนกลับ</button>
                                                        <button type="button" class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#myModal4_{{ $confirmmediasingle->id }}">ถัดไป</button>
                                                    </div>
                                                </div>                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal4 --><!-- TAB CONTENT Model3 -->
                                    <div class="modal" id="myModal4_{{ $confirmmediasingle->id }}" role="dialog" aria-labelledby="myModalLabel">
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
                                                                        <input type="text" id="myText1_{{ $confirmmediasingle->id }}" name="input" value="" hidden>
                                                                            <div class="selectroom">
                                                                                @foreach($roommediasingles as $roommediasingle)  
                                                                                    <div class="col-md-4">
                                                                                        <div class="panel panel-body room-item" id="div_media1_{{$roommediasingle->id}}_{{ $confirmmediasingle->id }}" onclick="<?php echo $roommediasingle->room_status == "ว่าง"?'myFunction( '.$roommediasingle->id .', '. $confirmmediasingle->id .')':'' ?>">
                                                                                            <div class="media">
                                                                                                <div class="media-body">
                                                                                                    <div class="media-right media-middle">
                                                                                                        <span class="label label-lg label-<?php echo $roommediasingle->room_status == 'ไม่เปิดใช้งาน'?'danger':''?><?php echo $roommediasingle->room_status == 'ว่าง'?'success':''?><?php echo $roommediasingle->room_status == 'กำลังใช้งาน'?'warning':''?>"> {{ $roommediasingle->room_status }}</span>
                                                                                                    </div>
                                                                                                    <h6 class="media-heading">{{ $roommediasingle->room_name }}</h6>
                                                                                                    <span class="text-muted countdown">00 : 00 : 00</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach                                                                       
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal3_{{ $confirmmediasingle->id }}">ย้อนกลับ</button>
                                                        <button type="button" class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#myModal5_{{ $confirmmediasingle->id }}">ถัดไป</button>
                                                    </div>
                                                </div>                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal5 --><!-- TAB CONTENT Model4 -->
                                    <div class="modal" id="myModal5_{{ $confirmmediasingle->id }}" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title" id="myModalLabel">การดำเนินการ</h5>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('queuelistmediasingles.update',$confirmmediasingle->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
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
                                                                                <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediasingle->user_fullname }}</h5>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediasingle->username }}</b></p>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%h ชั่วโมง %i นาทีที่แล้ว') }}</p>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediasingle->id }}</strong></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-body">
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <a href=""><i class="icon-tv text-success-400 icon-2x no-edge-top mt-5"></i></a>
                                                                            </div>
                                                                            <div class="media-body">        
                                                                                <h4 class="media-heading text-bold" id="room_media_{{ $confirmmediasingle->id }}"></h4>
                                                                                <?php 
                                                                                    $book_starttime = strtotime('now');
                                                                                    $book_endtime = strtotime('+3 hours', strtotime('now'));
                                                                                ?>
                                                                                หมดเวลา  <b style="color:#F62459">{{ date('H:i', $book_endtime) }} น.</b>
                                                                                <input type="hidden" name="book_starttime" value="{{ date('Y-m-d H:i', $book_starttime) }}">
                                                                                <input type="hidden" name="book_endtime" value="{{ date('Y-m-d H:i', $book_endtime) }}">
                                                                                <input type="hidden" name="room_name" id="room_room_name_{{ $confirmmediasingle->id }}" value="room_{{ $confirmmediasingle->id }}">
                                                                                <input type="hidden" name="book_status" value="อนุมัติ">
                                                                                <input type="hidden" name="room_status" value="กำลังใช้งาน">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#myModal4_{{ $confirmmediasingle->id }}">ย้อนกลับ</button>
                                                            <button type="submit" class="btn btn-success">ยืนยัน</button>
                                                        </div>
                                                    </form>
                                                </div>                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal6 -->
                                    <div class="modal" id="myModal6_{{ $confirmmediasingle->id }}" role="dialog">
                                        <div class="sweet-alert showSweetAlert visible" data-animation="pop" style="display: block; margin-top: -145px;">
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
                                            <form action="{{ route('queuelistmediasingles.update',$confirmmediasingle->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="sa-icon sa-custom" style="display: none;"></div>
                                                <h2>Confirmation</h2>
                                                <p>ยกเลิกการจองของ {{ $confirmmediasingle->user_fullname }} ?</p>
                                                <div class="sa-button-container">
                                                    <input type="hidden" name="book_status" value="ยกเลิกการจอง">
                                                    <!-- <form action="{{ route('queuelistmediasingles.destroy',$confirmmediasingle->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE') -->
                                                        <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                        <button type="submit" class="btn btn-danger">ใช่, ยกเลิกการจอง</button>
                                                    <!-- </form> -->
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            <?php }?>

                            <?php if($confirmmediasingles2){?>
                                @foreach($confirmmediasingles2 as $confirmmediasingle)
                                    <?php 
                                        $origin = date_create($confirmmediasingle->created_at->format('d-m-Y H:i'));
                                        $target = date_create('now');
                                        $interval = date_diff($origin, $target);
                                    ?>
                                    <!-- Tab2 Modal7 -->
                                    <div class="modal" id="myModal7_{{ $confirmmediasingle->id }}" role="dialog">
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
                                                            <span class="form-wizard-count"><b>i</b></span>
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediasingle->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediasingle->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เริ่มใช้งานเมื่อ : {{ formatDateThat($confirmmediasingle->book_starttime) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เริ่มใช้งานเมื่อ : {{ formatDateThat($confirmmediasingle->book_endtime) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediasingle->id }}</strong></p>
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
                                    <!-- Modal8 -->
                                    <div class="modal" id="myModal8_{{ $confirmmediasingle->id }}" role="dialog">
                                        <div class="sweet-alert showSweetAlert visible" data-animation="pop" style="display: block; margin-top: -145px;">
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
                                            <form action="{{ route('queuelistmediasingles.update',$confirmmediasingle->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="sa-icon sa-custom" style="display: none;"></div>
                                                <h2>Confirmation</h2>
                                                <p>คืนห้องของ {{ $confirmmediasingle->user_fullname }} ?</p>
                                                <div class="sa-button-container">
                                                    <input type="hidden" name="room_name" value="{{ $confirmmediasingle->room_name }}">
                                                    <input type="hidden" name="book_starttime" value="{{ $confirmmediasingle->book_starttime }}">
                                                    <input type="hidden" name="book_endtime" value="{{ $confirmmediasingle->book_endtime }}">
                                                    <input type="hidden" name="book_status" value="คืนห้อง">
                                                    <input type="hidden" name="room_status" value="ว่าง">
                                                    <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                    <button type="submit" class="btn btn-info">ใช่, คืนห้อง</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            <?php }?>

                            <?php if($confirmmediasingles3){?>
                                @foreach($confirmmediasingles3 as $confirmmediasingle)
                                    <?php 
                                        $origin = date_create($confirmmediasingle->created_at->format('d-m-Y H:i'));
                                        $target = date_create('now');
                                        $interval = date_diff($origin, $target);
                                    ?>
                                    <!-- Tab3 Modal9 -->
                                    <div class="modal" id="myModal9_{{ $confirmmediasingle->id }}" role="dialog">
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
                                                            <span class="form-wizard-count"><b>i</b></span>
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediasingle->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediasingle->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%h ชั่วโมง %i นาทีที่แล้ว') }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediasingle->id }}</strong></p>
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
                                @endforeach
                            <?php }?>

                            <?php if($confirmmediasingles4){?>
                                @foreach($confirmmediasingles4 as $confirmmediasingle)
                                <?php 
                                    $origin = date_create($confirmmediasingle->created_at->format('d-m-Y H:i'));
                                    $target = date_create('now');
                                    $interval = date_diff($origin, $target);
                                ?>
                                    <!-- Tab4 Modal10 -->
                                    <div class="modal" id="myModal10_{{ $confirmmediasingle->id }}" role="dialog">
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
                                                            <span class="form-wizard-count"><b>i</b></span>
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $confirmmediasingle->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต : <b>{{ $confirmmediasingle->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ทำการจองเมื่อ : {{ $interval->format('%h ชั่วโมง %i นาทีที่แล้ว') }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่ : <strong style="color:#F62459">{{ $confirmmediasingle->id }}</strong></p>
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
                                @endforeach
                            <?php }?>
                        <?php $o++;?>
                    </div>
                </div>  
            </div>
        </div> 
    </div> 
@endsection 

<script>
    function myFunction(input,id) {
        document.getElementById("myText1_"+id).value = input;
        document.getElementById("room_media_"+id).innerHTML = 'ห้อง '+input;
        document.getElementById("room_room_name_"+id).value = 'ห้อง '+input;
        document.getElementById("div_media1_"+input+"_"+id).style.backgroundColor = "#00bcd46e";
        <?php foreach($roommediasingles as $roommediasingle){ ?>
            if(input != <?php echo $roommediasingle->id?>){ 
                document.getElementById("div_media1_<?php echo $roommediasingle->id?>_"+id).style.backgroundColor = "transparent";
            }
        <?php }?>
    }
</script>
