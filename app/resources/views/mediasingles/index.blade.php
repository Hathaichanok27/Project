@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-users"></i> ห้องสื่อศึกษาเดี่ยว - ชั้น 6</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('roommedias.index') }}">ชั้น 6</a></li>
                    <li class="active">ห้องสื่อศึกษาเดี่ยว</li>
                </ul>   
                <div class="heading-elements">
                    <a href="{{ route('confirmmediasingles.create') }}" class="btn btn-lg btn-labeled btn-labeled-right bg-danger heading-btn">จองคิวใช้บริการ <b><i class="fa fa-calendar"></i></b></a>
                </div>
            </div>
            <div class="text-uppercase text-semibold mb-10" style="color:#e74c3c">
                <h4><i class="fas fa-sync-alt"></i> จำนวนคิวที่รออยู่ <span class="ng-binding">0</span> คิว</h4>
            </div>
            <div class="row">
                <!-- เครื่องที่ 1 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 1</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- เครื่องที่ 2 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 2</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 3 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 3</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 4 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 4</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 5 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 5</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 6 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 6</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 7 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 7</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 8 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 8</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 9 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 9</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 10 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 10</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 11 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 11</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 12 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 12</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 13 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 13</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 14 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 14</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 15 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 15</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 16 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 16</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 17 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 17</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 18 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 18</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 19 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 19</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 20 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 20</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 21 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 21</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
                                                                                    'label-success':room.room_status == 1,
                                                                                    'label-warning': room.room_status == 2}">ว่าง</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- เครื่องที่ 22 -->
                <div class="col-sm-4">
                    <div class="panel panel-body border-grey">
                        <div class="media">
                            <a href="" class="media-left">
                                <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><b>เครื่องที่ 22</b></h6>
                                <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                            </div>
                            <div class="media-right media-middle">
                                <span class="label label-lg label-success" class="{'label-danger':room.room_status == 0,
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