@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="pull-left">
                    <h2>เพิ่มห้องสื่อศึกษากลุ่ม</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roommediagroups.index') }}" title="Go back">ย้อนกลับ</a>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('roommediagroups.store') }}" method="POST" >
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ประเภท:</strong>
                            <input type="text" class="form-control" readonly="readonly" name="room_type" value="ห้องสื่อศึกษากลุ่ม">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ชั้น:</strong>
                            <input type="text" class="form-control" readonly="readonly" name="room_floor" value="6"> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ชื่อห้อง:</strong>
                            <input type="text" name="room_name" class="form-control" placeholder="ชื่อห้อง">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>สถานะ:</strong>
                            <div class="form-check">
                                <input type="radio" name="room_status" value="ไม่เปิดใช้งาน"> ไม่เปิดใช้งาน<br>
                                <input type="radio" name="room_status" value="ว่าง" checked> ว่าง<br>
                                <input type="radio" name="room_status" value="กำลังใช้งาน"> กำลังใช้งาน<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">ยืนยัน</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection