@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="pull-left">
                    <h2>เพิ่มห้อง</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('managerooms.index') }}" title="Go back"><i class="fas fa-backward "></i> </a>
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
            
            <form action="{{ route('managerooms.store') }}" method="POST" >
                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ชั้น:</strong>
                            <select class="form-control" id="area_floor" name="area_floor">
                                <option value="ชั้น 3">ชั้น 3 (3rd Floor)</option>
                                <option value="ชั้น 4">ชั้น 4 (4th Floor)</option>
                                <option value="ชั้น 5">ชั้น 5 (5th Floor)</option>
                                <option value="ชั้น 5 - เฉพาะอาจารย์">ชั้น 5 - เฉพาะอาจารย์</option>
                                <option value="ชั้น 6 - มินิโฮมเธียเตอร์">ชั้น 6 - มินิโฮมเธียเตอร์</option>
                                <option value="ชั้น 6 - คาราโอเกะ">ชั้น 6 - คาราโอเกะ</option>
                                <option value="ชั้น 6 - ห้องสื่อศึกษาเดี่ยว">ชั้น 6 - ห้องสื่อศึกษาเดี่ยว</option>
                                <option value="ชั้น 6 - ห้องสื่อศึกษากลุ่ม">ชั้น 6 - ห้องสื่อศึกษากลุ่ม</option>
                            </select>  
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ประเภท:</strong>
                            <select class="form-control" id="room_type" name="room_type">
                                <option value="ห้องประชุม">ห้องประชุม</option>
                                <option value="ห้องสื่อศึกษาเดี่ยว">ห้องสื่อศึกษาเดี่ยว</option>
                                <option value="ห้องสื่อศึกษากลุ่ม">ห้องสื่อศึกษากลุ่ม</option>
                            </select>  
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
                            <strong>คำอธิบาย:</strong>
                            <input type="text" name="description" class="form-control" placeholder="คำอธิบาย">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ความจุ:</strong>
                            <input type="text" name="capacity" class="form-control" placeholder="ความจุ">
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