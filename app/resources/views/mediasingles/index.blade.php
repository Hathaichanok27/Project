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
                @foreach($rooms as $room)
                    <div class="col-sm-4">
                        <div class="panel panel-body border-grey">
                            <div class="media">
                                <a href="" class="media-left">
                                    <img src="{{ asset('images/icon_color_tv.png') }}" class="img-circle img-lg" alt="">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading"><b>{{ $room->room_name }}</b></h6>
                                    <span class="text-muted countdown" data-endtime="2021-01-01 09:00:00">00 : 00 : 00</span>
                                </div>
                                <div class="media-right media-middle">
                                    <span class="label label-lg label-success" class="{'label-danger':{{ $room->room_status }} == 'ไม่เปิดใช้งาน',
                                                                                        'label-success':{{ $room->room_status }} == 'ว่าง',
                                                                                        'label-warning':{{ $room->room_status }} == 'กำลังใช้งาน'}">{{ $room->room_status }}</span>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div> 
        </div>     
    </div>
@endsection 