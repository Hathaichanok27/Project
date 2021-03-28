@extends('layouts.userlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">   
                <div class="pull-left"> 
                    <h2>ข้อมูลการจอง</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roommeetings.index') }}" title="Go back">ย้อนกลับ</a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>บัญชีผู้ใช้:</strong>
                        {{ $reservemeet->username }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชื่อ - นามสกุล:</strong>
                        {{ $reservemeet->user_fullname }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ห้อง:</strong>
                        {{ $reservemeet->room_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>เวลาเริ่มต้น:</strong>
                        {{ $reservemeet->book_starttime->format('d-m-Y H:i') }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>เวลาสิ้นสุด:</strong>
                        {{ $reservemeet->book_endtime->format('d-m-Y H:i') }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>สถานะการจอง:</strong>
                        <td class="text-center"><b style="color:<?php echo $reservemeet->book_status == 'รอการอนุมัติ'?'#f0ad4e':''?><?php echo $reservemeet->book_status == 'อนุมัติ'?'#5cb85c':''?><?php echo $reservemeet->book_status == 'ยกเลิกการจอง'?'#d9534f':''?><?php echo $reservemeet->book_status == 'คืนห้อง'?'#0275d8':''?>">{{$reservemeet->book_status}}</b></td>
                    </div>
                </div>
                <form action="{{ route('reservemeets.update',$reservemeet->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="book_status" value="ยกเลิกการจอง">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('คุณต้องการยกเลิกการจองใช่หรือไม่ ?');">ยกเลิกการจอง <i class="fas fa-times-circle"></i></button>
                </form>
                <!-- <form action="{{ route('reservemeets.destroy',$reservemeet->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('คุณต้องการยกเลิกการจองใช่หรือไม่ ?');" id="btnDelete">ยกเลิกการจอง <i class="fas fa-times-circle"></i></button>
                </form> -->
            </div>
        </div>
    </div>
@endsection