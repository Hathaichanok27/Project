@extends('layouts.userlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row justify-content-center">
                <h3 class="text-light heading-divided"><i class="fas fa-map-marker-alt"></i> โซนห้องประชุม</small></h3>
                <div class="form-row">
                    <div class="form-group">
                        <label for="room_floor">ชั้น</label>
                        <select id="room_floor" class="form-control">
                            <option value="3">ชั้น 3</option>
                            <option value="4">ชั้น 4</option>
                            <option value="5">ชั้น 5</option>
                            <option value="5 - เฉพาะอาจารย์">ชั้น 5 - เฉพาะอาจารย์</option>
                            <option value="6 - มินิโฮมเธียเตอร์">ชั้น 6 - มินิโฮมเธียเตอร์</option>
                            <option value="6 - คาราโอเกะ">ชั้น 6 - คาราโอเกะ</option>                      
                        </select>
                    </div>
                </div>
                <!-- fullcalendar -->
                <div class="container">
                    <div class="response"></div>
                    <div id='calendar'></div>  
                </div>
            </div>
        </div>
    </div>
@endsection