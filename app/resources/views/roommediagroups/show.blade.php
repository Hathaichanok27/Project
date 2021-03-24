@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">   
                <div class="pull-left"> 
                    <h2>ข้อมูลห้องสื่อศึกษากลุ่ม</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roommediagroups.index') }}" title="Go back">ย้อนกลับ</a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ประเภท:</strong>
                        {{ $roommediagroup->room_type }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชั้น:</strong>
                        {{ $roommediagroup->room_floor }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชื่อห้อง:</strong>
                        {{ $roommediagroup->room_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>สถานะ:</strong>
                        <b style="color:<?php echo $roommediagroup->room_status == 'ไม่เปิดใช้งาน'?'#d9534f':''?><?php echo $roommediagroup->room_status == 'ว่าง'?'#5cb85c':''?><?php echo $roommediagroup->room_status == 'กำลังใช้งาน'?'#f0ad4e':''?>">{{$roommediagroup->room_status}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection