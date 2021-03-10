@extends('layouts.userlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row justify-content-center">
                <h3 class="text-light heading-divided"><i class="fas fa-map-marker-alt"></i> โซนห้องประชุม</small></h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="select-floor">Floor</label>
                        <select id="select-floor" class="form-control">
                            <option value="floor-3">ชั้น 3 (3rd Floor)</option>
                            <option value="floor-4">ชั้น 4 (4th Floor)</option>
                            <option value="floor-5">ชั้น 5 (5th Floor)</option>
                            <option value="floor-5-aj">ชั้น 5 - เฉพาะอาจารย์</option>
                            <option value="floor-6-mini-home-theatre">ชั้น 6 - Mini Home Theatre</option>
                            <option value="floor-6-karaoke">ชั้น 6 - Karaoke</option>                        
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="select-room">Room</label>
                        <select id="select-room" class="form-control">
                            <option value="room-1">Room 1</option>
                            <option value="room-2">Room 2</option>
                            <option value="room-3">Room 3</option>
                            <option value="room-4">Room 4</option>
                            <option value="room-5">Room 5</option>
                            <option value="room-6">Room 6</option>
                        </select>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection