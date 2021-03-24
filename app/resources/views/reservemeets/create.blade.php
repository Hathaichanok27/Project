@extends('layouts.userlayout')

@section('content')
    <div class="page-container">    
		<div class="container">
			<div class="row">
                <div class="pull-left">
                    <h4><i class="fas fa-id-card"></i> จองห้องประชุม</h4>
                    <ul class="breadcrumb breadcrumb-caret position-right">
                        <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                        <li><a href="{{ route('roommeetings.index') }}">ห้องประชุม </a></li>
                        <li class="active">จองห้องประชุม</li>
                    </ul>   
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roommeetings.index') }}" title="Go back">ย้อนกลับ</a>
                </div>
            </div>
            <br>
            <form action="{{ route('reservemeets.store') }}" method="POST" >
            @csrf
            <div class="row">                
                <div class="form-group">
                    <label class="col-sm-1 control-label">รหัสนิสิต: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" readonly="readonly" name="username" value="{{ Auth::user()->username }}">
                        <input type="hidden" class="form-control" readonly="readonly" name="user_fullname" value="{{ Auth::user()->user_fullname }}">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label">ชั้น: </label>
                    <div class="col-sm-6">
                        <select class="form-control" name="room_floor">
                            <option value="3">ชั้น 3</option>
                            <option value="4">ชั้น 4</option>
                            <option value="5">ชั้น 5</option>
                            <option value="5 - เฉพาะอาจารย์">ชั้น 5 - เฉพาะอาจารย์</option>
                            <option value="6 - มินิโฮมเธียเตอร์">ชั้น 6 - มินิโฮมเธียเตอร์</option>
                            <option value="6 - คาราโอเกะ">ชั้น 6 - คาราโอเกะ</option>
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
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_date">วันที่จอง: </label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="book_date">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_starttime">เวลาเริ่มต้น: </label>
                    <div class="col-sm-6">
                        <input type="time" class="form-control" name="book_starttime" list="book_starttime_list" min="08:00" max="20:00">
                        <datalist id="book_starttime_list">
                            <option value="08:00">
                            <option value="08:30">
                            <option value="09:00">
                            <option value="09:30">
                            <option value="10:00">
                            <option value="10:30">
                            <option value="11:00">
                            <option value="11:30">
                            <option value="12:00">
                            <option value="12:30">
                            <option value="13:00">
                            <option value="13:30">
                            <option value="14:00">
                            <option value="14:30">
                            <option value="15:00">
                            <option value="15:30">
                            <option value="16:00">
                            <option value="16:30">
                            <option value="17:00">
                            <option value="17:30">
                            <option value="18:00">
                            <option value="18:30">
                            <option value="19:00">
                            <option value="19:30">
                        </datalist>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_endtime">เวลาสิ้นสุด: </label>
                    <div class="col-sm-6">
                        <input type="time" class="form-control" name="book_endtime" list="book_endtime_list" min="08:00" max="20:00"> 
                        <datalist id="book_endtime_list">
                            <option value="08:30">
                            <option value="09:00">
                            <option value="09:30">
                            <option value="10:00">
                            <option value="10:30">
                            <option value="11:00">
                            <option value="11:30">
                            <option value="12:00">
                            <option value="12:30">
                            <option value="13:00">
                            <option value="13:30">
                            <option value="14:00">
                            <option value="14:30">
                            <option value="15:00">
                            <option value="15:30">
                            <option value="16:00">
                            <option value="16:30">
                            <option value="17:00">
                            <option value="17:30">
                            <option value="18:00">
                            <option value="18:30">
                            <option value="19:00">
                            <option value="19:30">
                            <option value="20:00">
                        </datalist>
                    </div>
                </div> 
                <input type="hidden" class="form-control" name="room_type" value="ห้องประชุม">
                <input type="hidden" class="form-control" name="book_status" value="รอการอนุมัติ">    
                <br><br>
                <button type="submit" class="btn btn-success">ยืนยัน <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection 