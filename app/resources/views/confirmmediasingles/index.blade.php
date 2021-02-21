@extends('layouts.app')

@section('content')
<div class="container">
    <div class ="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" align="center">
                    <h3>confirm_media_single</h3>
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
                                <th style="text-align:center">สถานะการอนุมัติ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($confirmmediasingles as $confirmmediasingle)
                            <tr>
                                <td style="text-align:center">{{ ++$i }}</td>
                                <td>{{ $confirmmediasingle->room_type }}</td>
                                <td>{{ $confirmmediasingle->room_floor }}</td>
                                <td>{{ $confirmmediasingle->room_name }}</td>
                                <td>{{ $confirmmediasingle->book_createtime }}</td>
                                <td>{{ $confirmmediasingle->book_starttime }}</td>
                                <td>{{ $confirmmediasingle->book_endtime }}</td>
                                <td style="text-align:center">{{ $confirmmediasingle->username }}</td>
                                <td style="text-align:center">{{ $confirmmediasingle->book_status }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection