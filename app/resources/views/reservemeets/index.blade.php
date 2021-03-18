@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-search"></i> จองห้องประชุม </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('roommeetings.index') }}">ห้องประชุม</a></li>
                    <li class="active">จองห้องประชุม</a></li>
                </ul>   
            </div>
            <div class="form-group">
                <label class="col-sm-1 control-label">คำอธิบาย: </label>
                <div class="col-sm-6">
                    <input class="form-control" id="description" type="text" placeholder="Description">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="time_start">เวลาเริ่มต้น: </label>
                <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" id="time_start" name="time_start">

                       
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="time_end">เวลาสิ้นสุด: </label>
                <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" id="time_end" name="time_end">
                </div>
            </div> 
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="area">ชั้น: </label>
                <div class="col-sm-6">
                    <select class="form-control" id="area" name="area">
                        <option value="floor-3">ชั้น 3</option>
                        <option value="floor-4">ชั้น 4</option>
                        <option value="floor-5">ชั้น 5</option>
                        <option value="floor-5-aj">ชั้น 5 - เฉพาะอาจารย์</option>
                        <option value="floor-6-mini-home-theatre">ชั้น 6 - Mini Home Theatre</option>
                        <option value="floor-6-karaoke">ชั้น 6 - คาราโอเกะ</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="room">ห้อง: </label>
                <div class="col-sm-6">
                    <select class="form-control" id="room" name="room">
                        <option value="room-1">ห้อง 1</option>
                        <option value="room-2">ห้อง 2</option>
                        <option value="room-3">ห้อง 3</option>
                        <option value="room-4">ห้อง 4</option>
                        <option value="room-5">ห้อง 5</option>
                        <option value="room-6">ห้อง 6</option>
                    </select>
                </div>
            </div>    
            <br>  
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </div>
@endsection 