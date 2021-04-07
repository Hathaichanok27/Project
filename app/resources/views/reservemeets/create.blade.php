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
                    <label class="col-sm-1 control-label">ชั้น: </label>
                        <div class="col-sm-3">
                            <select onchange="showroom()"class="form-control" name="room_floor" id="room_floor">
                                <option>กรุณาเลือกชั้น</option>
                                @foreach($roomfloors as $roomfloor)
                                <option value="{{ $roomfloor->id }}">{{ $roomfloor->room_floor }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <br>
                <div class="form-group" id=div_room_name>
                    <label class="col-sm-1 control-label">ห้อง: </label>
                        <div class="col-sm-3">
                            <select onchange="showview()" class="form-control" name="room_name" id="room_name" disabled>
                                <option>กรุณาเลือกห้อง</option>
                                @foreach($rooms as $room)
                                    <option value="{{ $room->id }}">{{ $room->room_name }}</option>
                                @endforeach 
                            </select>  
                        </div> 
                    </div>
                </div>
                <br>
                <div id = "content">
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="book_startdate">วันเริ่มต้น: </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" size="10" id="datepicker-th" name="book_startdate" value="{{date('Y-m-d',strtotime($start))}}" disabled />
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="book_starttime">เวลาเริ่มต้น: </label>
                        <div class="col-sm-3">
                            <select class="form-control" name="book_starttime" disabled>
                                <option value="08:00">08:00</option>
                                <option value="08:30">08:30</option>
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="book_enddate">วันสิ้นสุด: </label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" size="10" id="datepicker-th-2" name="book_enddate" value="{{date('Y-m-d',strtotime($start))}}" disabled/>
                        </div>
                    </div> 
                    <br>
                    <div class="form-group">
                        <label class="col-sm-1 control-label" for="book_endtime">เวลาสิ้นสุด: </label>
                        <div class="col-sm-3">
                            <select class="form-control" name="book_endtime" disabled>
                                <option value="08:30">08:30</option>
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                                <option value="20:00">20:00</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <input type="hidden" class="form-control" name="room_type" value="ห้องประชุม">
                <input type="hidden" class="form-control" name="book_status" value="รอการอนุมัติ">    
                <br><br>
                <button type="submit" class="btn btn-success">ยืนยัน <i class="fas fa-check"></i></button>
                </div>
            </form>
        </div>
    </div>

    <!-- datepicker -->
    <link href="{{ asset('css/ui-lightness/jquery-ui-1.8.10.custom.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery-1.4.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.8.10.offset.datepicker.min.js') }}"></script>
    
    <script type="text/javascript">
        $(function () {
		    var d = new Date();
		    var toDay = d.getDate() + '-' + (d.getMonth() + 1) + '-' + (d.getFullYear() + 543);
		    $("#datepicker-th").datepicker({ dateFormat: 'yy-mm-dd', defaultDate: toDay, 
                dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
                dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
                monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
                monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});

		    $("#datepicker-th-2").datepicker({ changeMonth: true, changeYear: true,dateFormat: 'yy-mm-dd', defaultDate: toDay,
                dayNames: ['อาทิตย์','จันทร์','อังคาร','พุธ','พฤหัสบดี','ศุกร์','เสาร์'],
                dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
                monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
                monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.']});
     		
             $("#datepicker-en").datepicker({ dateFormat: 'yy-mm-dd'});
		    $("#inline").datepicker({ dateFormat: 'yy-mm-dd', inline: true });
		});
	</script>
    
    <script type="text/javascript">
        function showroom() {
            var xhttp;
            var y = document.getElementById("room_floor").value;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("div_room_name").innerHTML = this.responseText;
                }
            };
            var protocol = location.protocol;
            var slashes = protocol.concat("//");
            var host = slashes.concat(window.location.hostname);
            xhttp.open("GET", host + ":8080/selectrooms?id=" + y, true);
            xhttp.send();
        }
        function showview() {
            var xhttp;
            var x = document.getElementById("room_name").value;
            //var y = document.getElementById("room_floor").value;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("content").innerHTML = this.responseText;
                    // $('#view_'+str).modal('show');
                }
            };
            var protocol = location.protocol;
            var slashes = protocol.concat("//");
            var host = slashes.concat(window.location.hostname);
            xhttp.open("GET", host + ":8080/selecttimes?name=" + x+"&date=<?php echo date('Y-m-d',strtotime($start))?>", true);
            xhttp.send();
        }
    </script>
@endsection 
