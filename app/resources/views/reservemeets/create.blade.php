@extends('layouts.userlayout')

@section('content')
    <div class="page-container">    
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-id-card"></i> จองห้องประชุม</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('roommeetings.index') }}">ห้องประชุม </a></li>
                    <li class="active">จองห้องประชุม</li>
                </ul>   
            </div>
            <form action="{{ route('reservemeets.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="form-group">
                    <label class="col-sm-1 control-label">รหัสนิสิต: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" readonly="readonly" name="username" value="{{ Auth::user()->username }}">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="time_start">เวลาเริ่มต้น: </label>
                    <div class="col-sm-6">
                        <input type="datetime-local" class="form-control" name="time_start">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="time_end">เวลาสิ้นสุด: </label>
                    <div class="col-sm-6">
                        <input type="datetime-local" class="form-control" name="time_end">
                    </div>
                </div> 
                <br>
                <input type="hidden" class="form-control" name="room_type" value="ห้องประชุม">
                <div class="form-group">
                    <label class="col-sm-1 control-label">ชั้น: </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="room_floor">
                            <option value="3">ชั้น 3</option>
                            <option value="4">ชั้น 4</option>
                            <option value="5">ชั้น 5</option>
                            <option value="5-aj-only">ชั้น 5 - เฉพาะอาจารย์</option>
                            <option value="6-mini-home-theatre">ชั้น 6 - Mini Home Theatre</option>
                            <option value="6-karaoke">ชั้น 6 - คาราโอเกะ</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label">ห้อง: </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="room_name">
                            <option value="1">ห้อง 1</option>
                            <option value="2">ห้อง 2</option>
                            <option value="3">ห้อง 3</option>
                            <option value="4">ห้อง 4</option>
                            <option value="5">ห้อง 5</option>
                            <option value="6">ห้อง 6</option>
                        </select>
                    </div>
                </div>    
                <br><br>
                <button type="submit" class="btn btn-success">ยืนยัน <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection 