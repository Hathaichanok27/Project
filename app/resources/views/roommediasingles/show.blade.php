@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">   
                <div class="pull-left"> 
                    <h2>ข้อมูลห้องสื่อศึกษาเดี่ยว</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roommediasingles.index') }}" title="Go back"><i class="fas fa-backward "></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ประเภท:</strong>
                        {{ $roommediasingle->room_type }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชั้น:</strong>
                        {{ $roommediasingle->room_floor }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชื่อห้อง:</strong>
                        {{ $roommediasingle->room_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>สถานะ:</strong>
                        <b style="color:<?php echo $roommediasingle->room_status_name == 'ไม่เปิดใช้งาน'?'#d9534f':''?><?php echo $roommediasingle->room_status_name == 'ว่าง'?'#5cb85c':''?><?php echo $roommediasingle->room_status_name == 'กำลังใช้งาน'?'#f0ad4e':''?>">{{$roommediasingle->room_status_name}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection