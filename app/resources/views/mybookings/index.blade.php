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
                            <th class="text-center">เวลาจอง</th>
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
                                <td class="text-center">{{ $reservemeet->room_floor }}</td>
                                <td class="text-center">{{ $reservemeet->room_name }}</td>
                                <td>{{ $reservemeet->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $reservemeet->time_start }}</td>
                                <td>{{ $reservemeet->time_end }}</td>
                                <td class="text-center">{{ $reservemeet->username }}</td>
                                <td class="text-center"><b style="color:#F62459">{{ $reservemeet->book_status }}</b></td>
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
                                <td>{{ $confirmmediagroup->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $confirmmediagroup->book_starttime }}</td>
                                <td>{{ $confirmmediagroup->book_endtime }}</td>
                                <td class="text-center">{{ $confirmmediagroup->username }}</td>
                                <td class="text-center"><b style="color:#F62459">{{ $confirmmediagroup->book_status }}</b></td>
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
                                <td>{{ $confirmmediasingle->created_at->format('d-m-Y H:i') }}</td>
                                <td>{{ $confirmmediasingle->book_starttime }}</td>
                                <td>{{ $confirmmediasingle->book_endtime }}</td>
                                <td class="text-center">{{ $confirmmediasingle->username }}</td>
                                <td class="text-center"><b style="color:#F62459">{{ $confirmmediasingle->book_status }}</b></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection