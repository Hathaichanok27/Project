@extends('layouts.adminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
			<div class="page-title">
				<h5><i class="fa fa-home"></i> <span class="text-semibold"> รายการคิว</span></h5>  
                <ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ route('adminroombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="">สำหรับเจ้าหน้าที่</a></li>
                    <li><a href="">ห้องประชุม</a></li>
                    <li class="active">รายการคิว</li>
				</ul>
			</div>
        </div> 
        <div class="page-content">
			<div class="content-wrapper">
			    <div class="tabbable">   
                    <ul class="nav nav-tabs nav-tabs-highlight" style="margin-bottom: 0px;">
                        <li class="active"><a href="#label-tab1" data-toggle="tab">รอคิว <span class="label label-warning position-right">{{$count1}}</span></a></li>
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
                                            <th class="text-center">ห้อง</th>
                                            <th class="text-center">เวลาเริ่มต้น</th>
                                            <th class="text-center">เวลาสิ้นสุด</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable1">
                                        <?php if($reservemeets1){?>
                                            @foreach($reservemeets1 as $reservemeet)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $reservemeet->id }}</td>
                                                    <td><a href="#myModal1_{{ $reservemeet->id }}" data-toggle="modal">{{ $reservemeet->username }}</td>
                                                    <td>{{ $reservemeet->user_fullname }}</td>
                                                    <td class="text-center">{{ $reservemeet->room_name }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $reservemeet->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal2_{{ $reservemeet->id }}" style="color:#26A65B;"><i class="fas fa-sign-in-alt"></i> เข้าห้อง</a></li>                                                                
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal3_{{ $reservemeet->id }}" style="color:#e74c3c;"><i class="fas fa-times"></i> ยกเลิกการจอง</a></li>                                                                 
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
                                            <th class="text-center">ห้อง</th>
                                            <th class="text-center">เวลาเริ่มต้น</th>
                                            <th class="text-center">เวลาสิ้นสุด</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable2">
                                        <?php $i = 0; ?>
                                        <?php if($reservemeets2){?>
                                            @foreach($reservemeets2 as $reservemeet)
                                                <tr>  
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $reservemeet->id }}</td>
                                                    <td><a href="#myModal4_{{ $reservemeet->id }}" data-toggle="modal">{{ $reservemeet->username }}</td>
                                                    <td>{{ $reservemeet->user_fullname }}</td>
                                                    <td class="text-center">{{ $reservemeet->room_name }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal4_{{ $reservemeet->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal5_{{ $reservemeet->id }}" style="color:#0275d8;"><i class="fas fa-sign-out-alt"></i> คืนห้อง</a></li>
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
                                            <th class="text-center">ห้อง</th>
                                            <th class="text-center">เวลาเริ่มต้น</th>
                                            <th class="text-center">เวลาสิ้นสุด</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable3">
                                        <?php $i = 0; ?>
                                        <?php if($reservemeets3){?>
                                            @foreach($reservemeets3 as $reservemeet)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $reservemeet->id }}</td>
                                                    <td><a href="#myModal6_{{ $reservemeet->id }}" data-toggle="modal">{{ $reservemeet->username }}</td>
                                                    <td>{{ $reservemeet->user_fullname }}</td>
                                                    <td class="text-center">{{ $reservemeet->room_name }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal6_{{ $reservemeet->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
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
                                            <th class="text-center">ห้อง</th>
                                            <th class="text-center">เวลาเริ่มต้น</th>
                                            <th class="text-center">เวลาสิ้นสุด</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable4">
                                        <?php $i = 0; ?>
                                        <?php if($reservemeets4){?>
                                            @foreach($reservemeets4 as $reservemeet)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $reservemeet->id }}</td>
                                                    <td><a href="#myModal7_{{ $reservemeet->id }}" data-toggle="modal">{{ $reservemeet->username }}</td>
                                                    <td>{{ $reservemeet->user_fullname }}</td>
                                                    <td class="text-center">{{ $reservemeet->room_name }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</td>
                                                    <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal7_{{ $reservemeet->id }}"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
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

                    <div class="tab-content-model">
                        <?php $o=1?>
                            <?php if($reservemeets1){?>
                                @foreach($reservemeets1 as $reservemeet)
                                    <?php 
                                        $origin = date_create($reservemeet->created_at->format('d-m-Y H:i'));
                                        $target = date_create('now');
                                        $interval = date_diff($origin, $target);
                                    ?>
                                    <!-- Tab1 Modal1 -->
                                    <div class="modal" id="myModal1_{{ $reservemeet->id }}" role="dialog">
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $reservemeet->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต: <b>{{ $reservemeet->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ห้อง: {{ $reservemeet->room_name }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาเริ่มต้น: {{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาสิ้นสุด: {{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่: <strong style="color:#F62459">{{ $reservemeet->id }}</strong></p>
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
                                    <div class="modal" id="myModal2_{{ $reservemeet->id }}" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title" id="myModalLabel">การดำเนินการ</h5>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('queuelistmeetings.update',$reservemeet->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <h6 class="form-wizard-title text-semibold">
                                                                <span class="form-wizard-count"><i class="fas fa-check"></i></span>
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
                                                                                <h5 class="media-heading text-bold" style="color:#D35400">{{ $reservemeet->user_fullname }}</h5>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต: <b>{{ $reservemeet->username }}</b></p>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">ห้อง: {{ $reservemeet->room_name }}</p>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">เวลาเริ่มต้น: {{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</p>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">เวลาสิ้นสุด: {{ $reservemeet->book_endtime }}</p>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่: <strong style="color:#F62459">{{ $reservemeet->id }}</strong></p>
                                                                                <input type="hidden" name="book_status" value="อนุมัติ">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">ยืนยัน</button>
                                                        </div>
                                                    </form>
                                                </div>                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Model3 -->
                                    <div class="modal" id="myModal3_{{ $reservemeet->id }}" role="dialog">
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
                                            <div class="sa-icon sa-custom" style="display: none;"></div>
                                            <!-- <h2>Confirmation</h2>
                                            <p>ยกเลิกการจองของ {{ $reservemeet->user_fullname }} ?</p> -->
                                            <!-- <div class="sa-button-container">
                                                <input type="hidden" name="book_status" value="ยกเลิกการจอง">
                                                <form action="{{ route('queuelistmeetings.destroy',$reservemeet->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                    <button type="submit" class="btn btn-danger">ใช่, ยกเลิกการจอง</button>
                                                </form>
                                            </div> -->
                                            <form action="{{ route('queuelistmeetings.update',$reservemeet->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="sa-icon sa-custom" style="display: none;"></div>
                                                <h2>Confirmation</h2>
                                                <p>ยกเลิกการจองของ {{ $reservemeet->user_fullname }} ?</p>
                                                <div class="sa-button-container">
                                                    <input type="hidden" name="book_status" value="ยกเลิกการจอง">
                                                    <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                    <button type="submit" class="btn btn-danger">ใช่, ยกเลิกการจอง</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            <?php }?>
                            
                            <?php if($reservemeets2){?>
                                @foreach($reservemeets2 as $reservemeet)
                                    <?php 
                                        $origin = date_create($reservemeet->created_at->format('d-m-Y H:i'));
                                        $target = date_create('now');
                                        $interval = date_diff($origin, $target);
                                    ?>
                                    <!-- Tab2 Modal4 -->
                                    <div class="modal" id="myModal4_{{ $reservemeet->id }}" role="dialog">
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $reservemeet->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต: <b>{{ $reservemeet->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ห้อง: {{ $reservemeet->room_name }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาเริ่มต้น: {{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาสิ้นสุด: {{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่: <strong style="color:#F62459">{{ $reservemeet->id }}</strong></p>
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
                                    <!-- Modal5 -->
                                    <div class="modal" id="myModal5_{{ $reservemeet->id }}" role="dialog">
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
                                            <form action="{{ route('queuelistmeetings.update',$reservemeet->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="sa-icon sa-custom" style="display: none;"></div>
                                                <h2>Confirmation</h2>
                                                <p>คืนห้องของ {{ $reservemeet->user_fullname }} ?</p>
                                                <div class="sa-button-container">
                                                    <input type="hidden" name="book_starttime" value="{{ $reservemeet->book_starttime }}">
                                                    <input type="hidden" name="book_endtime" value="{{ $reservemeet->book_endtime }}">
                                                    <input type="hidden" name="book_status" value="คืนห้อง"><button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                    <button type="submit" class="btn btn-danger">ใช่, คืนห้อง</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            <?php }?>

                            <?php if($reservemeets3){?>
                                @foreach($reservemeets3 as $reservemeet)
                                    <?php 
                                        $origin = date_create($reservemeet->created_at->format('d-m-Y H:i'));
                                        $target = date_create('now');
                                        $interval = date_diff($origin, $target);
                                    ?>
                                    <!-- Tab3 Modal6 -->
                                    <div class="modal" id="myModal6_{{ $reservemeet->id }}" role="dialog">
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $reservemeet->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต: <b>{{ $reservemeet->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ห้อง: {{ $reservemeet->room_name }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาเริ่มต้น: {{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาสิ้นสุด: {{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่: <strong style="color:#F62459">{{ $reservemeet->id }}</strong></p>
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

                            <?php if($reservemeets4){?>
                                @foreach($reservemeets4 as $reservemeet)
                                    <?php 
                                        $origin = date_create($reservemeet->created_at->format('d-m-Y H:i'));
                                        $target = date_create('now');
                                        $interval = date_diff($origin, $target);
                                    ?>
                                    <!-- Tab4 Modal7 -->
                                    <div class="modal" id="myModal7_{{ $reservemeet->id }}" role="dialog">
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
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $reservemeet->user_fullname }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">บัญชีผู้ใช้/รหัสนิสิต: <b>{{ $reservemeet->username }}</b></p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ห้อง: {{ $reservemeet->room_name }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาเริ่มต้น: {{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เวลาสิ้นสุด: {{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ลำดับคิวที่: <strong style="color:#F62459">{{ $reservemeet->id }}</strong></p>
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
