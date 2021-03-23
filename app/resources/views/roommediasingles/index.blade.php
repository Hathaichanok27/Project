@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>จัดการห้องสื่อศึกษาเดี่ยว</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('roommediasingles.create') }}">เพิ่มห้อง <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align:center">ลำดับ</th>
                            <th style="text-align:center">ประเภท</th>
                            <th style="text-align:center">ชั้น</th>
                            <th style="text-align:center">ชื่่อห้อง</th> 
                            <th style="text-align:center">สถานะ</th>
                            <th style="text-align:center" width="280px">การกระทำ</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($roommediasingles as $roommediasingle)
                            <tr style="text-align:center">
                                <td>{{ ++$i }}</td>
                                <td>{{ $roommediasingle->room_type }}</td>
                                <td>{{ $roommediasingle->room_floor }}</td>
                                <td>{{ $roommediasingle->room_name }}</td>
                                <td class="text-center"><b style="color:<?php echo $roommediasingle->room_status == 'ไม่เปิดใช้งาน'?'#d9534f':''?><?php echo $roommediasingle->room_status == 'ว่าง'?'#5cb85c':''?><?php echo $roommediasingle->room_status == 'กำลังใช้งาน'?'#f0ad4e':''?>">{{$roommediasingle->room_status}}</b></td>
                                <td>
                                    <form action="{{ route('roommediasingles.destroy',$roommediasingle->id) }}" method="POST">
                                        <a href="{{ route('roommediasingles.show',$roommediasingle->id) }}" class="btn btn-info" role="button" aria-pressed="true"><i class="far fa-sticky-note fa-lg"></i></a>
                                        <a href="{{ route('roommediasingles.edit',$roommediasingle->id) }}" class="btn btn-primary" role="button" aria-pressed="true"><i class="far fa-edit fa-lg"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?');" id="btnDelete"><i class="far fa-trash-alt fa-lg"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                {!! $roommediasingles->links() !!}
            </div>
        </div>
    </div>
@endsection