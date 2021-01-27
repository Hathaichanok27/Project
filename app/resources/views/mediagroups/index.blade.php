@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-users"></i> ห้องสื่อศึกษากลุ่ม - ชั้น 6</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roommedias.index') }}">หน้าแรก</a></li>
                    <li><a href="">ชั้น 6</a></li>
                    <li class="active">ห้องสื่อศึกษากลุ่ม</li>
                </ul>   
                <div class="heading-elements">
                    <a href="{{ route('selectmediagroups.index') }}" class="btn btn-lg btn-labeled btn-labeled-right bg-danger heading-btn">จองคิวใช้บริการ <b><i class="fa fa-calendar"></i></b></a>
                </div>
            </div>
            <div class="text-uppercase text-semibold mb-10" style="color:#e74c3c">
                <h4><i class="fa fa-refresh"></i> จำนวนคิวที่รออยู่ <span class="ng-binding">0</span> คิว</h4>
            </div>
            <div class="row">
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-01</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-02</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-03</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-04</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-05</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-06</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                                <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-07</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-08</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 ng-scope" ng-repeat="room in roomList" repeat-done="updateCountdownTimer()">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="javascript:;" class="media-left">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/icon_color_tv.png" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b class="ng-binding">STV-09</b></h6>
                                <span class="text-muted countdown" data-endtime="2020-12-23 16:39:13">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg ng-binding label-success" ng-class="{'label-danger':room.room_status == 0,
                                                                                                'label-success':room.room_status == 1,
                                                                                                'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>     
    </div>
@endsection 