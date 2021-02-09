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
                <label class="col-sm-1 control-label">Description: </label>
                <div class="col-sm-6">
                    <input class="form-control" id="description" type="text" placeholder="Description">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="date_start">Start: </label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="date_start" name="date_start">
                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="time_start" name="time_start">
                        <option value="08.00">08:00</option>
                        <option value="08.30">08:30</option>
                        <option value="09.00">09:00</option>
                        <option value="09.30">09:30</option>
                        <option value="10.00">10:00</option>
                        <option value="10.30">10:30</option>
                        <option value="11.00">11:00</option>
                        <option value="11.30">11:30</option>
                        <option value="12.00">12:00</option>
                        <option value="12.30">12:30</option>
                        <option value="13.00">13:00</option>
                        <option value="13.30">13:30</option>
                        <option value="14.00">14:00</option>
                        <option value="14.30">14:30</option>
                        <option value="15.00">15:00</option>
                        <option value="15.30">15:30</option>
                        <option value="16.00">16:00</option>
                        <option value="16.30">16:30</option>
                        <option value="17.00">17:00</option>
                        <option value="17.30">17:30</option>
                        <option value="18.00">18:00</option>
                        <option value="18.30">18:30</option>
                        <option value="19.00">19:00</option>
                        <option value="19.30">19:30</option>
                        <option value="20.00">20:00</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="date_start">End: </label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="date_end" name="date_end">
                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="time_end" name="time_end">
                        <option value="08.00">08:00</option>
                        <option value="08.30">08:30</option>
                        <option value="09.00">09:00</option>
                        <option value="09.30">09:30</option>
                        <option value="10.00">10:00</option>
                        <option value="10.30">10:30</option>
                        <option value="11.00">11:00</option>
                        <option value="11.30">11:30</option>
                        <option value="12.00">12:00</option>
                        <option value="12.30">12:30</option>
                        <option value="13.00">13:00</option>
                        <option value="13.30">13:30</option>
                        <option value="14.00">14:00</option>
                        <option value="14.30">14:30</option>
                        <option value="15.00">15:00</option>
                        <option value="15.30">15:30</option>
                        <option value="16.00">16:00</option>
                        <option value="16.30">16:30</option>
                        <option value="17.00">17:00</option>
                        <option value="17.30">17:30</option>
                        <option value="18.00">18:00</option>
                        <option value="18.30">18:30</option>
                        <option value="19.00">19:00</option>
                        <option value="19.30">19:30</option>
                        <option value="20.00">20:00</option>
                    </select>
                </div>
            </div> 
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="area">Area: </label>
                <div class="col-sm-6">
                    <select class="form-control" id="area" name="area">
                        <option value="floor-3">ชั้น 3 (3rd Floor)</option>
                        <option value="floor-4">ชั้น 4 (4th Floor)</option>
                        <option value="floor-5">ชั้น 5 (5th Floor)</option>
                        <option value="floor-5-aj">ชั้น 5 - เฉพาะอาจารย์</option>
                        <option value="floor-6-mini-home-theatre">ชั้น 6 - Mini Home Theatre</option>
                        <option value="floor-6-karaoke">ชั้น 6 - Karaoke</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-sm-1 control-label" for="room">Room: </label>
                <div class="col-sm-6">
                    <select class="form-control" id="room" name="room">
                        <option value="room-1">room 1</option>
                        <option value="room-2">room 2</option>
                        <option value="room-3">room 3</option>
                        <option value="room-4">room 4</option>
                        <option value="room-5">room 5</option>
                    </select>
                </div>
            </div>    
            <br>  
            <input class="btn btn-primary" type="submit" value="Submit">
        </div>
    </div>
@endsection 