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
                    <div class="col-sm-3">
                        <input type="text" class="form-control" readonly="readonly" name="username" value="{{ Auth::user()->username }}">
                        <input type="hidden" class="form-control" readonly="readonly" name="user_fullname" value="{{ Auth::user()->user_fullname }}">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label">ห้อง: </label>
                    <div class="col-sm-3">
                        <select class="form-control" name="room_name">
                            <option value="ชั้น 3 ห้อง 1">ชั้น 3 ห้อง 1 (Smart TV) (5)</option>
                            <option value="ชั้น 3 ห้อง 2">ชั้น 3 ห้อง 2 (5)</option>
                            <option value="ชั้น 3 ห้อง 3">ชั้น 3 ห้อง 3 (5)</option>
                            <option value="ชั้น 3 ห้อง 4">ชั้น 3 ห้อง 4 (5)</option>
                            <option value="ชั้น 3 ห้อง 5">ชั้น 3 ห้อง 5 (5)</option>
                            <option value="ชั้น 3 ห้อง 6">ชั้น 3 ห้อง 6 (Smart TV) (5)</option>
                            <option value="ชั้น 4 ห้อง 1">ชั้น 4 ห้อง 1 (5)</option>
                            <option value="ชั้น 4 ห้อง 2">ชั้น 4 ห้อง 2 (5)</option>
                            <option value="ชั้น 4 ห้อง 3">ชั้น 4 ห้อง 3 (5)</option>
                            <option value="ชั้น 4 ห้อง 4">ชั้น 4 ห้อง 4 (Smart TV) (5)</option>
                            <option value="ชั้น 4 ห้อง 5">ชั้น 4 ห้อง 5 (Smart TV) (5)</option>
                            <option value="ชั้น 5 ห้อง 1">ชั้น 5 ห้อง 1 (5)</option>
                            <option value="ชั้น 5 ห้อง 2">ชั้น 5 ห้อง 2 (5)</option>
                            <option value="ชั้น 5 ห้อง 3">ชั้น 5 ห้อง 3 (5)</option>
                            <option value="ชั้น 5 ห้อง 4">ชั้น 5 ห้อง 4 (Smart TV) (5)</option>
                            <option value="ชั้น 5 ห้อง 5">ชั้น 5 ห้อง 5 (Smart TV) (5)</option>
                            <option value="ชั้น 5 ห้องอาจารย์ 1">ชั้น 5 ห้องอาจารย์ 1 (3)</option>
                            <option value="ชั้น 5 ห้องอาจารย์ 2">ชั้น 5 ห้องอาจารย์ 2 (3)</option>
                            <option value="ชั้น 5 ห้องอาจารย์ 3">ชั้น 5 ห้องอาจารย์ 3 (3)</option>
                            <option value="ชั้น 6 ห้อง 604">ชั้น 6 ห้อง 604 (Smart Board) (8)</option>
                            <option value="ชั้น 6 ห้อง Mini Home Theatre">ชั้น 6 ห้อง Mini Home Theatre (30)</option>
                            <option value="ชั้น 6 ห้องคาราโอเกะ01">ชั้น 6 ห้องคาราโอเกะ01 (5)</option>
                            <option value="ชั้น 6 ห้องคาราโอเกะ02">ชั้น 6 ห้องคาราโอเกะ02 (5)</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_starttime">เวลาเริ่มต้น: </label>
                    <div class="col-sm-3">
                        <input type="datetime-local" class="form-control" name="book_starttime">  
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="book_endtime">เวลาสิ้นสุด: </label>
                    <div class="col-sm-3">
                        <input type="datetime-local" class="form-control" name="book_endtime">
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