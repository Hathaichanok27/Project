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
                        <tr class="text-center"> 
                            <th style="text-align:center">รายการ</th>
                            <th style="text-align:center">ประเภท</th>
                            <th style="text-align:center">ชั้น</th>
                            <th style="text-align:center">ห้อง</th>
                            <th style="text-align:center">เวลาจอง</th>
                            <th style="text-align:center">เวลาเริ่มต้น</th>
                            <th style="text-align:center">เวลาสิ้นสุด</th>
                            <th style="text-align:center">สร้างโดย</th>
                            <!-- <th style="text-align:center">สถานะการอนุมัติ</th> -->
                            <!-- <th style="text-align:center">การกระทำ</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($confirmmediasingles as $confirmmediasingle)
                            <tr>
                                <td style="text-align:center">{{ ++$i }}</td>
                                <td>{{ $confirmmediasingle->room_type }}</td>
                                <td>{{ $confirmmediasingle->room_floor }}</td>
                                <td>{{ $confirmmediasingle->room_name }}</td>
                                <td>{{ $confirmmediasingle->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $confirmmediasingle->book_starttime }}</td>
                                <td>{{ $confirmmediasingle->book_endtime }}</td>
                                <td style="text-align:center">{{ $confirmmediasingle->username }}</td>
                                <!-- <td style="text-align:center">{{ $confirmmediasingle->book_status }}</td> -->
                                <!-- <td class="text-center">
                                    <ul class="icons-list">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="{{ route('detailreserves.index') }}" ng-click="bookInfoModal(q.book_id)"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td> -->
                            </tr>
                        @endforeach
                    </tbody>

                    <tbody>
                        @foreach($confirmmediagroups as $confirmmediagroup)
                            <tr>
                                <td style="text-align:center">{{ ++$i }}</td>
                                <td>{{ $confirmmediagroup->room_type }}</td>
                                <td>{{ $confirmmediagroup->room_floor }}</td>
                                <td>{{ $confirmmediagroup->room_name }}</td>
                                <td>{{ $confirmmediagroup->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $confirmmediagroup->book_starttime }}</td>
                                <td>{{ $confirmmediagroup->book_endtime }}</td>
                                <td style="text-align:center">{{ $confirmmediagroup->username }}</td>
                                <!-- <td style="text-align:center">{{ $confirmmediagroup->book_status }}</td> -->
                            </tr>
                        @endforeach
                    </tbody>

                    <tbody>
                        @foreach($reservemeets as $reservemeet)
                            <tr>
                                <td style="text-align:center">{{ ++$i }}</td>
                                <td>{{ $reservemeet->room_type }}</td>
                                <td>{{ $reservemeet->room_floor }}</td>
                                <td>{{ $reservemeet->room_name }}</td>
                                <td>{{ $reservemeet->created_at->format('d/m/Y H:i') }}</td>
                                <td>{{ $reservemeet->time_start }}</td>
                                <td>{{ $reservemeet->time_end }}</td>
                                <td>{{ $reservemeet->username }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection