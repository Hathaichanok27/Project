@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
        <div class="container">
            <div class="page-title">
                <h4><i class="fa fa-users"></i> <span class="text-semibold"> จัดการห้องสื่อศึกษากลุ่ม</span></h4>  
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roommediagroups.create') }}">เพิ่มห้อง <i class="fas fa-plus-circle"></i></a>
                </div>
            </div>
        </div>

        <div class="page-content">
			<div class="content-wrapper">
			    <div class="tabbable">   
                    <ul class="nav nav-tabs nav-tabs-highlight" style="margin-bottom: 0px;">
                        <li class="active"><a href="#label-tab1" data-toggle="tab">ว่าง <span class="label label-success position-right">{{$count1}}</span></a></li>
                        <li><a href="#label-tab2" data-toggle="tab">กำลังใช้งาน <span class="label bg-warning position-right">{{$count2}}</span></a></li>
                        <li><a href="#label-tab3" data-toggle="tab">ไม่เปิดใช้งาน <span class="label bg-danger position-right">{{$count3}}</span></a></li>
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
                                            <th class="text-center">ลำดับ</th>
                                            <th class="text-center">ชั้น</th>
                                            <th class="text-center">ชื่อห้อง</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable1">
                                        <?php if($roommediagroups1){?>
                                            @foreach($roommediagroups1 as $roommediagroup)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $roommediagroup->id }}</td>
                                                    <td style="text-align:center">{{ $roommediagroup->room_floor }}</td>
                                                    <td><a href="#myModal1_{{ $roommediagroup->id }}" data-toggle="modal">{{ $roommediagroup->room_name }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $roommediagroup->id }}" ><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal2_{{ $roommediagroup->id }}" style="color:#0275d8;"><i class="fas fa-edit"></i> แก้ไข</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal3_{{ $roommediagroup->id }}" style="color:#e74c3c;"><i class="fas fa-times"></i> ลบ</a></li>
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
                                            <input type="search" id="myInput1" type="text" placeholder="Type to filter...">
                                        </label>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="bg-grey">
                                            <th class="text-center">ลำดับ</th>
                                            <th class="text-center">ชั้น</th>
                                            <th class="text-center">ชื่อห้อง</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable2">
                                        <?php $i = 0; ?>
                                        <?php if($roommediagroups2){?>
                                            @foreach($roommediagroups2 as $roommediagroup)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $roommediagroup->id }}</td>
                                                    <td style="text-align:center">{{ $roommediagroup->room_floor }}</td>
                                                    <td><a href="#myModal4_{{ $roommediagroup->id }}" data-toggle="modal">{{ $roommediagroup->room_name }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal4_{{ $roommediagroup->id }}" ><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal5_{{ $roommediagroup->id }}" style="color:#0275d8;"><i class="fas fa-edit"></i> แก้ไข</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal6_{{ $roommediagroup->id }}" style="color:#e74c3c;"><i class="fas fa-times"></i> ลบ</a></li>
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
                                            <input type="search" id="myInput1" type="text" placeholder="Type to filter...">
                                        </label>
                                    </div>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr class="bg-grey">
                                            <th class="text-center">ลำดับ</th>
                                            <th class="text-center">ชั้น</th>
                                            <th class="text-center">ชื่อห้อง</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable3">
                                        <?php $i = 0; ?>
                                        <?php if($roommediagroups3){?>
                                            @foreach($roommediagroups3 as $roommediagroup)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $roommediagroup->id }}</td>
                                                    <td style="text-align:center">{{ $roommediagroup->room_floor }}</td>
                                                    <td><a href="#myModal7_{{ $roommediagroup->id }}" data-toggle="modal">{{ $roommediagroup->room_name }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal7_{{ $roommediagroup->id }}" ><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal8_{{ $roommediagroup->id }}" style="color:#0275d8;"><i class="fas fa-edit"></i> แก้ไข</a></li>                                                                
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal9_{{ $roommediagroup->id }}" style="color:#e74c3c;"><i class="fas fa-times"></i> ลบ</a></li>                                                                
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
                            <?php if($roommediagroups1){?>
                                @foreach($roommediagroups1 as $roommediagroup)
                                    <!-- Tab1 Modal1 -->
                                    <div class="modal" id="myModal1_{{ $roommediagroup->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">รายละเอียดห้อง</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6 class="form-wizard-title text-semibold">
                                                            <span class="form-wizard-count"><b>i</b></span>
                                                            ข้อมูลห้องสื่อศึกษากลุ่ม
                                                            <small class="display-block">ข้อมูลห้อง</small>
                                                        </h6>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="panel panel-body">
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <img src="{{ asset('images/icon_color_tv.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $roommediagroup->room_name }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ชั้น : {{ $roommediagroup->room_floor }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">สถานะ : <b style="color:<?php echo $roommediagroup->room_status == 'ไม่เปิดใช้งาน'?'#d9534f':''?><?php echo $roommediagroup->room_status == 'ว่าง'?'#5cb85c':''?><?php echo $roommediagroup->room_status == 'กำลังใช้งาน'?'#f0ad4e':''?>">{{$roommediagroup->room_status}}</b></p>
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
                                    <div class="modal" id="myModal2_{{ $roommediagroup->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">แก้ไขรายละเอียดห้อง</h5>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('roommediagroups.update',$roommediagroup->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <h6 class="form-wizard-title text-semibold">
                                                                <span class="form-wizard-count"><b>i</b></span>
                                                                ข้อมูลห้องสื่อศึกษากลุ่ม
                                                                <small class="display-block">แก้ไขรายละเอียด</small>
                                                            </h6>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="panel panel-body">
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <img src="{{ asset('images/icon_color_tv.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h5 class="media-heading text-bold" style="color:#D35400">{{ $roommediagroup->room_name }}</h5>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">ชั้น : {{ $roommediagroup->room_floor }}</p>
                                                                                <div class="form-group">
                                                                                    <strong>สถานะ:</strong>
                                                                                    <div class="form-check">
                                                                                        <input type="radio" name="room_status" value="กำลังใช้งาน" checked> กำลังใช้งาน<br>
                                                                                        <input type="radio" name="room_status" value="ไม่เปิดใช้งาน"> ไม่เปิดใช้งาน<br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default">ย้อนกลับ</button>
                                                            <button type="submit" class="btn btn-success">ยืนยัน</button>
                                                        </div>
                                                    </form>
                                                </div>                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal3 -->
                                    <div class="modal" id="myModal3_{{ $roommediagroup->id }}" role="dialog">
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
                                            <h2>Confirmation</h2>
                                            <p>ลบชั้น {{ $roommediagroup->room_floor }} ห้อง {{ $roommediagroup->room_name }} ?</p>
                                            <div class="sa-button-container">
                                                <form action="{{ route('roommediagroups.destroy',$roommediagroup->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                    <button type="submit" class="btn btn-danger">ใช่, ลบห้อง</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            <?php }?>

                            <?php if($roommediagroups2){?>
                                @foreach($roommediagroups2 as $roommediagroup)
                                    <!-- Tab2 Modal4 -->
                                    <div class="modal" id="myModal4_{{ $roommediagroup->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">รายละเอียดห้อง</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6 class="form-wizard-title text-semibold">
                                                            <span class="form-wizard-count"><b>i</b></span>
                                                            ข้อมูลห้องสื่อศึกษากลุ่ม
                                                            <small class="display-block">ข้อมูลห้อง</small>
                                                        </h6>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="panel panel-body">
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <img src="{{ asset('images/icon_color_tv.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $roommediagroup->room_name }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ชั้น : {{ $roommediagroup->room_floor }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">สถานะ : <b style="color:<?php echo $roommediagroup->room_status == 'ไม่เปิดใช้งาน'?'#d9534f':''?><?php echo $roommediagroup->room_status == 'ว่าง'?'#5cb85c':''?><?php echo $roommediagroup->room_status == 'กำลังใช้งาน'?'#f0ad4e':''?>">{{$roommediagroup->room_status}}</b></p>
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
                                    <div class="modal" id="myModal5_{{ $roommediagroup->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">แก้ไขรายละเอียดห้อง</h5>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('roommediagroups.update',$roommediagroup->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <h6 class="form-wizard-title text-semibold">
                                                                <span class="form-wizard-count"><b>i</b></span>
                                                                ข้อมูลห้องสื่อศึกษากลุ่ม
                                                                <small class="display-block">แก้ไขรายละเอียด</small>
                                                            </h6>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="panel panel-body">
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <img src="{{ asset('images/icon_color_tv.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h5 class="media-heading text-bold" style="color:#D35400">{{ $roommediagroup->room_name }}</h5>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">ชั้น : {{ $roommediagroup->room_floor }}</p>
                                                                                <div class="form-group">
                                                                                    <strong>สถานะ:</strong>
                                                                                    <div class="form-check">
                                                                                        <input type="radio" name="room_status" value="ว่าง" checked> ว่าง<br>
                                                                                        <input type="radio" name="room_status" value="ไม่เปิดใช้งาน"> ไม่เปิดใช้งาน<br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default">ย้อนกลับ</button>
                                                            <button type="submit" class="btn btn-success">ยืนยัน</button>
                                                        </div>
                                                    </form>
                                                </div>                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal6 -->
                                    <div class="modal" id="myModal6_{{ $roommediagroup->id }}" role="dialog">
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
                                            <h2>Confirmation</h2>
                                            <p>ลบชั้น {{ $roommediagroup->room_floor }} ห้อง {{ $roommediagroup->room_name }} ?</p>
                                            <div class="sa-button-container">
                                                <form action="{{ route('roommediagroups.destroy',$roommediagroup->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                    <button type="submit" class="btn btn-danger">ใช่, ลบห้อง</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            <?php }?>

                            <?php if($roommediagroups3){?>
                                @foreach($roommediagroups3 as $roommediagroup)
                                    <!-- Tab3 Modal7 -->
                                    <div class="modal" id="myModal7_{{ $roommediagroup->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">รายละเอียดห้อง</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6 class="form-wizard-title text-semibold">
                                                            <span class="form-wizard-count"><b>i</b></span>
                                                            ข้อมูลห้องสื่อศึกษากลุ่ม
                                                            <small class="display-block">ข้อมูลห้อง</small>
                                                        </h6>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="panel panel-body">
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <img src="{{ asset('images/icon_color_tv.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $roommediagroup->room_name }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ชั้น : {{ $roommediagroup->room_floor }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">สถานะ : <b style="color:<?php echo $roommediagroup->room_status == 'ไม่เปิดใช้งาน'?'#d9534f':''?><?php echo $roommediagroup->room_status == 'ว่าง'?'#5cb85c':''?><?php echo $roommediagroup->room_status == 'กำลังใช้งาน'?'#f0ad4e':''?>">{{$roommediagroup->room_status}}</b></p>
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
                                    <div class="modal" id="myModal8_{{ $roommediagroup->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">แก้ไขรายละเอียดห้อง</h5>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('roommediagroups.update',$roommediagroup->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <h6 class="form-wizard-title text-semibold">
                                                                <span class="form-wizard-count"><b>i</b></span>
                                                                ข้อมูลห้องสื่อศึกษากลุ่ม
                                                                <small class="display-block">แก้ไขรายละเอียด</small>
                                                            </h6>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="panel panel-body">
                                                                        <div class="media">
                                                                            <div class="media-left">
                                                                                <img src="{{ asset('images/icon_color_tv.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                            </div>
                                                                            <div class="media-body">
                                                                                <h5 class="media-heading text-bold" style="color:#D35400">{{ $roommediagroup->room_name }}</h5>
                                                                                <p class="text-semibold" style="margin-bottom:2px;">ชั้น : {{ $roommediagroup->room_floor }}</p>
                                                                                <div class="form-group">
                                                                                    <strong>สถานะ:</strong>
                                                                                    <div class="form-check">
                                                                                        <input type="radio" name="room_status" value="ว่าง" checked> ว่าง<br>
                                                                                        <input type="radio" name="room_status" value="กำลังใช้งาน"> กำลังใช้งาน<br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default">ย้อนกลับ</button>
                                                            <button type="submit" class="btn btn-success">ยืนยัน</button>
                                                        </div>
                                                    </form>
                                                </div>                       
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal9 -->
                                    <div class="modal" id="myModal9_{{ $roommediagroup->id }}" role="dialog">
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
                                            <h2>Confirmation</h2>
                                            <p>ลบชั้น {{ $roommediagroup->room_floor }} ห้อง {{ $roommediagroup->room_name }} ?</p>
                                            <div class="sa-button-container">
                                                <form action="{{ route('roommediagroups.destroy',$roommediagroup->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="cancel" data-dismiss="modal">ไม่ใช่</button>
                                                    <button type="submit" class="btn btn-danger">ใช่, ลบห้อง</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            <?php }?>


                        <?php $o++;?>
                    </div>
                </div>
            </div>
        {!! $roommediagroups->links() !!}
        </div>
    </div>
@endsection