@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-search"></i> จองห้องประชุม </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('roommedias.index') }}">จองห้องประชุม</a></li>
                </ul>   
            </div>

            <div id="div_name">
                <label for="name">Description</label>
                <input type="text" pattern="\s*\S+.*" id="name" name="name" required="" aria-required="true" maxlength="80" value="">
            </div>
            <br>
            <form action="">
                <label for="date_start">Start: </label>
                <input type="date" id="date_start" name="date_start">
                <select id="start_seconds" name="start_seconds" style="width: 144.8px;">
                <option value="28800">08:00</option>
                <option value="30600">08:30</option>
                <option value="32400">09:00</option>
                <option value="34200">09:30</option>
                <option value="36000">10:00</option>
                <option value="37800">10:30</option>
                <option value="39600">11:00</option>
                <option value="41400">11:30</option>
                <option value="43200">12:00</option>
                <option value="45000">12:30</option>
                <option value="46800">13:00</option>
                <option value="48600">13:30</option>
                <option value="50400">14:00</option>
                <option value="52200">14:30</option>
                <option value="54000">15:00</option>
                <option value="55800">15:30</option>
                <option value="57600">16:00</option>
                <option value="59400">16:30</option>
                <option value="61200">17:00</option>
                <option value="63000">17:30</option>
                <option value="64800">18:00</option>
                <option value="66600">18:30</option>
                <option value="68400">19:00</option>
                <option value="70200">19:30</option>
                <option value="72000">20:00</option>
                <option value="73800">20:30</option>
            </select>
            </form>  
            
            <br>
            <form action="">
                <label for="date_start">End: </label>
                <input type="date" id="date_start" name="date_start">
                <select id="start_seconds" name="start_seconds" style="width: 144.8px;">
                <option value="28800">08:00</option>
                <option value="30600">08:30</option>
                <option value="32400">09:00</option>
                <option value="34200">09:30</option>
                <option value="36000">10:00</option>
                <option value="37800">10:30</option>
                <option value="39600">11:00</option>
                <option value="41400">11:30</option>
                <option value="43200">12:00</option>
                <option value="45000">12:30</option>
                <option value="46800">13:00</option>
                <option value="48600">13:30</option>
                <option value="50400">14:00</option>
                <option value="52200">14:30</option>
                <option value="54000">15:00</option>
                <option value="55800">15:30</option>
                <option value="57600">16:00</option>
                <option value="59400">16:30</option>
                <option value="61200">17:00</option>
                <option value="63000">17:30</option>
                <option value="64800">18:00</option>
                <option value="66600">18:30</option>
                <option value="68400">19:00</option>
                <option value="70200">19:30</option>
                <option value="72000">20:00</option>
                <option value="73800">20:30</option>
            </select> 
            </form> 
            
            <br>
            <div id="div_areas" style="">
                <label for="area">Area:</label>
                <select id="area" name="area">
                <option value="8">พื้นที่ชั้น 3 (3rd Floor)</option>
                <option value="9" selected="selected">พื้นที่ชั้น 4 (4th Floor)</option>
                <option value="10">พื้นที่ชั้น 5 (5th Floor)</option>
                <option value="11">พื้นที่ชั้น 5 เฉพาะอาจารย์</option>
                <option value="12">พื้นที่ชั้น 6 (6th Floor)</option>
                <option value="13">Mini Home Theatre (6th Floor)</option>
                <option value="14">พื้นที่ชั้น 6 คาราโอเกะ</option>
                </select>
            </div>
            <br>
            <div id="div_areas" style="">
                <label for="area">Rooms:</label>
                <select id="area" name="area">
                <option value="8">room 1</option>
                <option value="9">room 2 </option>
                <option value="10">room 3</option>
                <option value="11">room 4</option>
                <option value="12">room 5</option>
                </select>
            </div>
            <input type="submit">
@endsection 