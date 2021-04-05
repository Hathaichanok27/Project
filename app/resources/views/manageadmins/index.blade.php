@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
        <div class="container">
            <div class="page-title">
                <h4><i class="fas fa-user-cog"></i> <span class="text-semibold"> จัดการเจ้าหน้าที่</span></h4>  
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('manageadmins.create') }}">เพิ่มเจ้าหน้าที่ <i class="fas fa-plus-circle"></i></a>
                </div>
            </div>
        </div>

        <div class="page-content">
			<div class="content-wrapper">
			    <div class="tabbable">   
                    <ul class="nav nav-tabs nav-tabs-highlight" style="margin-bottom: 0px;">
                        <li class="active"><a href="#label-tab1" data-toggle="tab">เจ้าหน้าที่ <span class="label label-info position-right">{{$count}}</span></a></li>
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
                                            <th style="text-align:center">รหัสผู้ใช้</th>
                                            <th style="text-align:center">ชื่อ-นามสกุล</th>
                                            <th style="text-align:center">อีเมล</th>
                                            <th style="text-align:center">เบอร์โทร</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable1">
                                        <?php if($manageadmins){?>
                                            @foreach($manageadmins as $manageadmin)
                                                <tr>
                                                    <td hidden>{{ ++$i }}</td>
                                                    <td style="text-align:center">{{ $manageadmin->id }}</td>
                                                    <td style="text-align:center"><a href="#myModal1_{{ $manageadmin->id }}" data-toggle="modal">{{ $manageadmin->admin_username }}</td>
                                                    <td>{{ $manageadmin->admin_fullname }}</td>
                                                    <td>{{ $manageadmin->admin_email }}</td>
                                                    <td style="text-align:center">{{ $manageadmin->admin_telnum }}</td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal1_{{ $manageadmin->id }}" ><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal2_{{ $manageadmin->id }}" style="color:#0275d8;"><i class="fas fa-edit"></i> แก้ไข</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="" data-toggle="modal" data-target="#myModal3_{{ $manageadmin->id }}" style="color:#e74c3c;"><i class="fas fa-times"></i> ลบ</a></li>
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
                            <?php if($manageadmins){?>
                                @foreach($manageadmins as $manageadmin)
                                    <!-- Tab1 Modal1 -->
                                    <div class="modal" id="myModal1_{{ $manageadmin->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">รายละเอียดเจ้าหน้าที่</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h6 class="form-wizard-title text-semibold">
                                                            <span class="form-wizard-count"><b>i</b></span>
                                                            ข้อมูลเจ้าหน้าที่
                                                            <small class="display-block">ข้อมูลเจ้าหน้าที่</small>
                                                        </h6>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="panel panel-body">
                                                                    <div class="media">
                                                                        <div class="media-left">
                                                                            <img src="{{ asset('images/icon_color_tv.png') }}" style="width: 70px; height: 70px;" class="img-circle" alt="">  
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h5 class="media-heading text-bold" style="color:#D35400">{{ $manageadmin->admin_username }}</h5>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">ชื่อ-นามสกุล : {{ $manageadmin->admin_fullname }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">อีเมล : {{ $manageadmin->admin_email }}</p>
                                                                            <p class="text-semibold" style="margin-bottom:2px;">เบอร์โทร : {{ $manageadmin->admin_telnum }}</p>
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
                                    <div class="modal" id="myModal2_{{ $manageadmin->id }}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body" style="padding:0px;">
                                                    <div class="panel panel-white" style="margin-bottom:0px;">
                                                        <div class="panel-heading">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h5 class="modal-title">แก้ไขรายละเอียดเจ้าหน้าที่</h5>
                                                        </div>
                                                    </div>
                                                    <form action="{{ route('manageadmins.update',$manageadmin->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <h6 class="form-wizard-title text-semibold">
                                                                <span class="form-wizard-count"><b>i</b></span>
                                                                ข้อมูลเจ้าหน้าที่
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
                                                                                <h5 class="media-heading text-bold" style="color:#D35400">{{ $manageadmin->admin_username }}</h5>
                                                                                <strong>ชื่อ-นามสกุล:</strong><input type="text" name="admin_fullname" class="form-control" value="{{ $manageadmin->admin_fullname }}">
                                                                                <strong>อีเมล:</strong><input type="email" name="admin_email" class="form-control" value="{{ $manageadmin->admin_email }}">
                                                                                <strong>เบอร์โทร:</strong><input type="text" name="admin_telnum" class="form-control" value="{{ $manageadmin->admin_telnum }}">
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
                                    <div class="modal" id="myModal3_{{ $manageadmin->id }}" role="dialog">
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
                                            <p>ลบเจ้าหน้าที่ {{ $manageadmin->admin_fullname }} ?</p>
                                            <div class="sa-button-container">
                                                <form action="{{ route('manageadmins.destroy',$manageadmin->id) }}" method="POST">
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
        {!! $manageadmins->links() !!}
        </div>
    </div>
@endsection