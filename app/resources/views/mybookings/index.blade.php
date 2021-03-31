@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-bookmark"></i> การจองของฉัน</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li class="active">การจองของฉัน</li>
                </ul>   
            </div>
            <div class="card-body">  
                <table class="table table-bordered">
                    <thead class="thread">
                        <tr> 
                            <th class="text-center">รายการ</th>
                            <th class="text-center">ประเภท</th>
                            <th class="text-center">ชั้น</th>
                            <th class="text-center">ห้อง</th>
                            <th class="text-center">วันเวลาที่จอง</th>
                            <th class="text-center">เวลาเริ่มต้น</th>
                            <th class="text-center">เวลาสิ้นสุด</th>
                            <th class="text-center">สร้างโดย</th>
                            <th class="text-center">สถานะการอนุมัติ</th>
                        </tr>
                    </thead>
                    
                    <!-- ห้องประชุม -->
                    <tbody>
                        @foreach($reservemeets as $reservemeet)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $reservemeet->room_type }}</td>
                                <td class="text-center"></td>
                                <td class="text-center">{{ $reservemeet->room_name }}</td>
                                <td class="text-center">{{ date("d-m-",strtotime($reservemeet->created_at)) }}{{ date("Y",strtotime($reservemeet->created_at))+543 }} {{ date("H:i",strtotime($reservemeet->created_at)) }}</td>
                                <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_starttime)) }}{{ date("Y",strtotime($reservemeet->book_starttime))+543 }} {{ date("H:i",strtotime($reservemeet->book_starttime)) }}</td>
                                <td class="text-center">{{ date("d-m-",strtotime($reservemeet->book_endtime)) }}{{ date("Y",strtotime($reservemeet->book_endtime))+543 }} {{ date("H:i",strtotime($reservemeet->book_endtime)) }}</td>
                                <td class="text-center">{{ $reservemeet->username }}</td>
                                <td class="text-center"><b style="color:<?php echo $reservemeet->book_status == 'รอการอนุมัติ'?'#f0ad4e':''?><?php echo $reservemeet->book_status == 'อนุมัติ'?'#5cb85c':''?><?php echo $reservemeet->book_status == 'ยกเลิกการจอง'?'#d9534f':''?><?php echo $reservemeet->book_status == 'คืนห้อง'?'#0275d8':''?>">{{$reservemeet->book_status}}</b></td>
                            </tr>
                        @endforeach
                    </tbody>

                    <!-- ห้องสื่อศึกษากลุ่ม -->
                    <tbody>
                        @foreach($confirmmediagroups as $confirmmediagroup)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $confirmmediagroup->room_type }}</td>
                                <td class="text-center">{{ $confirmmediagroup->room_floor }}</td>
                                <td class="text-center">{{ $confirmmediagroup->room_name }}</td>
                                <td class="text-center">{{ date("d-m-",strtotime($confirmmediagroup->created_at)) }}{{ date("Y",strtotime($confirmmediagroup->created_at))+543 }} {{ date("H:i",strtotime($confirmmediagroup->created_at)) }}</td>                               
                                @if (empty($confirmmediagroup->book_starttime))
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                @else
                                    <td class="text-center">{{ date("d-m-",strtotime($confirmmediagroup->book_starttime)) }}{{ date("Y",strtotime($confirmmediagroup->book_starttime))+543 }} {{ date("H:i",strtotime($confirmmediagroup->book_starttime)) }}</td>
                                    <td class="text-center">{{ date("d-m-",strtotime($confirmmediagroup->book_endtime)) }}{{ date("Y",strtotime($confirmmediagroup->book_endtime))+543 }} {{ date("H:i",strtotime($confirmmediagroup->book_endtime)) }}</td>
                                @endif
                                
                                <td class="text-center">{{ $confirmmediagroup->username }}</td>
                                <td class="text-center"><b style="color:<?php echo $confirmmediagroup->book_status == 'รอการอนุมัติ'?'#f0ad4e':''?><?php echo $confirmmediagroup->book_status == 'อนุมัติ'?'#5cb85c':''?><?php echo $confirmmediagroup->book_status == 'ยกเลิกการจอง'?'#d9534f':''?><?php echo $confirmmediagroup->book_status == 'คืนห้อง'?'#0275d8':''?>">{{$confirmmediagroup->book_status}}</b></td>
                            </tr> 
                        @endforeach
                    </tbody>

                    <!-- ห้องสื่อศึกษาเดี่ยว -->
                    <tbody>
                        @foreach($confirmmediasingles as $confirmmediasingle)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td>{{ $confirmmediasingle->room_type }}</td>
                                <td class="text-center">{{ $confirmmediasingle->room_floor }}</td>
                                <td class="text-center">{{ $confirmmediasingle->room_name }}</td>
                                <td class="text-center">{{ date("d-m-",strtotime($confirmmediasingle->created_at)) }}{{ date("Y",strtotime($confirmmediasingle->created_at))+543 }} {{ date("H:i",strtotime($confirmmediasingle->created_at)) }}</td>
                                @if (empty($confirmmediasingle->book_starttime))
                                <td class="text-center"></td>
                                <td class="text-center"></td>
                                @else
                                    <td class="text-center">{{ date("d-m-",strtotime($confirmmediasingle->book_starttime)) }}{{ date("Y",strtotime($confirmmediasingle->book_starttime))+543 }} {{ date("H:i",strtotime($confirmmediasingle->book_starttime)) }}</td>
                                    <td class="text-center">{{ date("d-m-",strtotime($confirmmediasingle->book_endtime)) }}{{ date("Y",strtotime($confirmmediasingle->book_endtime))+543 }} {{ date("H:i",strtotime($confirmmediasingle->book_endtime)) }}</td>
                                @endif
                                <td class="text-center">{{ $confirmmediasingle->username }}</td>
                                <td class="text-center"><b style="color:<?php echo $confirmmediasingle->book_status == 'รอการอนุมัติ'?'#f0ad4e':''?><?php echo $confirmmediasingle->book_status == 'อนุมัติ'?'#5cb85c':''?><?php echo $confirmmediasingle->book_status == 'ยกเลิกการจอง'?'#d9534f':''?><?php echo $confirmmediasingle->book_status == 'คืนห้อง'?'#0275d8':''?>">{{$confirmmediasingle->book_status}}</b></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection