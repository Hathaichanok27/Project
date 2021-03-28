@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">  
                <div class="pull-left"> 
                    <h2>แก้ไขห้อง</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('rooms.index') }}" title="Go back">ย้อนกลับ</a>
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

            <form action="{{ route('rooms.update',$room->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ประเภท:</strong>
                            <input type="text" class="form-control" readonly="readonly" name="room_type" value="ห้องประชุม"> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ชั้น:</strong>
                            <select class="form-control" id="room_floor" name="room_floor">
                                @if($room->room_floor)
                                    <option value="{{ $room->room_floor }}" selected>{{ $room->room_floor }}</option>
                                @else
                                <option value="3">ชั้น 3</option>
                                <option value="4">ชั้น 4</option>
                                <option value="5">ชั้น 5</option>
                                <option value="5 - เฉพาะอาจารย์">ชั้น 5 - เฉพาะอาจารย์</option>
                                <option value="6 - Mini Home Theatre">ชั้น 6 - มินิโฮมเธียเตอร์</option>
                                <option value="6 - คาราโอเกะ">ชั้น 6 - คาราโอเกะ</option>
                                <option value="6">ชั้น 6 - ห้องสื่อ</option>
                                @endif
                            </select> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ชื่่อห้อง:</strong>
                            <input type="text" name="room_name" value="{{ $room->room_name }}" class="form-control">
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