@extends('layouts.userlayout')

@section('content')
    <div class="container">
        <div class ="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" align="center">
                        <h3>รายการการจองห้องประชุม</h3>
                    </div>
                    <div class="card-body">  
                        <table class="table table-bordered">
                            <thead class="thread">
                                <tr class="text-center">
                                    <th style="text-align:center">รายการ</th>
                                    <th style="text-align:center">รหัสนิสิต</th>
                                    <th style="text-align:center">ชื่อ-นามสกุล</th>
                                    <th style="text-align:center">เวลาเริ่มต้น</th>
                                    <th style="text-align:center">เวลาสิ้นสุด</th>
                                    <th style="text-align:center">ชั้น</th>
                                    <th style="text-align:center">ห้อง</th>
                                    <th style="text-align:center">สถานะการจอง</th>
                                    <th style="text-align:center" width="280px">การกระทำ</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($reservemeets as $reservemeet)
                                <tr>
                                    <td style="text-align:center">{{ $reservemeet->id }}</td>
                                    <td>{{ $reservemeet->username }}</td>
                                    <td>{{ $reservemeet->user_fullname }}</td>
                                    <td>{{ $reservemeet->time_start }}</td>
                                    <td>{{ $reservemeet->time_end }}</td>
                                    <td>{{ $reservemeet->room_floor }}</td>
                                    <td>{{ $reservemeet->room_name }}</td>
                                    <td style="text-align:center">{{ $reservemeet->book_status }}</td>
                                    <td style="text-align:center">
                                        <form action="{{ route('reservemeets.destroy',$reservemeet->id) }}" method="POST">
                                            <a href="{{ route('reservemeets.show',$reservemeet->id) }}" class="btn btn-info" role="button" aria-pressed="true">ข้อมูลการจอง</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('คุณต้องการยกเลิกการจองใช่หรือไม่ ?');" id="btnDelete">ยกเลิก <i class="fas fa-times-circle"></i></button>
                                        </form>
                                    </td>
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